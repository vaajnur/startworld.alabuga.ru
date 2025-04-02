<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ALABUGA START - Relocation program to Russia for work experience");
?><div class="main-zone" id="company">
	<div class="page__wrap">
		<h2>
		LA ZONA ECONÓMICA ESPECIAL <i>MÁS EXITOSA DE RUSIA</i> Y LA MEJOR DE EUROPA «Alabuga» ATRAE A LOS INVERSORES CON UNA SERIE DE VENTAJAS INDUDABLES. </h2>
		<div class="text">
			<p>
				 Las empresas en «Alabuga» están exentas de pagar impuestos sobre la propiedad, la tierra y el transporte, el impuesto sobre la renta es solo del 2%. Bajo el corriente régimen de zona franca aduanera, los equipos importados utilizados en el territorio de «Alabuga» están exentos de derechos de aduana e IVA.
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
			<h3>
			INDICADORES CLAVE DE LA ZEE «ALABUGA» </h3>
			<div class="main-zone_gr">
				<div class="d-flex flex-wrap">
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_TTL_AMT");?>
							</div>
							<div class="txt">
								 Cantidad total de residentes
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_FNC_MNF");?>
							</div>
							<div class="txt">
								 Empresas manufactureras en funcionamiento
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_ACT_INVEST");?><i>bln</i>
							</div>
							<div class="txt">
								 Millones de dólares realmente invertidos por los residentes
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
 <i>＄</i><?=\COption::GetOptionString( "askaron.settings", "UF_RES_REV");?><i>bln</i>
							</div>
							<div class="txt">
								 Al 10 de enero de 2023 los ingresos de los residentes ascienden a 1.8 mil millones de dólares
							</div>
						</div>
					</div>
					<div class="bx">
						<div class="cart-group">
							<div class="numb">
								 <?=\COption::GetOptionString( "askaron.settings", "UF_EMPL");?>
							</div>
							<div class="txt">
								 Empleados
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.main-zone_gr -->
			<div class="main-zone_bottom">
 <a href="<?=MORE_INFO_LINK?>" target="_blank"> Más información </a> sobre «Alabuga» ZEE
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
						Participantes de 44 países Como As Mozambique, Colombia, Malí, Lesoto, Zimbabue, Benín, Ruanda, Tanzania, Túnez, Sudán Del Sur, República Democrática Del Congo, Sri Lanka, etc. fueron empleados en 2024 bajo el programa Alabuga Start.</h2>
					</div>
					<div class="bx">
						<div class="main-plan_cart">
							<div class="ttl">
								 PLAN DE RECLUTAMIENTO 2025:
							</div>
							<div class="list">
								<ul>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> ESPECIALIDADES </li>
									<li>
									<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> PAÍSES </li>
								</ul>
							</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> UNIRSE </a>
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
				 PLAN DE RECLUTAMIENTO 2025:
			</div>
			<div class="list">
				<ul>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_SPEC");?> ESPECIALIDADES </li>
					<li>
					<?=\COption::GetOptionString( "askaron.settings", "UF_PLAN_CNTR");?> PAÍSES </li>
				</ul>
			</div>
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main"> UNIRSE </a>
		</div>
		 <!-- /.main-plan_cart -->
	</div>
	 <!-- /.main-plan_bottom -->
</div>
 <!-- /.main-plan -->
