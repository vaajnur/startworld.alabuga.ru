<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ألابوغا ستارت - للأشخاص من جميع أنحاء العالم");
?><div class="main-zone count-rtl" id="company">
	<div class="page__wrap">
		<h2 class="rtl"> <i>الأكثر نجاحًا في روسيا والأفضل</i> في المنطقة الاقتصادية الخاصة في أوروبا ألابوجا "تجتذب المستثمرين بعدد من المزايا التي لا تشوبها شائبة </h2>
		<div class="text rtl">
			<p>
				 تُعفى الشركات في «ألابوغا» من دفع ضرائب الممتلكات والأراضي والنقل ، وضريبة الدخل 2٪ فقط. فبموجب نظام المنطقة الجمركية الحرة الحالي ، تُعفى المعدات المستوردة المستخدمة على أراضي «ألابوغا» من
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
				"PROPERTY_CODE" => array(0=>"",1=>"VIDEO",2=>"",3=>"",4=>"",),
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
		);?>
		<div class="main-zone_block">
			<h3 class="rtl">
			المؤشرات الرئيسية للمنطقة الاقتصادية الخاصة بالأبوجا </h3>
			<div class="main-zone_gr">
				<div class="d-flex flex-wrap">
					<div class="bx">
						<div class="cart-group rtl">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_TTL_AMT");?>
							</div>
							<div class="txt">
								 إجمالي عدد الشركات شركة
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group rtl">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_FNC_MNF");?>
							</div>
							<div class="txt">
								 شركة تصنيع عامل
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group rtl">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_ACT_INVEST");?><i>مليار </i>
							</div>
							<div class="txt">
								 مليار دولار استثمرها المقيمون بالفعل
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group rtl">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_RES_REV");?><i>مليار </i>
							</div>
							<div class="txt">
								 مليار دولار دخل المقيمين اعتبارًا من 10 يناير2023
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group rtl">
							<div class="numb">
								 <?=str_replace(' ', '&nbsp;', \COption::GetOptionString("askaron.settings", "UF_EMPL"));?>
							</div>
							<div class="txt">
								 موظفًا
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-zone_gr -->
			<div class="main-zone_bottom">
				 عن المنطقة الاقتصادية الخاصة<a href="<?=MORE_INFO_LINK?>" target="_blank">مزيد من المعلومات</a> «ألابوجا»
			</div>
			 <!-- /.main-zone_bottom -->
		</div>
		 <!-- /.main-zone_block -->
	</div>
</div>
 <!-- /.main-zone -->
