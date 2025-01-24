<?php 
	$_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__)."/../..");
	$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];	
	define("NO_KEEP_STATISTIC", true);
	define("NOT_CHECK_PERMISSIONS",true);
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	require_once $_SERVER['DOCUMENT_ROOT']."/local/include/class_currency.php"; 
	
	$cur = new CurrencyLoad();
	$cur->check();
	
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>