<div class="main-feedback" id="feedback">
	<div class="page__wrap">
		<div class="main-feedback_top">
			<h2> <i>Opiniones</i> de nuestros participantes </h2>
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
		"PROPERTY_CODE" => array(0=>"NAME_es",1=>"COUNTRY_es",2=>"REVIEW_es",3=>"",4=>"",5=>"",6=>"",),
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
		ALABUGA START ES UNA OPORTUNIDAD ÚNICA PARA JÓVENES Y TALENTOSOS DE TODAS PARTES DEL MUNDO PARA <i>CONSTRUIR UNA CARRERA</i> Y <i>CAMBIAR SU VIDA</i> PARA MEJOR. </h2>
		<div class="main-start_block">
			<div class="main-start_bx">
				<div class="d-flex flex-wrap justify-content-between">
					<div class="bx">
						<div class="ttl">
							 ESTE AÑO OFRECEMOS EMPLEO EN LOS SIGUIENTES CAMPOS:
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
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr"> APLICAR </a>
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
			¡CONVIÉRTETE EN UN <i>PROFESIONAL</i> DE CLASE MUNDIAL!
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
					BENEFICIOS DEL PROGRAMA </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/graduation-cap_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 ENTRENAMIENTO PROFESIONAL </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_icon.svg" alt="" class="mw-100 d-block">
							</div>
								<a href="https://lyl.su/UnoG" target="_blank">CLASES DE RUSO</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/house-key_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 ALOJAMIENTO PREFERENCIAL EN <a href="<?=HOSTELS_LINK?>" target="_blank">ALBERGUES</a> CÓMODOS </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/wallet_icon.svg" alt="" class="mw-100 d-block">
							</div>
                            <? $rub = \COption::GetOptionString( "askaron.settings", "UF_MTH_ALW"); $cur = new CurrencyLoad(); ?>
							 SALARIO MENSUAL INICIAL DE <?=str_replace(' ', '&nbsp;', $rub);?> rub ($<?=$cur->exchange($rub, 'USD');?>)</li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 VUELO A RUSIA PAGADO </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/treatment_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 SEGURO MÉDICO VOLUNTARIO </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/transfer_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 TRASLADO </li>
						</ul>
					</div>
 <a href="<?=CV_FORM?>" data-join target="_blank" class="page__btn page__btn--main"> APLICAR </a>
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
					REQUISITOS DE ADMISIÓN </h2>
					<div class="list">
						<ul>
							<li>
							EDAD: <i> MUJERES DE 18 A 22 AÑOS</i> </li>
							<li>
							CIUDADANÍA: <i>PAÍSES DE NUESTRA <a href="<?=SITE_TEMPLATE_PATH?>/include/countries.php" data-fancybox data-type="iframe">LISTA</a></i> </li>
							<li>
							EDUCACIÓN: <i>AL MENOS 9 CLASES ESCUELA SECUNDARIA SEGÚN EL SISTEMA EDUCATIVO RUSO</i> </li>
							<li>
							PASAPORTE INTERNACIONAL VÁLIDO </li>
							<li>
							SIN ENFERMEDADES CRÓNICAS GRAVES </li>
						</ul>
					</div>
					<div class="desc">
						 LOS PARTICIPANTES DEL PROGRAMA PASAN UN EXAMEN MÉDICO COMPLETO A SU LLEGADA. EL PARTICIPANTE NO PODRÁ TRABAJAR SI SE DETECTA UNA ENFERMEDAD CRÓNICA.
					</div>
					<div class="main-adm_btn">
 <a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr"> APLICAR </a>
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
            <? 
            $GLOBALS['arrFilter'] = array("=PROPERTY_LANG_VALUE"=> "es"); 
            $APPLICATION->IncludeComponent(
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
            <h2>Proporcionamos vivienda en condiciones de privilegio:</h2>

            <div class="subinfo">
            En 2025 se construirá un complejo residencial para las participantes en el programa Alabuga Start. <br><br>
            Hasta que se termine la construcción del complejo residencial, las participantes vivirán en dormitorios.
            </div>

            <div class="block">
            <div class="ttl"> Los dormitorios disponen de todo lo necesario para vivir: </div>
            <ul>
              <li>Nevera;</li>
              <li>Cuarto de ducha;</li>
              <li>Cobijas;</li>
              <li>Lavadoras.</li>
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
					PASOS DE ADMISIÓN </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 								<img src="/local/templates/alabuga/img/icon/telegram.svg" alt="" class="mw-100 d-block">
							</div>
                            <? $telegram = \COption::GetOptionString( "askaron.settings", "UF_MAIN_TELEGRAM");?>                                    
							 <!-- /.icon --> 1. Envie-nos seu nome e país no Telegram e um responsável de RH será designado para você <a href="https://t.me/<?=str_replace('@','',$telegram)?>" target="_blank" class="tgLnk"><?=$telegram?></a>
                            </li>
                            <li>
                             <span>
                             	<a href="https://play.google.com/store/apps/details?id=org.telegram.messenger" target="_blank"><img src="/upload/Google_Play_Store_badge_EN.svg" alt="" /></a>
                             	<a href="https://apps.apple.com/us/app/telegram-messenger/id686449807" target="_blank"><img src="/upload/Download_on_the_App_Store_Badge.svg" alt="" /></a>
                             </span> 
                            </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/id-card_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 2. ENVÍA TU CV A TRAVÉS DE ESTE <a href="<?=CV_FORM?>" data-join target="_blank">FORMULARIO</a> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/bubble-chat_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 3. APRENDE AL MENOS <a href="<?=WORDS_FILE_ES?>" target="_blank">100 PALABRAS</a> EN RUSO </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/laptop_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 4. COMPLETA LA SIMULACIÓN DE NEGOCIOS </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/union_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 5. PASE UNA ENTREVISTA EN LÍNEA </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> 6. FIRMA UNA OFERTA </li>
						</ul>
					</div>
					 <!-- /.list -->
				</div>
				 <!-- /.main-step_cart -->
				<div class="main-step_cart">
					<h2>
					PLAZOS DE ADMISIÓN PARA <i>2025</i> </h2>
					<div class="list">
						<ul>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/free-icon-new-email.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> APLICACIÓN: <i>En curso </i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/plane_small_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> LLEGADA A RUSIA: <i>Até 2 meses depois de passar <a href="#admSteps" class="gtSteps">todas as fases</a></i> </li>
							<li>
							<div class="icon">
 <img src="/local/templates/alabuga/img/icon/exam-results_icon.svg" alt="" class="mw-100 d-block">
							</div>
							 <!-- /.icon --> FIRMA DEL CONTRATO DE TRABAJO: <i>En el plazo de un mes desde la llegada a Rusia</i> </li>
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
		DATOS DE CONTACTO </h2>
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
                                    <div>Contacto</div>
                                </div>
                                <a href="<?=JOIN_LINK?>" target="_blank" class="page__btn page__btn--curr"> APLICAR </a>
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
										 ÚNETE A NUESTRO
									</div>
 <a href="https://t.me/AlabugaStart" target="_blank" class="link">
									CANAL </a>
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
									<a href="https://instagram.com/alabuga_start_world?igshid=MWZjMTM2ODFkZg==" target="_blank" class="link">CANAL</a>
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
									<a href="https://www.facebook.com/groups/3827107004187260/?ref=share&mibextid=NSMWBT" target="_blank" class="link">CANAL</a>
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
									<a href="https://x.com/Alabuga_Start?t=ubsRLF2aDrKbgBXqssH-tw&s=35" target="_blank" class="link">CANAL</a>
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
										 TOUR 3D:
									</div>
 <a href="https://my.matterport.com/show/?m=dtWRJue8MA2&help=1&gt=1" target="_blank" class="link">
									SIGA EL ENLACE </a>
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
										 REGISTRARSE EN LA PLATAFORMA DE RECURSOS HUMANOS:
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
										 CONSULTE NUESTRAS PREGUNTAS FRECUENTES SOBRE TELEGRAM-BOT:
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

 									<a href="javascript:;" data-fancybox data-src="#files_block" target="_blank" class="link"> ARCHIVOS </a>
                                    
                                    <div id="files_block" style="display: none; max-width: 800px; max-height: 100%;">
                                    	<ul class="files">
                                    		<li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_RUS"));?>" target="_blank">Алабуга Старт 2025 RU</a><br /></li>
                                            <li><a href="<?=CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FILES_AS_ES"));?>" target="_blank">Alabuga Start 2025 ES</a><br /></li>
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
 <a href="<?=WORDS_FILE?>" target="_blank" class="link"> 100 PALABRAS </a>
									<div class="name">
										 EN RUSO
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
 <a href="<?=CV_FORM?>" target="_blank" class="link"> FORMULARIO </a>
									<div class="name">
										 DE SOLICITUD
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
										 VÉANOS:
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