<div class="main-video" id="video">
	<div class="page__wrap">
		 <?$APPLICATION->IncludeComponent(
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
		"FILTER_NAME" => "",
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
 <!-- /.main-video -->
<div class="main-plan">
	<div class="main-plan_item">
		<div class="image js-ban">
 <img src="/local/templates/alabuga_ar/img/ban2.jpg" alt="" class="mw-100 d-block">
		</div>
		<div class="main-plan_block rtl">
			<div class="page__wrap">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<h2>
						المشاركون من 44 دولة مثل موزامبيق وكولومبيا ومالي وزمبابوي وبنين ورواندا وتنزانيا وتونس وجنوب السودان وجمهورية الكونغو الديموقراطية وسريلانكا وغيرهم.
						تم تعيينهم في عام 2024 حسب برنامج "ألابوغا ستارت"</h2>
					</div>
					<div class="bx">
						<div class="main-plan_cart">
							<div class="ttl">
								 خطة التوظيف 2024:
							</div>
							<div class="list">
								<ul>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> تخصصات </li>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> دولة </li>
								</ul>
							</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> انضم </a>
						</div>
						 <!-- /.main-plan_cart -->
					</div>
				</div>
			</div>
		</div>
		 <!-- /.main-plan_block -->
	</div>
	 <!-- /.main-plan_item -->
	<div class="main-plan_bottom rtl">
		<div class="main-plan_cart">
			<div class="ttl">
				 خطة التوظيف 2024:
			</div>
			<div class="list">
				<ul>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> تخصصات </li>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> دولة </li>
				</ul>
			</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> انضم </a>
		</div>
		 <!-- /.main-plan_cart -->
	</div>
	 <!-- /.main-plan_bottom -->
</div>
 <!-- /.main-plan -->
<div class="main-feedback" id="feedback">
	<div class="page__wrap">
		<div class="main-feedback_top rtl">
			<h2> <i>ردود الفعل</i> من المشاركين لدينا </h2>
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
		"PROPERTY_CODE" => array(0=>"NAME_ar",1=>"COUNTRY_ar",2=>"REVIEW_ar",3=>"",4=>"",5=>"",6=>"",),
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
		<h2 class="rtl">
		برنامج ألابوجا البداية هو فرصة فريدة للشباب والموهوبين من جميع أنحاء العالم لبناء مهنة وتغيير حياتهم للأفضل </h2>
		<div class="main-start_block">
			<div class="main-start_bx">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx rtl">
						<div class="ttl">
							 نقدم في هذا العام فرص عمل في المجالات التالية:
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
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr"> التقدم </a>
					</div>
					<div class="bx">
						<div class="image">
 <img src="/local/templates/alabuga_ar/img/spec.png" alt="" style="max-height: 460px;" class="mw-100 d-block">
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-start_bx -->
		</div>
		 <!-- /.main-start_block -->
		<div class="main-start_desc rtl">
			تصبح المهنية على مستوى عالمي!
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
 <img src="/local/templates/alabuga_ar/img/img.jpg" alt="" class="mw-100 d-block">
				</div>
			</div>
			<div class="bx rtl">
				<div class="main-program_cart">
					<h2>
					مزايا البرنامج </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/graduation-cap_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 تدريب احترافي </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/bubble-chat_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 دروس اللغة الروسية </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/house-key_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 مريحة <a href="<?=HOSTELS_LINK?>" target="_blank">بيوت</a> الإقامة المثالية في </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/wallet_icon.svg" alt="" class="mw-100 d-block">
							</div>
                            <? $rub = \COption::GetOptionString( "askaron.settings", "UF_MTH_ALW"); $cur = new CurrencyLoad(); ?>
							 <?=str_replace(' ', '&nbsp;', $rub);?> روبل (<?=$cur->exchange($rub, 'USD');?>$) راتب شهري </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/plane_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 رحلة مدفوعة إلى روسيا </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/treatment_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 التأمين الصحي الطوعي </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/transfer_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 النقل </li>
						</ul>
					</div>
 <a href="<?=CV_FORM?>" target="_blank" class="page__btn page__btn--main"> التقدم </a>
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
				<div class="bx rtl">
					<h2>
					متطلبات القبول </h2>
					<div class="list">
						<ul>
							<li>
							العمر: <i>سنة فتيات 18- 22</i> </li>
							<li>
							الجنسية: <i><a href="/local/templates/alabuga/include/countries.php" data-fancybox data-type="iframe">قائمتنا</a> دول من</i> </li>
							<li>
							التعليم: <i> فصول على الأقل (مدرسة ثانوية حسب نظام التعليم الروسي) 9</i> </li>
							<li>
							جواز السفر الدولي </li>
							<li>
							لا توجد أمراض مزمنة خطيرة </li>
						</ul>
					</div>
					<div class="desc">
						 يجتاز المشاركون في البرنامج فحصًا طبيًا كاملًا عند الوصول. لن يُسمح للمشارك بالعمل إذا تم اكتشاف مرض مزمن.
					</div>
					<div class="main-adm_btn">
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr"> التقدم </a>
					</div>
					 <!-- /.main-adm_btn -->
				</div>
				<div class="bx">
					<div class="image">
 <img src="/local/templates/alabuga_ar/img/img2.png" alt="" class="mw-100 d-block">
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!-- /.main-adm_block -->
</div>
 <!-- /.main-adm -->
<div class="main-step">
	<div class="page__wrap">
		<div class="d-flex flex-wrap">
			<div class="bx">
				<div class="image">
                	<div class="adm_steps_slider">
	 					<img src="/upload/adm_steps_slider_01.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_02.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_03.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_04.jpg" alt="" class="mw-100 d-block">
                    </div>
				</div>
			</div>
			<div class="bx" id="admSteps">
				<div class="main-step_cart rtl">
					<h2>
					خطوات القبول </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/telegram.svg" alt="" class="mw-100 d-block">
							</div>
                            <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>                                    
							 <!-- /.icon --> 1. أرسل لنا اسمك وبلدك في Telegram وسيتم تعيين موظف مسؤول للموارد البشرية لك <a href="https://t.me/<?=str_replace('@','',$telegram)?>" class="tgLnk" target="_blank" class="ltr"><?=$telegram?></a>
                            </li>
                            <li>
                             <span>
                             	<a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank"><img src="/upload/Google_Play_Store_badge_EN.svg" alt="" /></a>
                             	<a href="https://apps.apple.com/us/app/telegram-messenger/id686449807" target="_blank"><img src="/upload/Download_on_the_App_Store_Badge.svg" alt="" /></a>
                             </span> 
                            </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/id-card_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 2.<a href="<?=CV_FORM?>" data-join target="_blank">النموذج</a> أرسل سيرتك الذاتية باستخدام هذا </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/bubble-chat_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 3. تعلم ما لا يقل عن <a href="<?=WORDS_FILE?>" target="_blank">100 كلمة في</a> اللغة الروسية </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/laptop_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 4. أكمل محاكاة بيزنيس </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/union_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 5. اجتياز مقابلة عبر الإنترنت </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 6. وقِّع على العرض </li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
				<div class="main-step_cart rtl">
					<h2>
					المواعيد النهائية للقبول <span>لعام 2024</span> </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/free-icon-new-email.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> التطبيق: <i> الجاري</i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/plane_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> الوصول إلى روسيا: <i>لمدة تصل إلى شهرين بعد اجتياز <a href="#admSteps" class="gtSteps">جميع المراحل</a></i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> توقيع عقد العمل: <i>في غضون شهر واحد بعد الوصول إلى روسيا</i> </li>
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
		<h2 class="rtl">
		الاتصال معلومات </h2>
		<div class="main-contact_block">
			<div class="d-flex flex-wrap">
				<div class="bx">
					<div class="main-contact_curr">                    
						<div class="d-flex flex-wrap">
                        	<? /*<div class="head">
                                <div class="ttl">
                                	<div>
                                        <div class="icon">
                                            <img src="/local/templates/alabuga/img/icon/woman_icon.svg" alt="" class="mw-100 d-block">
                                        </div>                                    
                                    </div>
                                    <div>الشركة</div>
                                </div>
                                <a href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> التقدم </a>
                            </div>*/?>
                            <div class="contactsList">
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/email.svg" alt="" class="mw-100 d-block"></div>
                                    <? $email = \COption::GetOptionString( "askaron.settings", "UF_MAIN_EMAIL");?>
                                    <a href="mailto:<?=$email;?>"><?=$email;?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/whatsapp.svg" alt="" class="mw-100 d-block"></div>
                                    <? $wapp = \COption::GetOptionString( "askaron.settings", "UF_MAIN_PHONE");?>
                                    <a href="https://wa.me/<?=str_replace(array(' ','+','(',')','-'),'',$wapp)?>" target="_blank" class="ltr"><?=str_replace(' ', '&nbsp;', $wapp)?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/telegram.svg" alt="" class="mw-100 d-block"></div>
                                    <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>
									<div><a href="https://t.me/<?=str_replace('@','',$telegram)?>" target="_blank" class="ltr"><?=$telegram?></a>
									<div class="tg-link"> <?=\COption::GetOptionString( "askaron.settings", "UF_TELEGRAM_PHONE");?> </div>                                </div>
                        	</div></div>
                        </div>
					</div>
					 <!-- /.main-contact_curr -->
				</div>
				<div class="bx">
					<div class="main-contact_flex">
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/telegram.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 انضم إلى
									</div>
 <a href="https://t.me/AlabugaStart" target="_blank" class="link">
									قناتنا </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/instagram.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Instagram
									</div>
									<a href="https://instagram.com/alabuga_start_world?igshid=MWZjMTM2ODFkZg==" target="_blank" class="link">قناتنا</a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/facebook.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 Facebook
									</div>
									<a href="https://www.facebook.com/groups/3827107004187260/?ref=share&mibextid=NSMWBT" target="_blank" class="link">قناتنا</a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/X_logo.svg" style="max-width:44px !important;" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 X
									</div>
									<a href="https://x.com/Alabuga_Start?t=ubsRLF2aDrKbgBXqssH-tw&s=35" target="_blank" class="link">قناتنا</a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/cube-3d_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 : اتبع الرابط
									</div>
 <a href="https://my.matterport.com/show/?m=dtWRJue8MA2&help=1&gt=1" target="_blank" class="link">
									جولة ثلاثية الأبعاد </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_qr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/qr1.png" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 :سجل على موقع التوظيف
									</div>
 <a href="https://hr.alabuga.ru" target="_blank" class="link">
									https://hr.alabuga.ru </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_qr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/1r2.png" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 تحقق من TELEGRAM-BOT للحصول على الأسئلة الشائعة:
									</div>
 <a href="https://t.me/Alabuga_Start_bot" target="_blank" class="link">
									@alabuga_start_bot </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/folder.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
									</div>
 									<a href="javascript:;" data-fancybox data-src="#files_block" target="_blank" class="link"> ملفات </a>
                                    <div id="files_block" style="display: none; max-width: 800px; max-height: 100%;">
                                    	<ul class="files">
                                    		<li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_RUS"));?>" target="_blank">Алабуга Старт 2024 RU</a><br /></li>
                                            <li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_ENG"));?>" target="_blank">Alabuga Start 2024 EN</a><br /></li>
                                            <li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_WB"));?>" target="_blank">ALABUGA START WELCOME BOOK EN</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
                    	<? /* 
						<div class="item">
							<div class="main-contact_cart main-contact_gr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/bubble-chat.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
 <a href="<?=WORDS_FILE?>" target="_blank" class="link"> 100 كلمة </a>
									<div class="name">
										 روسية
									</div>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/contract_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
 <a href="<?=CV_FORM?>" target="_blank" class="link"> استمارة </a>
									<div class="name">
										 التقديم
									</div>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr rtl">
								<div class="icon">
 <img src="/local/templates/alabuga_ar/img/icon/youtube_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 :شاهدنا
									</div>
 <video controls="" id="corpVideo" style="display:none;" muted=""> <source src="<span id=" title="PHP code: &lt;?=CORP_VIDEO?&gt;" class="bxhtmled-surrogate"><?=CORP_VIDEO?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">PHP code</span></span>" type="video/mp4"&gt; </video> <a href="#corpVideo" data-fancybox="" class="link" target="_blank">
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
<!-- /.main-contact --><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>