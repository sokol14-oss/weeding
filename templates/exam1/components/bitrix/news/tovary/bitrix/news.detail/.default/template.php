<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
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
session_start();
?>
<div class="news-detail">
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
<h3><?=$arResult["NAME"]?></h3>
<div><?echo $arResult["DETAIL_TEXT"]?></div>
<div>Цена: <?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?></div>
<div>Валюта: <?=$arResult["DISPLAY_PROPERTIES"]["PRICECURRENCY"]["DISPLAY_VALUE"]?></div>
<div> Материал: <?=$arResult["DISPLAY_PROPERTIES"]["MANUFACTURER"]["DISPLAY_VALUE"]?></div>
<div style="clear:both"></div>
</div>


<form method="GET" name="form" action="">
<input type="text" name="count" placeholder="Введите количество">
<input type="hidden" id="element_id" value="<?=$arResult['ID']?>">
<button type="submit" name="button"> купить</button>
</form>

<?
$button=isset($_GET["button"]) ? $_GET["button"] : "данных нет";
$count=isset($_GET["count"]) ? $_GET["count"]  : 0;
$id=isset($_GET["ELEMENT_ID"]) ? $_GET["ELEMENT_ID"] : 0;
$_SESSION["count"]=$count;
for($i=0;$i <= count($_SESSION['basket']);$i++ ) {
if(!empty($_SESSION['basket'])) {
	$arrBasket=$_SESSION['basket'];
}
else {
	$arrBasket = array();
}
$arrBasket[$id]=$arrBasket[$id];
$_SESSION['basket']=$arrBasket;
}
echo $_SESSION['count'];
print_r($_SESSION);


?>




