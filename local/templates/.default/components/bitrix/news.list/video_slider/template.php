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
<? if($arResult["ITEMS"]):?>
<div class="main-feedback_block">
    <div class="main-feedback_slider js-main-feedback_slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="main-feedback_cart">
			<div class="thumb-wrap">
				<? if($arItem["PROPERTIES"]["VIDEO_NAME"] && ($videoName = $arItem["PROPERTIES"]["VIDEO_NAME"]["VALUE"]) && file_exists($_SERVER['DOCUMENT_ROOT'] . "/upload/video/$videoName-2.mp4") ):
                    $videoPreviewID = $arItem["PROPERTIES"]["PREVIEW_IMG"]["VALUE"] ? : '';
                    $videoPreview = $videoPreviewID ? CFile::ResizeImageGet($videoPreviewID, ['width' => '500', 'height' => '300'], BX_RESIZE_IMAGE_EXACT)['src'] : '';
					?>
                    <label class="video-label" for=""><?=$arItem["NAME"];?></label>
				  <video title="<?=$arItem["NAME"];?>" class="video_play-our" muted="" playsinline="" poster="<?=$videoPreview;?>" webkit-playinginline="" data-autoplay="" controls>
						<source src="/upload/video/<?=$videoName;?>-2.mp4" type="video/mp4">
					  <source src="/upload/video/<?=$videoName;?>-2.webm" type="video/webm">
						<source src="/upload/video/<?=$videoName;?>-2.ogv" type="video/ogv">
				  </video>
				<? endif;?>

			</div>
        </div>
        <!-- /.main-feedback_cart -->
    </div>
<?endforeach;?>
    </div>
    <!-- /.main-feedback_slider -->
</div>
<? endif;?>
<!-- /.main-feedback_block -->

<? /* <div class="main-feedback_bottom js-main-feedback_arr">
    <div class="counter">
        <div class="counter_numb">
            1/3
        </div>
        <!-- /.counter_numb -->
    </div>
    <!-- /.counter -->
</div>
<!-- /.main-feedback_bottom --> */ ?>