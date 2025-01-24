<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ALABUGA START WORLD - Relocation program to Russia for work experience");
$APPLICATION->SetPageProperty("title", "ALABUGA START WORLD - Relocation program to Russia for work experience");
$APPLICATION->SetPageProperty("tags", "ALABUGA START WORLD");
$APPLICATION->SetPageProperty("keywords", "ALABUGA START WORLD", "АЛАБУГА СТАРТ ВОРЛД", "АЛАБУГА СТАРТ ВОРД");
$APPLICATION->SetPageProperty("description", "Alabuga start world is a unique opportunity for young and talented people from all over the world to build a career and change their lives for the better"); 
?><div class="main-zone" id="company">
	<div class="page__wrap">
		<h2> <i>The most successful in Russia</i> special economic zone «Alabuga» attracts investors with a number of doubtless advantages. </h2>
		<div class="text">
			<p>
				 Companies in «Alabuga» are exempted from paying property, land and transport taxes, income tax is only 2%. Under the current free customs zone regime, imported equipment used on the territory of «Alabuga» is exempted from customs duties and VAT.
			</p>
		</div>
        <? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"news_slider",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_SHADOW" => "Y",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPONENT_TEMPLATE" => "news_slider",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PANEL" => "N",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(0=>"DETAIL_TEXT",1=>"DETAIL_PICTURE",),
				"USE_FILTER" => "Y",
				"FILTER_NAME" => "arrFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "news",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(0=>"GALLERY",1=>"VIDEO",2=>"",3=>"",4=>"",),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "ID",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N"
			)
		);
		?>
		<div class="main-zone_block">
			<h3>
			«ALABUGA» SEZ KEY INDICATORS </h3>
			<div class="main-zone_gr">
				<div class="d-flex flex-wrap">
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_TTL_AMT");?>
							</div>
							<div class="txt">
								 Total amount of residents
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_FNC_MNF");?>
							</div>
							<div class="txt">
								 Functioning manufacture enterprises
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_ACT_INVEST");?><i>bln</i>
							</div>
							<div class="txt">
								 Actually invested by residents
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_RES_REV");?><i>bln</i>
							</div>
							<div class="txt">
								 Residents’ revenue as of January 10, 2024
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_EMPL");?>
							</div>
							<div class="txt">
								 Employees
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-zone_gr -->
			<div class="main-zone_bottom">
 				<a title="More information" href="<?=MORE_INFO_LINK?>" target="_blank"> More information </a> about «Alabuga» SEZ
			</div>
			 <!-- /.main-zone_bottom -->
		</div>
		 <!-- /.main-zone_block -->
	</div>
</div>
<div class="main-video" id="video">
	<div class="page__wrap">
		 <?
			$GLOBALS['arrFilter'] = array("=PROPERTY_LANG_VALUE"=> "en");	
				$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"video_slider",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_SHADOW" => "Y",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"COMPONENT_TEMPLATE" => "video_slider",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PANEL" => "N",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"USE_FILTER" => "Y",
					"FILTER_NAME" => "arrFilter",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "6",
					"IBLOCK_TYPE" => "news",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => "",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"",1=>"VIDEO",2=>"",3=>"",4=>"",),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "ID",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "DESC",
					"STRICT_SECTION_CHECK" => "N"
				)
			);?>
	</div>
</div>
 <!-- /.main-video --> <!-- /.main-zone -->
