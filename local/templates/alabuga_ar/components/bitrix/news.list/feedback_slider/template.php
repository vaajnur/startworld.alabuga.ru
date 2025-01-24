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
<div class="main-feedback_block">
    <div class="main-feedback_slider js-main-feedback_slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	if(!$arItem["DISPLAY_PROPERTIES"]["REVIEW_".LANGUAGE_ID]["DISPLAY_VALUE"]) continue;
	?>
    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="main-feedback_cart rtl">
			<?if($arItem["PROPERTIES"]["YEAR"]){?>
				<div class="year">
					<?=$arItem["PROPERTIES"]["YEAR"]["VALUE"];?>
				</div>
			<?}?>
            <div class="top">
                <div class="info">
                	<?=$arItem["DISPLAY_PROPERTIES"]["REVIEW_".LANGUAGE_ID]["DISPLAY_VALUE"]?>
                </div>
            </div>

            <div class="group">
                <div class="img">
                	<? if(is_array($arItem["PREVIEW_PICTURE"])):?>
                    	<? $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>90, 'height'=>90), BX_RESIZE_IMAGE_EXACT, true); ?>
	                    <img src="<?=$file['src']?>" alt="" class="mw-100 d-block">
                    <? endif ?>
                </div>
                <div class="desc">
                    <div class="name">
                	<?=$arItem["DISPLAY_PROPERTIES"]["NAME_".LANGUAGE_ID]["DISPLAY_VALUE"]?>
                    </div>
                    <div class="city">
                	<?=$arItem["DISPLAY_PROPERTIES"]["COUNTRY_".LANGUAGE_ID]["DISPLAY_VALUE"]?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.main-feedback_cart -->
    </div>
<?endforeach;?>
    </div>
    <!-- /.main-feedback_slider -->
</div>
<!-- /.main-feedback_block -->

<? /* <div class="main-feedback_bottom js-main-feedback_arr">
    <div class="counter rtl">
        <div class="counter_numb">
            1/3
        </div>
        <!-- /.counter_numb -->
    </div>
    <!-- /.counter -->
</div>
<!-- /.main-feedback_bottom --> */ ?>