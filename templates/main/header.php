<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
$page=$APPLICATION->GetCurPage(false);
if($page=="/") {
    $main=true;
}

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
<?$APPLICATION->ShowHead();?>
<?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css")?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<?$APPLICATION->ShowPanel();?>


	<!-- wrap -->


		<div class="wrap">
				
		
		<!-- header-->
	<header class="header">
		<div class="logo-header"><a href="/index.php" class="logo_header">Особняк</a></div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "leftfirst",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(0=>"",),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);?>
		<div class="header-button"><button type="submit">Расчитать стоимость</button></div>

<div id="popup">
	 <button class="close">close</button>
	<form id="calk" method="get" action="" name="popup">
		<input type="text" name="text" value="text">
		<input type="text" name="tel" value="tel">

	</form>
</div>

	</header>
	<!-- /header-->
	<hr>

	<!-- content-box -->
	<?if($main):?>
	<div class="content-box">
		<div class="title">
			<h1>Добро пожаловать в наш банкетный зал!</h1>
			<div class="logo-adress"><a href="" class="logo_adress">Адрес</a></div>
			<div class="action-block">
				<div class="action-title">Мы поможем вам организовать любое торжество:</div>
				<div class="action-text"><p>Свадьбу, юбилей, корпоратив или деловой ужин. Уютные залы, изысканное меню и удобное расположение в центре Самары сделают ваше событие незабываемым</p>
				</div>
				<div class="reserv-button"><button type="submit">Забронировать дату</button></div>
		</div>
	</div>
	<div class="image-block">
		<div class="image">
		<img src="">
	</div>
	<div class="preview">

				<div class="preview_content">Три зала на выбор: Белый, Каминный и Атриум</div>
				<div class="preview_content"><li>Вместимость до 200 человек</div>
				<div class="preview_content"><li>Стоимость от 2.000 руб/чел</div>
				<div class="preview_content"><li>Удобное расположение г. Самара, ул. Кольцевая, д. 79</div>
	
	</div>
	<!-- /preview -->
</div>
<!-- /image-block -->
<?else:?>
<div class="content-box">

     	<h1><?$APPLICATION->showTitle(true)?></h1>
     	<hr>
     

<?endif;?>
<script type="text/javascript">
	const button= document.querySelector(".header-button");
	const popup = document.querySelector("#popup");
	const close= document.querySelector(".close");
	button.onclick = function () {
  popup.style.display = 'block';
};
close.onclick = function () {
  popup.style.display = 'none';
};


</script>
<!-- /content-box -->



	