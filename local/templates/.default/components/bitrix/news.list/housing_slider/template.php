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
<div class="hosing_slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="item">
        <div class="house_slider">
            <? foreach($arItem["PROPERTIES"]["PHOTO"]["VALUE"] as $photo):?>
                <? $file = CFile::ResizeImageGet($photo, array('width'=>591, 'height'=>720), BX_RESIZE_IMAGE_EXACT , true);  ?>
                <a title="<?=$arItem["PROPERTIES"]['NAME_'.LNG_ID]["VALUE"]?>" href="<?=CFile::GetPath($photo)?>" data-fancybox="house_<?=$arItem['ID']?>"><img src="<?=$file['src']?>" alt="<?=$arItem["PROPERTIES"]['NAME_'.LNG_ID]["VALUE"]?>" /></a>
            <? endforeach ?>
        </div>
        <div class="head_txt"><?=$arItem["PROPERTIES"]['NAME_'.LNG_ID]["VALUE"]?></div>
    </div>
    <?endforeach;?>
</div>