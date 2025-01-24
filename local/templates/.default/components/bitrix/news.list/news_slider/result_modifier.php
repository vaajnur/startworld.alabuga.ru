<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$item){
	if($item['PROPERTIES'] && $item['PROPERTIES']['GALLERY'] 
		&& $item['PROPERTIES']['GALLERY']['VALUE']){
		foreach($item['PROPERTIES']['GALLERY']['VALUE'] as $fid){
			$item['GALLERY'][] = CFile::ResizeImageGet($fid, array('width'=>700, 'height'=>465), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$item['GALLERY_MOB'][] = CFile::ResizeImageGet($fid, array('width'=>350, 'height'=>200), BX_RESIZE_IMAGE_PROPORTIONAL, true);

		}
	}
}