<div class="main-plan">
	<div class="main-plan_item">
		<div class="image js-ban">
 <img src="/local/templates/alabuga/img/ban2.jpg" alt="PARTICIPANTS FROM 44 COUNTRIES" class="mw-100 d-block">
		</div>
		<div class="main-plan_block">
			<div class="page__wrap">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<h2>
						PARTICIPANTS FROM 44 COUNTRIES SUCH AS MOZAMBIQUE, COLOMBIA, MALI, LESOTHO, ZIMBABWE, BENIN, RWANDA, TANZANIA, TUNISIA, SOUTH SUDAN, DR CONGO, SRI LANKA ETC. WERE EMPLOYED IN 2024 UNDER THE ALABUGA START PROGRAMME. </h2>
					</div>
					<div class="bx">
						<div class="main-plan_cart">
							<div class="ttl">
								 2024 recruitment plan:
							</div>
							<div class="list">
								<ul>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> specialties </li>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> countries </li>
								</ul>
							</div>
 <a title="Join" href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--main" data-join> Join </a>
						</div>
						 <!-- /.main-plan_cart -->
					</div>
				</div>
			</div>
		</div>
		 <!-- /.main-plan_block -->
	</div>
	 <!-- /.main-plan_item -->
	<div class="main-plan_bottom">
		<div class="main-plan_cart">
			<div class="ttl">
				 2024 recruitment plan:
			</div>
			<div class="list">
				<ul>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> specialties </li>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> countries </li>
				</ul>
			</div>
 <a title="Join" href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--main" data-join> Join </a>
		</div>
		 <!-- /.main-plan_cart -->
	</div>
	 <!-- /.main-plan_bottom -->
</div>
 <!-- /.main-plan -->
<div class="main-feedback" id="feedback">
	<div class="page__wrap">
		<div class="main-feedback_top">
			<h2> <i>Feedback</i> from our participants </h2>
		</div>
		 <!-- /.main-feedback_top --> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"feedback_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "feedback_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"NAME_en",1=>"COUNTRY_en",2=>"REVIEW_en",3=>"",4=>"",5=>"",6=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
</div>
 <!-- /.main-feedback -->
<div class="main-start">
	<div class="page__wrap">
		<h1>
		Alabuga start world is a unique opportunity for young and talented people from all over the world to <i>build a career</i> and <i>change their lives</i> for the better. </h1>
		<div class="main-start_block">
			<div class="main-start_bx">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<div class="ttl">
							 This year we offer employment in the following fields:
						</div>
						<div class="list">
                        	<?$APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "offered_list",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_SHADOW" => "Y",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "N",
                                    "DISPLAY_PANEL" => "N",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array(0=>"",1=>"",),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "4",
                                    "IBLOCK_TYPE" => "news",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "20",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => "",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array(0=>"ALLOWANCE",1=>"",),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "NAME",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N"
                                )
                            );?>
						</div>
 						<a title="apply" href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr" data-join> apply </a>
					</div>
					<div class="bx">
						<div class="image">
 							<img src="/local/templates/alabuga/img/spec.png" style="max-height: 460px" alt="This year we offer employment" class="mw-100 d-block">
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-start_bx -->
		</div>
		 <!-- /.main-start_block -->        
        
		<div class="main-start_desc">
			 Become a world-standing <i>professional</i>!
		</div>
		 <!-- /.main-start_desc -->
	</div>
</div>
 <!-- /.main-start -->
<div class="main-program" id="benefits">
	<div class="page__wrap">
		<div class="d-flex flex-wrap">
			<div class="bx">
				<div class="image js-ban">
 <img src="/local/templates/alabuga/img/img.jpg" alt="Program benefits" class="mw-100 d-block">
				</div>
			</div>
			<div class="bx">
				<div class="main-program_cart">
					<h2>
					Program benefits </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/graduation-cap_icon.svg" alt="Professional training" class="mw-100 d-block">
							</div>
							 Professional training </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_icon.svg" alt="Russian language lessons" class="mw-100 d-block">
							</div>
								<a title="Russian language lessons" href="https://lyl.su/UnoG" target="_blank">Russian language lessons</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/house-key_icon.svg" alt="Preferential accommodation in comfortable" class="mw-100 d-block">
							</div>
							 Preferential accommodation in comfortable <a title="hostels" href="#housing" class="gtSteps" target="_blank">hostels</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/wallet_icon.svg" alt="initial monthly allowance" class="mw-100 d-block">
							</div>
                            <? $rub = \COption::GetOptionString( "askaron.settings", "UF_MTH_ALW"); $cur = new CurrencyLoad(); ?>
							 <?=str_replace(' ', '&nbsp;', $rub);?> rub ($<?=$cur->exchange($rub, 'USD');?>) initial monthly allowance </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_icon.svg" alt="Paid flight to Russia" class="mw-100 d-block">
							</div>
							 Paid flight to Russia </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/treatment_icon.svg" alt="Voluntary health insurance" class="mw-100 d-block">
							</div>
							 Voluntary health insurance </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/transfer_icon.svg" alt="Transfer" class="mw-100 d-block">
							</div>
							 Transfer </li>
						</ul>
					</div>
 <a title="apply" href="<?=CV_FORM?>" target="_blank" class="page__btn page__btn--main" data-join> apply </a>
				</div>
				 <!-- /.main-program_cart -->
			</div>
		</div>
	</div>
