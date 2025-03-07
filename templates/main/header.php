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
	<!-- wrap -->
	<div class="wrap">
		<?$APPLICATION->ShowPanel();?>
		<!-- header-->
	<header class="header">
		<div class="logo-header"><a href="/index.php" class="logo_header">Особняк</a></div>
		<nav class="nav">
			<ul>
				<li><a href="">Банкетные залы</a></li>
				<li><a href="">Готовые предложения</a></li>
				<li><a href="">Свадьбы</a></li>
				<li><a href="">О нас</a></li>
				<li><a href="">Контакты</a></li>
			</ul>
		</nav>
		<div class="header-button"><button type="submit">Расчитать стоимость</button></div>
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
		<ul>
				<li>Три зала на выбор: Белый, Каминный и Атриум</li>
				<li>Вместимость до 200 человек</li>
				<li>Стоимость от 2.000 руб/чел</li>
				<li>Удобное расположение г. Самара, ул. Кольцевая, д. 79</li>
			</ul>
	</div>
	<!-- /preview -->
</div>
<!-- /image-block -->
</div>
<?else:?>
<div class="content-box">
	<header>
     	<h1><?$APPLICATION->showTitle(true)?></h1>
     </header>
</div>
<?endif;?>
<!-- /content-box -->



	