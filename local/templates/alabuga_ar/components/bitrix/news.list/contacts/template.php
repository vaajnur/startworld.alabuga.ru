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

<div class="list">
    <ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>    
    <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a href="mailto:<?=$arItem["DISPLAY_PROPERTIES"]["EMAIL"]["DISPLAY_VALUE"]?>" target="_blank">
            <div class="icon">
            	<? if($arItem["PREVIEW_PICTURE"]["ID"] > 0):?>
					<? $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>70, 'height'=>70), BX_RESIZE_IMAGE_EXACT, true); ?>   
                    <img src="<?=$file['src']?>" alt="" class="mw-100 d-block">
                <? else: ?>
					<? if($arItem["PROPERTIES"]["SEX"]["VALUE_XML_ID"] == 'male'):?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/male_icon.svg" alt="" class="mw-100 d-block">                
                    <? else: ?>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icon/woman_icon.svg" alt="" class="mw-100 d-block">
                    <? endif ?>
                <? endif ?>
            </div>
            <div class="desc">
                <div class="name">
                    <?=($arItem["PROPERTIES"]["NAME_".LANGUAGE_ID]["VALUE"])?$arItem["PROPERTIES"]["NAME_".LANGUAGE_ID]["VALUE"]:$arItem["NAME"]?>:
                </div>
                <div class="email">
                    <?=$arItem["DISPLAY_PROPERTIES"]["EMAIL"]["DISPLAY_VALUE"]?>
                </div>
            </div>
        </a>
    </li>
<?endforeach;?>
	</ul>
</div>
<!-- /.list -->