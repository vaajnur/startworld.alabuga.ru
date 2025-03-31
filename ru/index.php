<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("АЛАБУГА СТАРТ - Программа трудоустройства молодых специалистов в России");
?><div class="main-zone" id="company">
	<div class="page__wrap">
		<h2 class="text-align-center"> <i>Самая успешная в России</i> и лучшая в Европе особая экономическая зона «Алабуга» привлекает инвесторов рядом несомненных преимуществ. </h2>
		<div class="text" style="min-width: 100%;">
			<p style="text-align: justify;">
				 Резиденты ОЭЗ «АЛАБУГА» освобождены от уплаты имущественного, земельного и транспортного налогов, налог на прибыль составляет всего 2%. В рамках действующего режима свободной таможенной зоны ввозимое оборудование, используемое на территории ОЭЗ «АЛАБУГА», освобождается от уплаты таможенных пошлин и НДС.
			</p>
		</div>
        <? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_slider", 
	array(
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
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
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
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "VIDEO",
			2 => "",
		),
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
	),
	false
);?>
		<div class="main-zone_block">
			<h3>
			ОСНОВНЫЕ ПОКАЗАТЕЛИ ОЭЗ «АЛАБУГА» </h3>
			<div class="main-zone_gr">
				<div class="d-flex flex-wrap">
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_TTL_AMT");?>
							</div>
							<div class="txt">
								 Общее количество резидентов
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_FNC_MNF");?>
							</div>
							<div class="txt">
								 Действующих производственных предприятия
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb" style="line-height: 30px;">
 								<?=\COption::GetOptionString( "askaron.settings", "UF_INVESTMENTS");?><i><br> млрд руб.</i>
							</div>
							<div class="txt">
								 Фактически вложено резидентами
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb" style="line-height: 30px;">
 								<?=\COption::GetOptionString( "askaron.settings", "UF_REVENUE");?><i><br> млрд руб.</i>
							</div>
							<div class="txt">
								 Доход резидентов на 01.09.2024
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_EMPL");?>
							</div>
							<div class="txt">
								 Сотрудников
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-zone_gr -->
			<div class="main-zone_bottom">
 <a href="https://alabuga.ru/file.php?IBLOCK_ID=161&ID=41476<?//=MORE_INFO_LINK?>" target="_blank"> Подробнее об </a> ОЭЗ «Алабуга»
			</div>
			 <!-- /.main-zone_bottom -->
		</div>
		 <!-- /.main-zone_block -->
	</div>
</div>
<div class="main-video" id="video">
	<div class="page__wrap">
		 <?
$GLOBALS['arrFilter'] = array("=PROPERTY_LANG_VALUE"=> "ru");	
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
 <img src="/local/templates/alabuga/img/ban2.jpg" alt="" class="mw-100 d-block">
		</div>
		<div class="main-plan_block">
			<div class="page__wrap">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<h2>
						Участники из 44 стран, таких, как Мозамбик, Колумбия, Мали, Лесото, Зимбабве, Бенин, Руанда, Танзания, Тунис, Южный Судан, Др Конго, Шри-Ланка и т.д. приняты на работу в 2024 году по программе «Алабуга Старт». </h2>
					</div>
					<div class="bx">
						<!-- <div class="main-plan_cart">
							<div class="ttl">
								 План набора на 2024 ГОД:
							</div>
							<div class="list">
								<ul>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> специальностей </li>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> страны </li>
								</ul>
							</div>
 							<a href="<?=JOIN_LINK_RU?>" data-join target="_blank" class="page__btn page__btn--main"> ПОДАТЬ ЗАЯВКУ </a>
						</div> -->
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
				 План набора на 2025 ГОД:
			</div>
			<div class="list">
				<ul>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> специальностей </li>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> страны </li>
				</ul>
			</div>
 <a href="<?=JOIN_LINK_RU?>" data-join target="_blank" class="page__btn page__btn--main"> ПОДАТЬ ЗАЯВКУ </a>
		</div>
		 <!-- /.main-plan_cart -->
	</div>
	 <!-- /.main-plan_bottom -->
</div>
 <!-- /.main-plan -->
