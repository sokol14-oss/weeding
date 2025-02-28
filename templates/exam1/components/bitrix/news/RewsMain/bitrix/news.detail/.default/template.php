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
 <hr>
           				<div class="review-block">
							<div class="review-text">
								<div class="review-text-cont">
									<?echo $arResult["DETAIL_TEXT"];?>
								</div>
								<div class="review-autor">
									<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?>.
								</div>
							</div>
							<div style="clear: both;" class="review-img-wrap">
								<?if(isset($arResult["DETAIL_PICTURE"]["SRC"])):?>
								<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img">
								<?else:?>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg" alt="img">
								<?endif;?>
							</div>
						</div>




