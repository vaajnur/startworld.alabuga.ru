<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$dir = $APPLICATION->GetCurDir();
if($dir != SITE_DIR)
{
	define('SITE_HOME_PAGE', $dir);
	define('LNG_ID', str_replace('/','',$dir));
}
else
{
	define('SITE_HOME_PAGE', SITE_DIR);
	define('LNG_ID', LANGUAGE_ID);		
}
IncludeTemplateLangFile(__FILE__);
define("JOIN_LINK", \COption::GetOptionString( "askaron.settings", "UF_JOIN_LINK"));
define("LIST_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_LIST_FILE")));
define("FORM_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FORM_FILE")));
define("WORDS_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_WORDS_FILE")));
define("CORP_VIDEO", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_VIDEO")));
define("HOSTELS_LINK", \COption::GetOptionString( "askaron.settings", "UF_HOSTELS_LINK"));
define("MORE_INFO_LINK", \COption::GetOptionString( "askaron.settings", "UF_MORE_INFO"));
define("CV_FORM", \COption::GetOptionString( "askaron.settings", "UF_CV_FORM"));
define("FILES_LINK", \COption::GetOptionString( "askaron.settings", "UF_FILES_LINK"));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <?	
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/grid.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick-theme.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/media.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/popup.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.css');
		
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/jquery3.1/jquery3.1.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/watchHeight/jquery.matchHeight.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/slick.js/slick.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/popup.js?=1');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/normalize.js');
		
		CJSCore::Init(array("fx","popup","jquery","date"));
	?>
	
	<?$APPLICATION->ShowHead();?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WRBHK8M');</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRBHK8M"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?$APPLICATION->IncludeFile(
        "/local/templates/alabuga/include/metrica_head.php",
        Array(),
        Array("MODE"=>"html", "NAME" => "Метрика")
    );?>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="m-menu">
			<div class="m-menu_overflow"></div>
			<!-- /.m-menu_overflow -->
			<div class="m-menu_container">
				<div class="m-menu_head">
					<div class="d-flex flex-wrap align-items-center justify-content-between">
						<div class="bx">
							<a href="<?=SITE_DIR?>" class="logo">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" class="mw-100 d-block">
							</a>
						</div>
						<div class="bx">
							<a href="javascript:;" class="m-menu_close"></a>
							<!-- /.m-menu_close -->
						</div>
					</div>
				</div>
				<!-- /.m-menu_head -->
				<div class="m-menu_body">
					<div class="m-menu_nav">
                    	<?$APPLICATION->IncludeComponent("bitrix:menu", "m_nav", array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        );?>
					</div>
					<!-- /.m-menu_nav -->
					<div class="m-menu_bottom">
						<div class="language">
                        	<?
                            	$langs = array(
									'en' => array('En','/'),
									'fr' => array('Fr','/fr/'),
									'es' => array('Es','/es/'),
									'pt' => array('Pt','/pt/'),
									'ar' => array('اللغة','/ar/'),
									'ru' => array('ру','/ru/'),
								);
							?>
                            <? foreach($langs as $key => $link):?>
							<a href="<?=($key == LANGUAGE_ID)?'javascript:;':$link[1]?>" class="lang <?=($key == LANGUAGE_ID)?'active':''?>">
								<?=$link[0]?>
							</a>
                            <? endforeach ?>
						</div>
						<a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main">
							<span>
								<?=GetMessage('JOIN_BTN')?>
							</span>
						</a>
					</div>
					<!-- /.m-menu_bottom -->
				</div>
				<!-- /.m-menu_body -->
			</div>
			<!-- /.m-menu_container -->
		</div>
		<!-- /.m-menu -->
        <div class="page d-flex flex-column">
			<header class="header">
				<div class="header_top">
					<div class="page__wrap">
						<a href="<?=SITE_DIR?>" class="logo">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" class="mw-100 d-block">
						</a>
					</div>
				</div>
				<!-- /.header_top -->
				<div class="header_fix rtl">
					<div class="page__wrap">
						<div class="header_fix-block">
							<div class="d-flex flex-wrap align-items-center justify-content-between">
								<a href="<?=SITE_DIR?>" class="logo">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" class="mw-100 d-block">
								</a>
								<div class="header_nav">									
                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "m_nav", array(
                                        "ROOT_MENU_TYPE" => "top",
                                        "MENU_CACHE_TYPE" => "Y",
                                        "MENU_CACHE_TIME" => "36000000",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MAX_LEVEL" => "1",
                                        "CHILD_MENU_TYPE" => "left",
                                        "USE_EXT" => "N",
                                        "ALLOW_MULTI_SELECT" => "N"
                                        ),
                                        false
                                    );?>
								</div>
								<!-- /.header_nav -->
								<div class="bx">
                                	<div class="langSelect">
                                        <div class="list">
											<? $activeLang = $langs[LANGUAGE_ID]; $arSelLangs = $langs; unset($arSelLangs[LANGUAGE_ID])?>
                                            <a href="javascript:;" class="lang active">
                                                <?=$activeLang[0]?>
                                            </a>
                                            <? foreach($arSelLangs as $key => $link):?>
                                            <a href="<?=$link[1]?>" class="lang">
                                                <?=$link[0]?>
                                            </a>
                                            <? endforeach ?>
                                        </div>
                                    </div>
									<a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--main">
										<span>
											<?=GetMessage('JOIN_BTN')?>
										</span>
									</a>
									<a href="javascript:;" class="header_burger">
										<span></span>
									</a>
									<!-- /.header_burger -->
								</div>
							</div>
						</div>
						<!-- /.header_fix-block -->
					</div>
				</div>
				<!-- /.header_fix -->
			</header>
			<!-- /.header -->			
			<main class="main flex-fill">
            	<div class="main_ban">
					<div class="image js-ban">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/ban.jpg" alt="" class="mw-100 d-block">
					</div>
					<div class="main_ban-bx">
						<div class="page__wrap">
							<div class="language">								
								<? foreach($langs as $key => $link):?>
                                <a href="<?=($key == LANGUAGE_ID)?'javascript:;':$link[1]?>" class="lang <?=($key == LANGUAGE_ID)?'active':''?>">
                                    <?=$link[0]?>
                                </a>
                                <? endforeach ?>
							</div>                
                            <?$APPLICATION->IncludeFile(
                                SITE_TEMPLATE_PATH."/include/".SITE_ID."/head_bnr.php",
                                Array(),
                                Array("MODE"=>"html", "NAME" => "Заглавный баннер", "TEMPLATE" => "head_bnr.php")
                            );?>
							<a href="<?=JOIN_LINK?>" data-join target="_blank" class="page__btn page__btn--curr">
								<span>
									<?=GetMessage('JOIN_BTN')?>
								</span>
							</a>
						</div>
					</div>
					<!-- /.main_ban-bx -->
				</div>
				<!-- /.main_ban -->