<div class="main-feedback" id="feedback">
	<div class="page__wrap">
		<div class="main-feedback_top">
			<h2> <i>ОТЗЫВЫ</i> УЧАСТНИЦ О ПРОГРАММЕ </h2>
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
		"PROPERTY_CODE" => array(0=>"NAME_ru",1=>"COUNTRY_ru",2=>"REVIEW_ru",3=>"",),
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
		<h2>
		АЛАБУГА СТАРТ— УНИКАЛЬНАЯ ВОЗМОЖНОСТЬ<br>
		 ДЛЯ МОЛОДЫХ И ТАЛАНТЛИВЫХ ДЕВУШЕК<br>
		 СО ВСЕГО МИРА <i>ПОСТРОИТЬ КАРЬЕРУ</i> <br>
		 И <i>ИЗМЕНИТЬ СВОЮ ЖИЗНЬ</i> К ЛУЧШЕМУ. </h2>
		<div class="main-start_block">
			<div class="main-start_bx">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<div class="ttl">
							 В ЭТОМ ГОДУ МЫ ПРЕДЛАГАЕМ РАБОТУ ПО СЛЕДУЮЩИМ НАПРАВЛЕНИЯМ:
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
 <a href="<?=JOIN_LINK_RU?>" data-join target="_blank" class="page__btn page__btn--curr"> ПОДАТЬ ЗАЯВКУ </a>
					</div>
					<div class="bx">
						<div class="image">
 <img src="/local/templates/alabuga/img/spec.png" style="max-height: 460px;" alt="" class="mw-100 d-block">
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-start_bx -->
		</div>
		 <!-- /.main-start_block -->
		<div class="main-start_desc">
			Станьте <i>профессионалом</i> мирового уровня!
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
					 <img src="/local/templates/alabuga/img/img.jpg" alt="" class="mw-100 d-block">
				</div>
			</div>
			<div class="bx">
				<div class="main-program_cart">
					<h2>
					ПРЕИМУЩЕСТВА ПРОГРАММЫ </h2>
					<div class="list">
						<ul>
							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/graduation-cap_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 ПРОФЕССИОНАЛЬНАЯ ПОДГОТОВКА 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/bubble-chat_icon.svg" alt="" class="mw-100 d-block">
								</div>
									<a href="https://lyl.su/UnoG" target="_blank">УРОКИ РУССКОГО ЯЗЫКА</a> 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/house-key_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 ЛЬГОТНОЕ ПРОЖИВАНИЕ В КОМФОРТАБЕЛЬНЫХ <a href="#housing" class="gtSteps" target="_blank">ХОСТЕЛАХ</a> 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/wallet_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 Денежное содержание от <?=str_replace(' ', '&nbsp;', \COption::GetOptionString( "askaron.settings", "UF_MTH_ALW"));?> РУБ. 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/plane_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 БЕСПЛАТНЫЙ ПЕРЕЛЕТ В РОССИЮ 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/treatment_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 МЕДИЦИНСКОЕ СТРАХОВАНИЕ 
							</li>

							<li>
								<div class="icon">
									 <img src="/local/templates/alabuga/img/icon/transfer_icon.svg" alt="" class="mw-100 d-block">
								</div>
								 ТРАНСФЕР 
							</li>

						</ul>
					</div>
					 <a href="<?=JOIN_LINK_RU?>" data-join target="_blank" class="page__btn page__btn--main"> ПОДАТЬ ЗАЯВКУ </a>
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
<div class="main-adm" id="admission">
	<div class="main-adm_block">
		<div class="page__wrap">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="bx">
					<h2>
					ТРЕБОВАНИЯ К КАНДИДАТАМ </h2>
					<div class="list">
						<ul>
							<li>
							ВОЗРАСТ: <i>ДЕВУШКИ 18-22 ЛЕТ</i> </li>
							<li>
							ГРАЖДАНСТВО: <i>СТРАНЫ ИЗ НАШЕГО <a href="<?=SITE_TEMPLATE_PATH?>/include/countries_ru.php" data-fancybox data-type="iframe"> СПИСКА</a></i> </li>
							<li>
							ОБРАЗОВАНИЕ: <i>Не менее 9 классов (аналог средней школы Российской системы образования)</i> </li>
							<li>
							ДЕЙСТВУЮЩИЙ ЗАГРАНПАСПОРТ <i>ПОДАЙТЕ ЗАЯВКУ НА ПРОГРАММУ, ПОКА ГОТОВЯТСЯ ВАШИ РАЗРЕШИТЕЛЬНЫЕ ДОКУМЕНТЫ. ВАЖНО, ЧТОБЫ ВСЕ ДОКУМЕНТЫ БЫЛИ ГОТОВЫ С ВАШЕЙ СТОРОНЫ К МОМЕНТУ НАЧАЛА ПРОГРАММЫ </i> </li>
							<li>
							НЕТ СЕРЬЕЗНЫХ ХРОНИЧЕСКИХ ЗАБОЛЕВАНИЙ </li>
						</ul>
					</div>
					<div class="desc">
						 УЧАСТНИКИ ПРОГРАММЫ ПО ПРИБЫТИИ ПРОХОДЯТ ПОЛНЫЙ МЕДИЦИНСКИЙ ОСМОТР. УЧАСТНИК НЕ ДОПУСКАЕТСЯ К РАБОТЕ ПРИ ВЫЯВЛЕНИИ ХРОНИЧЕСКОГО ЗАБОЛЕВАНИЯ.
					</div>
					<div class="main-adm_btn">
 <a href="<?=JOIN_LINK_RU?>" data-join target="_blank" class="page__btn page__btn--curr"> ПОДАТЬ ЗАЯВКУ </a>
					</div>
					 <!-- /.main-adm_btn -->
				</div>
				<div class="bx">
					<div class="image">
 <img src="/local/templates/alabuga/img/img2.png" alt="" class="mw-100 d-block">
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
			<h2> Мы <i>предоставляем жилье</i> на льготных условиях: </h2>
          <div class="subinfo"> 
