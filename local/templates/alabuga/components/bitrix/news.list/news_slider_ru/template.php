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
<div class="main-news_block main-zone_block">
<?if(CSite::InDir('/fr/')) {?>
<h3>Actualités</h3>
<?}else if(CSite::InDir('/ru/')) {?>
<h3>Новости</h3>
<?}else{?>
<h3>NEWS</h3>
<?}?>

    <? /* <div class="main-news_bottom js-main-news_arr">
        <div class="counter_news">
            <div class="counter_news_numb">
                1/3
            </div>
            <!-- /.counter_numb -->
        </div>
        <!-- /.counter -->
    </div>*/ ?>
    <!-- /.main-_bottom -->
    <div class="main-news_slider js-main-news_slider">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="main-news_cart">
            	<? if(is_array($arItem["PREVIEW_PICTURE"])) : ?>
                <? $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>500, 'height'=>260), BX_RESIZE_IMAGE_EXACT , true);  ?>
                <div class="pic"><a href="javascript:;" data-fancybox data-src="#detail_<?=$arItem['ID']?>"><img src="<?=$file['src']?>" alt=""></a></div>
                <?else:?>
                <div class="pic"><a href="javascript:;" data-fancybox data-src="#detail_<?=$arItem['ID']?>"><img src="<?=$templateFolder?>/images/empty.jpg" alt=""></a></div>
                <? endif ?>
                <div class="name"><a href="javascript:;" data-fancybox data-src="#detail_<?=$arItem['ID']?>"><?=$arItem['NAME']?></a></div>
                <? if($arItem['PREVIEW_TEXT']): ?><div class="prev"><?=$arItem['PREVIEW_TEXT']?></div><? endif ?>
                <div class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
            </div>
            <!-- /.main-news_cart -->
            <? if($arItem["DETAIL_TEXT"]):?>
            <div style="display: none; max-width: 800px; max-height: 100%;" id="detail_<?=$arItem['ID']?>" class="news_detail">
            	<div class="name"><?=$arItem['NAME']?></div>
            	<? if($arItem["DETAIL_PICTURE"]):?>
                <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="" />
                <? endif?>
                <div class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
            	<?=$arItem["DETAIL_TEXT"]?>
            </div>
            <? endif ?>
        </div>
    <?endforeach;?>
    </div>
    <!-- /.main-news_slider -->
</div>
<!-- /.main-news_block -->