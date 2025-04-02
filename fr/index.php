<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ALABUGA START - Programme de l’insertion professionnelle des jeunes spécialistes en Russie");
$APPLICATION->SetPageProperty("title", "ALABUGA START WORLD - Relocation program to Russia for work experience");
$APPLICATION->SetPageProperty("tags", "ALABUGA START WORLD");
$APPLICATION->SetPageProperty("keywords", "ALABUGA START WORLD", "АЛАБУГА СТАРТ ВОРЛД", "АЛАБУГА СТАРТ ВОРД");
$APPLICATION->SetPageProperty("description", "Alabuga start world is a unique opportunity for young and talented people from all over the world to build a career and change their lives for the better"); 

?><div class="main-zone" id="company">
	<div class="page__wrap">
		<h2> <i>LA PLUS RÉUSSIE EN RUSSIE</i> ET LA MEILLEURE EN EUROPE ZONE ÉCONOMIQUE SPÉCIALE «ALABUGA» ATTIRE LES INVESTISSEURS AVEC UN NOMBRE D'AVANTAGES SANS DOUTE.</h2>
		<div class="text">
			<p>
				 Les entreprises d'Alabuga sont exonérées du paiement des taxes sur le patrimoine, foncières et de transport, l'impôt sur le revenu n'est que de 2%. Dans le cadre du régime actuel de zone franche douanière, les équipements importés utilisés sur le territoire d'Alabuga sont exonérés de droits de douane et de TVA.
			</p>
		</div>
		 <?$APPLICATION->IncludeComponent(
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
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
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
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y"
	),
	false
);?>
		<div class="main-zone_block">
			<h3>
			INDICATEURS CLÉS DE LA ZES «ALABUGA» </h3>
			<div class="main-zone_gr">
				<div class="d-flex flex-wrap">
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_TTL_AMT");?>
							</div>
							<div class="txt">
								 nombre total de résidents
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_FNC_MNF");?>
							</div>
							<div class="txt">
								 entreprises de fabrication actives
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_ACT_INVEST");?>
							</div>
							<div class="txt">
								 milliards de dollars effectivement investis par les résidents
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_RES_REV");?>
							</div>
							<div class="txt">
								 milliard de dollars de revenus des résidents au 10&nbsp;janvier 2023
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_EMPL");?>
							</div>
							<div class="txt">
								 employés
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-zone_gr -->
			<div class="main-zone_bottom">
 <a href="<?=MORE_INFO_LINK?>" target="_blank"> Plus d'informations </a> de la ZES «Alabuga»
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
 <img src="/local/templates/alabuga/img/ban2.jpg" alt="" class="mw-100 d-block">
		</div>
		<div class="main-plan_block">
			<div class="page__wrap">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<h2>
						LES PARTICIPANTS DE 44 PAYS TELS QUE MOZAMBIQUE, COLOMBIE, MALI, LESOTHO, ZIMBABWE, BÉNIN, RWANDA, TANZANIE, TUNISIE, SOUDAN DU SUD, RÉPUBLIQUE DÉMOCRATIQUE DU CONGO, SRI LANKA ETC. ONT ÉTÉ RECRUTÉS EN 2024 D’APRÈS LE PROGRAMME ALABUGA START.</h2>
					</div>
					<div class="bx">
						<div class="main-plan_cart">
							<div class="ttl">
								 PLAN DE RECRUTEMENT 2025:
							</div>
							<div class="list">
								<ul>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> SPÉCIALITÉS </li>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> PAYS </li>
								</ul>
							</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> REJOINDRE </a>
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
				 PLAN DE RECRUTEMENT 2025:
			</div>
			<div class="list">
				<ul>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> SPÉCIALITÉS </li>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> PAYS </li>
				</ul>
			</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> REJOINDRE </a>
		</div>
		 <!-- /.main-plan_cart -->
	</div>
	 <!-- /.main-plan_bottom -->
</div>
 <!-- /.main-plan -->
