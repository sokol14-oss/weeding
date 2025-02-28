<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?session_start()?>

<?if (!empty($arResult)):?>
<?include "/home/bitrix/www/bitrix/templates/exam1/components/bitrix/news/tovary/bitrix/news.detail/.default"?>
<nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        <ul class="">
                           
                        

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li <?if(isset($arItem['PARAMS']['BASKET'])):?> class="basket"<?endif;?><?if(isset($arItem["PARAMS"]["CLASS"])):?> class="main-page"<?endif;?>><a href="<?=$arItem["LINK"]?>" <?if(isset($arItem["PARAMS"]["COLOR"])):?> class="color-<?=$arItem["PARAMS"]["COLOR"]?>" <?endif;?> ><?=$arItem["TEXT"]?> <?if(isset($arItem["PARAMS"]["COUNT"])):?><span><<? echo count($_SESSION['basket']) + $_SESSION['count']?>></span> <?endif;?></a>
				<ul>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if(isset($arItem['PARAMS']['BASKET'])):?> class="basket"<?endif;?> <?if(isset($arItem["PARAMS"]["CLASS"])):?>class="main-page" <?endif;?>><a href="<?=$arItem["LINK"]?>" <?if(isset($arItem["PARAMS"]["COLOR"])):?> class="color-<?=$arItem["PARAMS"]["COLOR"]?>"<?endif;?> ><?=$arItem["TEXT"]?> <?if(isset($arItem["PARAMS"]["COUNT"])):?><span><? echo count($_SESSION['basket']) + $_SESSION['count']?></span> <?endif;?></a></li>
			<?else:?>
				<li<?if(isset($arItem["PARAMS"]["CLASS"])):?>class="main-page"<?endif;?>><a href="<?=$arItem["LINK"]?>"  ><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if(isset($arItem['PARAMS']['BASKET'])):?> class="basket"<?endif;?> style="display: none;" <?if(isset($arItem["PARAMS"]["CLASS"])):?>class="main-page"<?endif;?>><a href=""  title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li style="display: none;"><a href=""  title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
<?endif?>