</div>
 <!-- /.main-program -->
<div id="fields">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"offered_fields",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"ALLOWANCE",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
<div class="main-adm" id="admission">
	<div class="main-adm_block">
		<div class="page__wrap">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="bx">
					<h2>
					Admission requirements </h2>
					<div class="list">
						<ul>
							<li>
							Age: <i>18-22 years old females</i> </li>
							<li>
							Citizenship: <i>countries from our <a title="countries" href="<?=SITE_TEMPLATE_PATH?>/include/countries.php" data-fancybox data-type="iframe">list</a></i> </li>
							<li>
							Education: <i>at least 9 classes (secondary school according to the russian educational system)</i> </li>
							<li>
							Valid international passport <i>If there is no PASSPORT yet you can apply for it during application period so it is ready by the time you enter the ALABUGA START PROGRAM </i> </li>
							<li>
							No serious chronic diseases </li>
						</ul>
					</div>
					<div class="desc">
						 Program participants pass a complete medical examination on arrival. The participant will not be allowed to work if a chronic disease is detected.
					</div>
					<div class="main-adm_btn">
 <a title="APPLY" href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr" data-join> APPLY </a>
					</div>
					 <!-- /.main-adm_btn -->
				</div>
				<div class="bx">
					<div class="image">
 <img src="/local/templates/alabuga/img/img2.png" alt="Admission requirements" class="mw-100 d-block">
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- /.main-adm_block -->
</div>
 <!-- /.main-adm -->


<div class="main-program black" id="housing">
  <div class="page__wrap">
    <div class="d-flex flex-wrap">
      <div class="bx">
        <div class="image">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "housing_slider",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_SHADOW" => "Y",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "housing_slider",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PANEL" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>""),
                    "USE_FILTER" => "Y",
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "9",
                    "IBLOCK_TYPE" => "content",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0=>"PHOTO",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "DESC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
        </div>
      </div>
      <div class="bx">
        <div class="main-program_cart">
          <h2>WE PROVIDE <i>PREFERENTIAL RATES</i> FOR COMFORTABLE ACCOMMODATION</h2>
          <div class="subinfo">Housing is provided for all Alabuga employees, where there is everything necessary for a comfortable life </div>
          <div class="block">
            <div class="ttl"> EACH APARTMENT HAS: </div>
            <ul>
              <li> Fridge </li>
              <li> Electric cooktop</li>
              <li> Washing machine </li>
              <li> Boiler in the shower </li>
              <li> Bed linen</li>
              <li> A pillow and a warm blanket </li>
            </ul>
            <div style="padding-top: 2rem;">*housing is provided near your workplace</div>
          </div>
        </div>
        <!-- /.main-program_cart --> 
      </div>
    </div>
  </div>
</div>
<!-- /.main-program -->
 
