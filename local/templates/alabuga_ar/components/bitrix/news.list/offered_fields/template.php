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
?>
<div class="main-fields rtl">
    <div class="page__wrap">
        <h2>
            الحقول المعروضة
        </h2>
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
                	<?=$arItem["PROPERTIES"]["NAME_".LANGUAGE_ID]["VALUE"]?>
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
            
            <div class="cart-fields_block">
                <div class="group">
                    <div class="subname">                    
                        <?=GetMessage('PROGRAM_DURATION')?>:
                    </div>
                    <div class="desc">                        
                		<?=$arItem["PROPERTIES"]["DURATION_".LANGUAGE_ID]["VALUE"]?>
                    </div>
                </div>
                <div class="group">
                    <div class="subname">
                        <?=GetMessage('INITIAL_MONTHLY_ALLOWANCE')?>
                    </div>
                    <div class="desc">                        
                		<?=str_replace(' ', '&nbsp;', $arItem["PROPERTIES"]["ALLOWANCE"]["VALUE"])?> <?=GetMessage('RUB')?>
						<?=($arItem['CUR_PRICE'])?'<span style="color: #000;">('.$arItem['CUR_PRICE'].'$)</span>':''?>
                    </div>
                </div>
            </div>
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
	                	<?=$arItem["PROPERTIES"]["NAME_".LANGUAGE_ID]["VALUE"]?>
					</div>
					<div class="desc">
						<?=GetMessage('PROGRAM_DURATION')?>: <i><?=$arItem["PROPERTIES"]["DURATION_".LANGUAGE_ID]["VALUE"]?></i>
					</div>
					<div class="desc">
						<?=GetMessage('INITIAL_MONTHLY_ALLOWANCE')?> <i><?=str_replace(' ', '&nbsp;', $arItem["PROPERTIES"]["ALLOWANCE"]["VALUE"])?> <?=GetMessage('RUB')?></i>
						<?=($arItem['CUR_PRICE'])?'<span style="color: #000;">('.$arItem['CUR_PRICE'].'$)</span>':''?>
					</div>
				</div>
				<!-- /.modal-top -->
				<div class="modal-mid rtl">
					<div class="name">
						<?=GetMessage('FINAL_RESULTS')?>
					</div>
                    <? foreach($arItem["PROPERTIES"]["RESULTS_".LANGUAGE_ID]["VALUE"] as $results):?>
					<div class="desc">
						<?=$results?>
					</div>
                    <? endforeach ?>
				</div>
				<!-- /.modal-mid -->
				<div class="modal-bottom rtl">
                   	<? foreach($arItem["PROPERTIES"]["STAGES_".LANGUAGE_ID]["~VALUE"] as $i => $stage):?>
					<div class="stage">
						<div class="name">
							<?=$arItem["PROPERTIES"]["STAGES_".LANGUAGE_ID]["DESCRIPTION"][$i]?>
						</div>
						<div class="info">
							<?=$stage['TEXT']?>
						</div>
					</div>
                    <? endforeach ?>
				</div>
				<!-- /.modal-bottom -->
				<div class="modal-btn">
					<a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main">
						<span>							
		                    <?=GetMessage('APPLY_BTN')?>
						</span>
					</a>
				</div>
				<!-- /.modal-btn -->
			</div>
			<!-- /.modal-container -->
		</div>
		<!-- /.modal -->
    </div>
    <!-- /.bx -->
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