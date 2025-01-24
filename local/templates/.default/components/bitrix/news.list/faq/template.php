<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
ob_start();
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
__IncludeLang($_SERVER["DOCUMENT_ROOT"].$templateFolder.'/lang/'.LNG_ID.'/template.php');
?>
<div class="main-fields">
    <div class="page__wrap">
    	<a href="javascript:;" class="showBlock"><h2><?=GetMessage('BLOCK_TTL_FST')?></h2></a>
        <div class="main-fields_block">
            <div class="d-flex flex-wrap justify-content-center">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>    
    <div class="bx" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="cart-fields">
            <div class="cart-fields_top">
                <div class="name">                    
                	<?=($arItem["PROPERTIES"]["NAME_".LNG_ID]["VALUE"])?$arItem["PROPERTIES"]["NAME_".LNG_ID]["VALUE"]:$arItem["NAME"]?>
                </div>
                <!-- /.name -->

                <div class="btn">
                    <a href="javascript:;" class="page__btn page__btn--curr getModal">
                        <span>
                            <?=GetMessage('MORE_BTN')?>
                        </span>
                    </a>
                </div>
            </div>
            <!-- /.cart-fields_top -->
            
            <div class="cart-fields_btn">
                <a href="javascript:;" class="page__btn page__btn--curr getModal">
                    <span>
	                    <?=GetMessage('MORE_BTN')?>
                    </span>
                </a>
            </div>
            <!-- /.cart-fields_btn -->
        </div>
        <!-- /.cart-fields -->                  	
        
		<div class="modal">
			<div class="modal-overflow"></div>
			<!-- /.modal-overflow -->

			<div class="modal-container">
				<a href="javascript:;" class="modal-close"></a>
				<!-- /.modal-close -->
				<div class="modal-top">
					<div class="ttl">
	                	<?=($arItem["PROPERTIES"]["NAME_".LNG_ID]["VALUE"])?$arItem["PROPERTIES"]["NAME_".LNG_ID]["VALUE"]:$arItem["NAME"]?>
					</div>
				</div>
				<!-- /.modal-top -->
				<div class="modal-mid">
					<div class="desc">
                    	<?=($arItem["PROPERTIES"]["PREVIEW_TEXT_".LNG_ID]["~VALUE"]["TEXT"])?$arItem["PROPERTIES"]["PREVIEW_TEXT_".LNG_ID]["~VALUE"]["TEXT"]:$arItem["PREVIEW_TEXT"]?>
					</div>
                    <div class="modal_slider">
                    	<? 
							if(is_array($arItem["PROPERTIES"]["SLIDES_".LNG_ID]["VALUE"]) && count($arItem["PROPERTIES"]["SLIDES_".LNG_ID]["VALUE"]) > 0)
								$arSlides = $arItem["PROPERTIES"]["SLIDES_".LNG_ID]["VALUE"];
							if(!is_array($arSlides) && is_array($arItem["PROPERTIES"]["SLIDES"]["VALUE"]))
								$arSlides = $arItem["PROPERTIES"]["SLIDES"]["VALUE"];
						?>
                    	<? foreach($arSlides as $slide):?>
                        <img src="<?=CFile::GetPath($slide)?>" alt="" />
                        <? endforeach ?>
                    </div>
                    <? if($arItem["PROPERTIES"]["YT_VIDEO_".LNG_ID]["VALUE"]):?>
                        <div class="thumb-wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$arItem["PROPERTIES"]["YT_VIDEO_".LNG_ID]["VALUE"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
            		<? endif ?>
                    <? if(!$arItem["PROPERTIES"]["YT_VIDEO_".LNG_ID]["VALUE"] && $arItem["PROPERTIES"]["YT_VIDEO"]["VALUE"]):?>
                        <div class="thumb-wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$arItem["PROPERTIES"]["YT_VIDEO"]["VALUE"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
            		<? endif ?>
				</div>
				<!-- /.modal-mid -->
			</div>
			<!-- /.modal-container -->
		</div>
		<!-- /.modal -->
    </div>
    <!-- /.bx -->
    <? unset($arSlides);?>
<?endforeach;?>
            </div>
        </div>
        <!-- /.main-fields_block -->
    </div>
</div>
<!-- /.main-fields -->
<?
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();
?>