<div class="main-step">
	<div class="page__wrap">
		<div class="d-flex flex-wrap">
			<div class="bx">
				<div class="image">
                	<div class="adm_steps_slider">
	 					<img src="/upload/adm_steps_slider_01.jpg" alt="Admission steps 1" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_02.jpg" alt="Admission steps 2" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_03.jpg" alt="Admission steps 3" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_04.jpg" alt="Admission steps 4" class="mw-100 d-block">
                    </div>
				</div>
			</div>
			<div class="bx" id="admSteps">
				<div class="main-step_cart">
					<h2>Admission steps </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/telegram.svg" alt="telegram" class="mw-100 d-block">
							</div>
                            <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>                                    
							 <!-- /.icon --> 1. Text us your name and country on Telegram and get your responsible HR <a title="telegram" href="https://t.me/<?=str_replace('@','',$telegram)?>" class="tgLnk" target="_blank"><?=$telegram?></a>
                            </li>
                            <li>
                             <span>
                             	<a title="play.google.com" href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank"><img src="/upload/Google_Play_Store_badge_EN.svg" alt="Google Play Store" /></a>
                             	<a title="apps.apple.com" href="https://apps.apple.com/us/app/telegram-messenger/id686449807" target="_blank"><img src="/upload/Download_on_the_App_Store_Badge.svg" alt="App Store" /></a>
                             </span> 
                            </li>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/id-card_icon.svg" alt="card" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 2. Send your cv using this <a title="form" href="<?=CV_FORM?>" target="_blank">form</a> </li>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/bubble-chat_small_icon.svg" alt="bubble" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 3. Learn at least <a title="100 words in russian" href="<?=WORDS_FILE?>" target="_blank">100 words</a> in russian </li>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/laptop_icon.svg" alt="laptop" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 4. Complete the Alabuga Start Simulation</li>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/union_icon.svg" alt="union" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 5. Pass an online interview </li>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="exam-results" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 6. Sign an offer </li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
				<div class="main-step_cart">
					<h2>
					Admission deadlines for <i>2025</i> </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/free-icon-new-email.svg" alt="new email" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> Application: <i>Ongoing</i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_small_icon.svg" alt="plane" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> Arrival to russia: <i>Up to 2 months after passing <a title="all stages" href="#admSteps" class="gtSteps">all stages</a></i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="exam results" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> Signing the employment contract: <i>Within 1 month after arrival to Russia</i> </li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
			</div>
		</div>
	</div>
</div>
 <!-- /.main-step -->
