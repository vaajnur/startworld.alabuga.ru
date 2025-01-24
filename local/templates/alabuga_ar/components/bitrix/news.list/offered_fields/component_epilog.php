<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

echo preg_replace_callback(
	"/#PRICE_([\d]+)#/is".BX_UTF_PCRE_MODIFIER,
	function ($matches) {
		ob_start();
		switch(LANGUAGE_ID)
		{
			case 'en':
			case 'es':
			case 'pt':
				$curSign = 'RUB';
				break;
			case 'ru':
				$curSign = 'руб.';
				break;
			case 'fr':
				$curSign = 'roubles';
				break;
			case 'ar':
				$curSign = 'روبل';
				break;
			default:
				$curSign = 'RUB';
		}
		$cur = new CurrencyLoad();
		echo '<i>'.number_format((int)$matches[1], 0, '', '&nbsp;').' '.$curSign.' <font style="color: #000;">('.$cur->exchange((int)$matches[1], 'USD').'$)</font></i>';
		$retrunStr = @ob_get_contents();
		ob_get_clean();
		return $retrunStr;
	},
	$arResult["CACHED_TPL"]);
?>