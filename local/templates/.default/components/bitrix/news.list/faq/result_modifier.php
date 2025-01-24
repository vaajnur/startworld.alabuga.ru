<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->__component->SetResultCacheKeys(array("CACHED_TPL"));


$cur = new CurrencyLoad();

foreach($arResult["ITEMS"] as &$arItem)
{
	if($arItem["PROPERTIES"]["ALLOWANCE"]["VALUE"] > 0)
	{
		$arItem['CUR_PRICE'] = $cur->exchange($arItem["PROPERTIES"]["ALLOWANCE"]["VALUE"], 'USD');
	}
}
