<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
   <div class="review-block">
							<div class="review-text">
							
								<div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span><span class="review-block-description"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?>, <?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>, <?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?></span></div>
								
								<div class="review-text-cont">
									<?echo $arItem["PREVIEW_TEXT"];?>
								</div>
							</div>
							<div class="review-img-wrap"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<?if(isset($arItem["PREVIEW_PICTURE"]["SRC"])):?>
								<?$img=CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>49, 'height'=>49), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
								<img src="<?=$img["src"]?>" alt="img">
								<?else:?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">
								<?endif;?>
							</a></div>
						</div>
						<?if(isset($arItem["DISPLAY_PROPERTIES"]["EDUCATION"]["DISPLAY_VALUE"])):?>

						<div class="exam-review-doc">
						<p><?=getMessage("EDUCATION")?>:<p>
						<?if(is_array($arItem["DISPLAY_PROPERTIES"]["EDUCATION"]["DISPLAY_VALUE"])):?>
							<ul>
								<?foreach ($arItem["DISPLAY_PROPERTIES"]["EDUCATION"]["DISPLAY_VALUE"] as $value):?> 
								<li><?=$value;?></li>
								<?endforeach;?>
							</ul>
							<?else:?>
								<?echo $arItem["DISPLAY_PROPERTIES"]["EDUCATION"]["DISPLAY_VALUE"];?>
						<?endif;?>
						</div>
						<?endif;?>
						
                    
	<?endforeach;?>