<div class="main-feedback" id="feedback">
	<div class="page__wrap">
		<div class="main-feedback_top">
			<h2> <i>Commentaires </i> de nos participantes </h2>
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
		"PROPERTY_CODE" => array(0=>"NAME_fr",1=>"COUNTRY_fr",2=>"REVIEW_fr",3=>"",4=>"",5=>"",6=>"",),
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
		ALABUGA START EST UNE OPPORTUNITÉ UNIQUE POUR LES JEUNES PERSONNES TALENTUEUSES DU MONDE ENTIER DE <i>CONSTRUIRE UNE CARRIÈRE</i> ET DE <i>CHANGER LEUR VIE</i> POUR LE MEILLEUR 
		</h2>
		<div class="main-start_block">
			<div class="main-start_bx">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<div class="ttl">
							 CETTE ANNÉE NOUS OFFRONS DES EMPLOIS DANS LES DOMAINES SUIVANTS:
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
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr"> DÉPOSER UNE DEMANDE  </a>
					</div>
					<div class="bx">
						<div class="image">
 <img src="/local/templates/alabuga/img/spec.png" alt="" style="max-height: 460px;" class="mw-100 d-block">
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-start_bx -->
		</div>
		 <!-- /.main-start_block -->
		<div class="main-start_desc">
			 DEVENEZ UN <i>PROFESSIONNEL</i> DE RECONNAISSANCE MONDIALE !
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
					AVANTAGES DU PROGRAMME </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/graduation-cap_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 FORMATION PROFESSIONNELLE </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_icon.svg" alt="" class="mw-100 d-block">
							</div>
								<a href="https://lyl.su/UnoG" target="_blank">LEÇONS DE LANGUE RUSSE </a></li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/house-key_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 HÉBERGEMENT PRÉFÉRENTIEL DANS DES <a href="#housing" class="gtSteps" target="_blank">AUBERGES</a> CONFORTABLES </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/wallet_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <? $rub = \COption::GetOptionString( "askaron.settings", "UF_MTH_ALW"); $cur = new CurrencyLoad(); ?> Rémunération ⁠MENSUELLE INITIALE DE <?=str_replace(' ', '&nbsp;', $rub);?> RUB ($<?=$cur->exchange($rub, 'USD');?>)</li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 VOL PAYÉ VERS LA RUSSIE </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/treatment_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 ASSURANCE MALADIE VOLONTAIRE </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/transfer_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 TRANSFERT </li>
						</ul>
					</div>
 <a href="<?=CV_FORM?>" data-join target="_blank" class="page__btn page__btn--main"> DÉPOSER UNE DEMANDE </a>
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
					CONDITIONS D'ADMISSION </h2>
					<div class="list">
						<ul>
							<li>
							ÂGE: <i>18-22 ANS FEMMES</i> </li>
							<li>
							CITOYENNETÉ&nbsp;: <i>PAYS DE NOTRE <a href="<?=SITE_TEMPLATE_PATH?>/include/countries.php" data-fancybox data-type="iframe">LISTE</a></i></li>
							<li>
							ÉDUCATION: <i>AU MOINS 9 ANNÉES (ÉCOLE SECONDAIRE SELON LE SYSTÈME ÉDUCATIF RUSSE)</i> </li>
							<li>
							PASSEPORT INTERNATIONAL VALABLE</li>
							<li>
							PAS DE MALADIES CHRONIQUES GRAVES</li>
						</ul>
					</div>
					<div class="desc">
						 LES PARTICIPANTES DU PROGRAMME PASSENT UN EXAMEN MÉDICAL COMPLET À L’ARRIVÉE. UN PARTICIPANT NE SERA PAS AUTORISÉ À TRAVAILLER SI UNE MALADIE CHRONIQUE EST DÉTECTÉE. 
					</div>
					<div class="main-adm_btn">
 <a href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> APPLIQUER </a>
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
					 <?$APPLICATION->IncludeComponent(
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
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y"
	)
);?>
				</div>
			</div>
			<div class="bx">
				<div class="main-program_cart">
					<h2>Nous proposons des logements à des conditions préférentielles : </h2>
					
					<div class="subinfo">
					À l'automne 2025, un complexe résidentiel destiné aux participantes au programme Alabuga Start sera construit. 
					Jusqu'à ce que la construction du complexe résidentiel soit achevée, les participantes vivront dans des dortoirs.
					</div>
					
					<div class="block">
					<div class="ttl"> 
					Les dortoirs disposent de tout ce qui est nécessaire à l'hébergement.  </div>
					<ul>
					<li>Réfrigérateur</li>
					<li>Salle de douche</li>
					<li>Linge de lit</li>
					<li>Machines à laver</li>
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
 <img src="/upload/adm_steps_slider_01.jpg" alt="" class="mw-100 d-block"> <img src="/upload/adm_steps_slider_02.jpg" alt="" class="mw-100 d-block"> <img src="/upload/adm_steps_slider_03.jpg" alt="" class="mw-100 d-block"> <img src="/upload/adm_steps_slider_04.jpg" alt="" class="mw-100 d-block">
					</div>
				</div>
			</div>
			<div class="bx" id="admSteps">
				<div class="main-step_cart">
					<h2>
					ÉTAPES D'ADMISSION </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/telegram.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?> 1. Envoyez-nous votre nom et votre pays sur Telegram et obtenez votre RH responsable <a href="https://t.me/<?=str_replace('@','',$telegram)?>" class="tgLnk" target="_blank"><?=$telegram?></a> </li>
							<li> <span> <a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank"><img src="/upload/Google_Play_Store_badge_EN.svg" alt=""></a> <a href="https://apps.apple.com/us/app/telegram-messenger/id686449807" target="_blank"><img src="/upload/Download_on_the_App_Store_Badge.svg" alt=""></a> </span> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/id-card_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 2. ENVOYEZ VOTRE CV VIA CE <a href="<?=CV_FORM?>" data-join target="_blank">FORMULAIRE</a></li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 3. APPRENEZ AU MOINS <a href="<?=WORDS_FILE_FR?>" target="_blank">100 MOTS</a> EN RUSSE </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/laptop_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 4. COMPLÉTEZ LA SIMULATION DE BUSINESS </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/union_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 5. RÉUSSISSEZ UNE ENTREVUE EN LIGNE </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 6. SIGNEZ UNE OFFRE</li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
				<div class="main-step_cart">
					<h2>
					DÉLAIS D'ADMISSION POUR <i>2025</i> </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/free-icon-new-email.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> DEMANDE: <i>En cours</i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> ARRIVÉE EN RUSSIE: <i>Jusqu'à 2 mois après avoir passé <a href="#admSteps" class="gtSteps">toutes les étapes</a></i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> SIGNATURE DU CONTRAT DE TRAVAIL : <i>Dans un délai d'un mois après l'arrivée en Russie</i> </li>
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
		CONTACTS </h2>
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
                                    <div>Contacter</div>
                                </div>
                                <a href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> APPLIQUER </a>
                            </div> */ ?>
							<div class="contactsList">
								<div>
									<div class="icon sml">
										<img src="/local/templates/alabuga/img/icon/email.svg" alt="" class="mw-100 d-block">
									</div>
									 <? $email = \COption::GetOptionString( "askaron.settings", "UF_MAIN_EMAIL");?> <a href="mailto:<?=$email;?>"><?=$email;?></a>
								</div>
								<div>
									<div class="icon sml">
										<img src="/local/templates/alabuga/img/icon/whatsapp.svg" alt="" class="mw-100 d-block">
									</div>
									 <? $wapp = \COption::GetOptionString( "askaron.settings", "UF_MAIN_PHONE");?> <a href="https://wa.me/<?=str_replace(array(' ','+','(',')','-'),'',$wapp)?>" target="_blank"><?=$wapp?></a>
								</div>
								<div>
									<div class="icon sml">
										<img src="/local/templates/alabuga/img/icon/telegram.svg" alt="" class="mw-100 d-block">
									</div>
									 <div><? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?> <a href="https://t.me/<?=str_replace('@','',$telegram)?>" target="_blank"><?=$telegram?></a>
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
										 REJOIGNEZ NOTRE
									</div>
 <a href="https://t.me/AlabugaStart" target="_blank" class="link">
									CHAÎNE </a>
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
 <a href="https://instagram.com/alabuga_start_world?igshid=MWZjMTM2ODFkZg==" target="_blank" class="link">CHAÎNE</a>
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
 <a href="https://www.facebook.com/groups/3827107004187260/?ref=share&mibextid=NSMWBT" target="_blank" class="link">CHAÎNE</a>
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
 <a href="https://x.com/Alabuga_Start?t=ubsRLF2aDrKbgBXqssH-tw&s=35" target="_blank" class="link">CHAÎNE</a>
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
										 VISITE 3D:
									</div>
 <a href="https://my.matterport.com/show/?m=dtWRJue8MA2&help=1&gt=1" target="_blank" class="link">
									SUIVEZ LE LIEN </a>
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
										 ENREGISTREZ-VOUS SUR LA PLATEFORME RH:
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
										 CONSULTEZ NOTRE TELEGRAM-BOT POUR LA FAQ
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
 									

 									<a href="javascript:;" data-fancybox="" data-src="#files_block" target="_blank" class="link"> FICHIERS </a>
									

									<div id="files_block" style="display: none; max-width: 800px; max-height: 100%;">
										<ul class="files">
											
                                    		<li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_RUS"));?>" target="_blank">Алабуга Старт 2025 RU</a><br /></li>
                                            <li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_FR"));?>" target="_blank">Alabuga Start 2025 FR</a><br /></li>
                                            <!-- <li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_WB"));?>" target="_blank">ALABUGA START WELCOME BOOK EN</a></li> -->
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
 <a href="<?=WORDS_FILE?>" target="_blank" class="link"> 100 MOTS </a>
									<div class="name">
										 RUSSES
									</div>
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
 <a href="<?=CV_FORM?>" target="_blank" class="link"> FORMULAIRE </a>
									<div class="name">
										 DE CANDIDATURE
									</div>
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
										 REGARDEZ-NOUS:
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
 <!-- /.main-contact -->
<div id="faq">
	 <?
global $arFaqFr; $arFaqFr = array('!PROPERTY_NAME_fr' => false);
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
		"FILTER_NAME" => "arFaqFr",
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
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>