<div class="main-contact" id="contacts">
	<div class="page__wrap">
		<h2>Contact information</h2>
		<div class="main-contact_block">
			<div class="d-flex flex-wrap">
				<div class="bx">
					<div class="main-contact_curr">                    
						<div class="d-flex flex-wrap">
                        	<? /* <div class="head">
                                <div class="ttl">
                                	<div>
                                        <div class="icon">
                                            <img src="/local/templates/alabuga/img/icon/woman_icon.svg" alt="" class="mw-100 d-block">
                                        </div>                                    
                                    </div>
                                    <div>Contacts</div>
                                </div>
                                <a title="" href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> apply </a>
                            </div> */ ?>
                            <div class="contactsList">
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/email.svg" alt="email" class="mw-100 d-block"></div>
                                    <? $email = \COption::GetOptionString( "askaron.settings", "UF_MAIN_EMAIL");?>
                                    <a title="email" href="mailto:<?=$email;?>"><?=$email;?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/whatsapp.svg" alt="whatsapp" class="mw-100 d-block"></div>
                                    <? $wapp = \COption::GetOptionString( "askaron.settings", "UF_MAIN_PHONE");?>
                                    <a title="wapp" href="https://wa.me/<?=str_replace(array(' ','+','(',')','-'),'',$wapp)?>" target="_blank"><?=$wapp?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/telegram.svg" alt="telegram" class="mw-100 d-block"></div>
                                    <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>
                                    <a title="telegram" href="https://t.me/<?=str_replace('@','',$telegram)?>" target="_blank"><?=$telegram?></a>
                                </div>
                        	</div>
                        </div>
					</div>
					 <!-- /.main-contact_curr -->
				</div>
				<div class="bx">
					<div class="main-contact_flex">
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/telegram.svg" alt="telegram" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 JOIN OUR
									</div>
									<a title="CHANNEL" href="https://t.me/AlabugaStart" target="_blank" class="link">CHANNEL</a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<!--<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/instagram.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Instagram
									</div>
									<a title="" href="https://instagram.com/alabuga_start_world?igshid=MWZjMTM2ODFkZg==" target="_blank" class="link">CHANNEL</a>
								</div>
							</div>
						</div>-->
							 <!-- /.main-contact_cart -->
						<!--<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/facebook.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Facebook
									</div>
									<a title="" href="https://www.facebook.com/groups/3827107004187260/?ref=share&mibextid=NSMWBT" target="_blank" class="link">CHANNEL</a>
								</div>
							</div>
						</div>-->
							 <!-- /.main-contact_cart -->
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/X_logo.svg" style="max-width:44px !important;" alt="logo" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 X
									</div>
									<a title="CHANNEL" href="https://x.com/sezalabuga?s=21" target="_blank" class="link">CHANNEL</a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<!--<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/cube-3d_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 3D tour:
									</div>
 <a title="" href="https://my.matterport.com/show/?m=dtWRJue8MA2&help=1&gt=1" target="_blank" class="link">
									follow the link </a>
								</div>
							</div>
						</div>-->
							 <!-- /.main-contact_cart -->
						<div class="item">
							<div class="main-contact_cart main-contact_qr">
								<div class="icon">
 		<img src="/local/templates/alabuga/img/qr-code-1.gif" alt="qr-code" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Register on hr-platform:
									</div>
 <a title="hr.alabuga.ru" href="https://hr.alabuga.ru" class="link" target="_blank">
									https://hr.alabuga.ru </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_qr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/qr-code-2.gif" alt="qr-code" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Check our telegram-bot for faq:
									</div>
 	<a title="alabuga_start_bot" href="https://t.me/Alabuga_Start_bot" class="link" target="_blank">
									@alabuga_start_bot </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/folder.svg" alt="folder" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
									</div>
 									<a title="FILES" href="javascript:;" data-fancybox data-src="#files_block" target="_blank" class="link"> FILES </a>
                                    <div id="files_block" style="display: none; max-width: 800px; max-height: 100%;">
                                    	<ul class="files">
                                    		<li><a title="Алабуга Старт 2024 RU" href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_RUS"));?>" target="_blank">Алабуга Старт 2024 RU</a><br /></li>
                                            <li><a title="Alabuga Start 2024 EN" href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_ENG"));?>" target="_blank">Alabuga Start 2024 EN</a><br /></li>
                                            <li><a title="ALABUGA START WELCOME BOOK EN" href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_WB"));?>" target="_blank">ALABUGA START WELCOME BOOK EN</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
                        
						<? /* 
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/bubble-chat.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 100 RUSSIAN
									</div>
 									<a title="" href="<?=WORDS_FILE?>" target="_blank" class="link"> WORDS </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/contract_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 APPLICATION
									</div>
 <a title="" href="<?=CV_FORM?>" target="_blank" class="link"> FORM </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/youtube_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 WATCH US:
									</div>
 <video controls="" id="corpVideo" style="display:none;" muted=""> <source src="<span id=" title="PHP code: &lt;?=CORP_VIDEO?&gt;" class="bxhtmled-surrogate"><?=CORP_VIDEO?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">PHP code</span></span>" type="video/mp4"&gt; </video> <a title="" href="#corpVideo" data-fancybox="" class="link" target="_blank">
									Alabuga Corporate Film </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						
						*/ ?>
					</div>
					 <!-- /.main-contact_flex --> 
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.main-contact -->
<div id="faq">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"faq",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"ALLOWANCE",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>