В 2025 году будет построен жилой комплекс для участниц программы «Алабуга Старт». <br>
До завершения строительства жилого комплекса участницы будут проживать в общежитиях.
</div>
          <div class="block">
            <div class="ttl"> В общежитиях есть все для необходимое для проживания: </div>
            <ul>
              <li> Холодильник </li>
              <li> Душевая комната</li>
              <li> Постельное белье </li>
              <li> Стиральные машинки </li>
            </ul>
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
	 					<img src="/upload/adm_steps_slider_01.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_02.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_03.jpg" alt="" class="mw-100 d-block">
	 					<img src="/upload/adm_steps_slider_04.jpg" alt="" class="mw-100 d-block">
                    </div>
                </div>
			</div>
			<div class="bx" id="admSteps">
				<div class="main-step_cart">
					<h2>
					ЭТАПЫ ПРИЕМА </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/id-card_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 1. ОТПРАВЬТЕ ВАШЕ РЕЗЮМЕ, ЗАПОЛНИВ ЭТУ <a href="<?=JOIN_LINK_RU?>" data-join target="_blank">ФОРМУ</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 2. ЗНАНИЕ <a href="<?=WORDS_FILE?>" target="_blank">100 русских слов</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/laptop_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 3. ПРОЙДИТЕ СИМУЛЯЦИЮ ALABUGA START </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/union_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 4. ПРОЙДИТЕ ОНЛАЙН-ИНТЕРВЬЮ </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 5. ПРИМИТЕ ПРЕДЛОЖЕНИЕ ПО ТРУДОУСТРОЙСТВУ </li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
				<div class="main-step_cart">
					<h2>
					СРОКИ ПРИЕМА НА <i>2025</i> ГОД </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/free-icon-new-email.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> ЗАЯВКА: <i>Набор открыт</i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> ПРИБЫТИЕ В РОССИЮ: <i>До 2 месяцев после прохождения <a href="#admSteps" class="gtSteps">всех этапов</a></i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> ПОДПИСАНИЕ ТРУДОВОГО ДОГОВОРА: <i>В течение 1 месяца после прибытия в Россию</i> </li>
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
		<h2>
		КОНТАКТНАЯ ИНФОРМАЦИЯ </h2>
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
                                    <div>Контакты</div>
                                </div>
                                <a href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> ПОДАТЬ ЗАЯВКУ </a>
                            </div> */ ?>
                            <div class="contactsList">
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/email.svg" alt="" class="mw-100 d-block"></div>
                                    <? $email = \COption::GetOptionString( "askaron.settings", "UF_MAIN_EMAIL");?>
                                    <a href="mailto:<?=$email;?>"><?=$email;?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/whatsapp.svg" alt="" class="mw-100 d-block"></div>
                                    <? $wapp = \COption::GetOptionString( "askaron.settings", "UF_MAIN_PHONE");?>
                                    <a href="https://wa.me/<?=str_replace(array(' ','+','(',')','-'),'',$wapp)?>" target="_blank"><?=$wapp?></a>
                                </div>
                            	<div>
                                	<div class="icon sml"><img src="<?=SITE_TEMPLATE_PATH?>/img/icon/telegram.svg" alt="" class="mw-100 d-block"></div>
                                    <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>
                                    <div><a href="https://t.me/<?=str_replace('@','',$telegram)?>" target="_blank"><?=$telegram?></a>
									<div class="tg-link"> <?=\COption::GetOptionString( "askaron.settings", "UF_TELEGRAM_PHONE");?> </div>
                                </div></div>
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
 <img src="/local/templates/alabuga/img/icon/telegram.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 ПРИСОЕДИНЯЙТЕСЬ К
									</div>
 <a href="https://t.me/AlabugaStart" target="_blank" class="link">
									НАШЕМУ КАНАЛУ </a>
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
									<a href="https://instagram.com/alabuga_start_world?igshid=MWZjMTM2ODFkZg==" target="_blank" class="link">КАНАЛ</a>
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
									<a href="https://www.facebook.com/groups/3827107004187260/?ref=share&mibextid=NSMWBT" target="_blank" class="link">КАНАЛ</a>
								</div>
							</div>
						</div>-->
							 <!-- /.main-contact_cart -->
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 									<img src="/local/templates/alabuga/img/icon/X_logo.svg" style="max-width:44px !important;" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 X
									</div>
									<a href="https://x.com/Alabuga_Start?t=ubsRLF2aDrKbgBXqssH-tw&s=35" target="_blank" class="link">КАНАЛ</a>
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
										 3D ТУР:
									</div>
 <a href="https://my.matterport.com/show/?m=dtWRJue8MA2&help=1&gt=1" target="_blank" class="link">
									ПРОЙДИТЕ ПО ССЫЛКЕ </a>
								</div>
							</div>
						</div>-->
							 <!-- /.main-contact_cart -->
						<div class="item">
							<div class="main-contact_cart main-contact_qr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/qr-code-1.gif" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 ЗАРЕГИСТРИРОВАТЬСЯ НА HR-ПЛАТФОРМЕ:
									</div>
 <a href="https://hr.alabuga.ru" class="link" target="_blank">
									https://hr.alabuga.ru </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_qr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/qr-code-2.gif" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
										 НАШ ТЕЛЕГРАММ-БОТ:
									</div>
 <a href="https://t.me/Alabuga_Start_bot" class="link" target="_blank">
									@alabuga_start_bot </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						<div class="item">
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/folder.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
									</div>
 									<a href="javascript:;" data-fancybox data-src="#files_block" target="_blank" class="link"> ФАЙЛЫ </a>
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
							<div class="main-contact_cart main-contact_gr">
								<div class="icon">
 <img src="/local/templates/alabuga/img/icon/contract_icon.svg" alt="" class="mw-100 d-block">
								</div>
								<div class="group">
									<div class="name">
									</div>
 <a href="<?=JOIN_LINK_RU?>" target="_blank" class="link"> ЗАЯВКА НА УЧАСТИЕ </a>
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
										 СМОТРИТЕ НАС:
									</div>
 <video controls="" id="corpVideo" style="display:none;" muted=""> <?=CORP_VIDEO?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">PHP code</span></span>" type="video/mp4"&gt; </video> <a href="#corpVideo" data-fancybox="" class="link" target="_blank">
									ВИДЕО ОБ АЛАБУГЕ </a>
								</div>
							</div>
							 <!-- /.main-contact_cart -->
						</div>
						*/?>
					</div>
					 <!-- /.main-contact_flex -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.main-contact -->

<div id="faq">
<?
global $arFaqRu; $arFaqRu = array('!PROPERTY_NAME_ru' => false);
$APPLICATION->IncludeComponent(
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
		"FILTER_NAME" => "arFaqRu",
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


<? include $_SERVER['DOCUMENT_ROOT'] . "/ru/grant_program.php"; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>