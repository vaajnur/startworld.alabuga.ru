<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<ul>
<?
if(!function_exists("__DrawLevelMenuTreeT")):
function __DrawLevelMenuTreeT($ar, $ind, &$f = false)
{
	$res = '';
	$l = count($ar);
	$arItem = $ar[$ind];
	
	if($arItem["SELECTED"])
		$css = 'class="selected"';

	if($arItem["IS_PARENT"])
	{
		for($i=$ind+1; $i<$l; $i++)
		{
			$item = $ar[$i];
			if($arItem["DEPTH_LEVEL"]>=$item["DEPTH_LEVEL"])
				break;
			if($arItem["DEPTH_LEVEL"]==$item["DEPTH_LEVEL"]-1)
				$res .= __DrawLevelMenuTreeT($ar, $i, $f);
		}

		if($arItem["DEPTH_LEVEL"]>1 && $arItem["SELECTED"] && !$f)
		{
			$res = '<li class="current">'.$arItem["TEXT"].'<ul>'.$res.'</ul>';
			$f = true;
		}
		else
			$res = '<li '.$css.'><a '.$css.' title="'.$arItem["TEXT"].'" href="'.$arItem["LINK"].'" onclick="_txq.push([\'track\', \'section\']);">'.$arItem["TEXT"].'</a><ul>'.$res.'</ul>';
	}
	else
	{
		if($arItem["SELECTED"] && $arItem["DEPTH_LEVEL"]>1)
		{
			$f = true;
			$res .= '<li class="current">'.$arItem["TEXT"].'';
		}
		else
			$res .= '<li '.$css.'><a '.$css.' title="'.$arItem["TEXT"].'" href="'.$arItem["LINK"].'" onclick="_txq.push([\'track\', \'section\']);">'.$arItem["TEXT"].'</a>';
	}
	return $res;
}
endif;

foreach($arResult as $ind=>$arItem)
	if($arItem["DEPTH_LEVEL"]==1)
		echo __DrawLevelMenuTreeT($arResult, $ind);
?>
</ul>
<?endif?>