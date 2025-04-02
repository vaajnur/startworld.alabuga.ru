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
IncludeTemplateLangFile(__FILE__,LNG_ID);
define("JOIN_LINK", \COption::GetOptionString( "askaron.settings", "UF_JOIN_LINK"));
define("JOIN_LINK_RU", \COption::GetOptionString( "askaron.settings", "UF_JOIN_LINK_RU"));
define("LIST_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_LIST_FILE")));
define("LIST_FILE_RU", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_LIST_FILE_RU")));
define("FORM_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_FORM_FILE")));

define("WORDS_FILE", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_WORDS_FILE")));
define("WORDS_FILE_FR", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_WORDS_FILE_FR")));
define("WORDS_FILE_ES", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_WORDS_FILE_ES")));

define("CORP_VIDEO", CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_VIDEO")));
define("HOSTELS_LINK", \COption::GetOptionString( "askaron.settings", "UF_HOSTELS_LINK"));
define("MORE_INFO_LINK", \COption::GetOptionString( "askaron.settings", "UF_MORE_INFO"));
define("CV_FORM", \COption::GetOptionString( "askaron.settings", "UF_CV_FORM"));
define("FILES_LINK", \COption::GetOptionString( "askaron.settings", "UF_FILES_LINK"));
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LNG_ID?>" lang="<?=LNG_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	<meta property="og:image" content="/local/templates/alabuga/img/logo.svg"/>
    <?	
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css?t=2');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/grid.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/slick-theme.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/popup.css');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/media.css?t=1');
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.css');
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.css');
		if(LNG_ID == 'fr') $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fr.css');

		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/jquery3.1/jquery3.1.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/watchHeight/jquery.matchHeight.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/slick.js/slick.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.js');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/popup.js?t=4');
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/normalize.js?t=1');
		
		CJSCore::Init(array("fx","popup","jquery","date"));
	?>
	
	<?$APPLICATION->ShowHead();?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W6HVTFX');</script>
	<!-- End Google Tag Manager -->

	<!-- Snap Pixel Code -->
	<script type='text/javascript'>
	(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
	{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
	a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
	r.src=n;var u=t.getElementsByTagName(s)[0];
	u.parentNode.insertBefore(r,u);})(window,document,
	'https://sc-static.net/scevent.min.js');
	
	snaptr('init', '6297f45d-9846-4f20-9c71-c9737f7b9438', {});
	
	snaptr('track', 'PAGE_VIEW');
	
	</script>
	<!-- End Snap Pixel Code -->
    
</head>

<body class="language_<?=LNG_ID;?>">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6HVTFX"
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
							<a title="logo" href="<?=SITE_HOME_PAGE?>" class="logo">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="logo" class="mw-100 d-block">
							</a>
						</div>
						<div class="bx">
							<a title="close" href="javascript:;" class="m-menu_close"></a>
							<!-- /.m-menu_close -->
						</div>
					</div>
				</div>
				<!-- /.m-menu_head -->
				<div class="m-menu_body">
					<div class="m-menu_nav">
                    	<?$APPLICATION->IncludeComponent("bitrix:menu", "m_nav", array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "N",
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
							<a title="lang <?=$key;?>" href="<?=($key == LNG_ID)?'javascript:;':$link[1]?>" class="lang <?=($key == LNG_ID)?'active':''?>">
								<?=$link[0]?>
							</a>
                            <? endforeach ?>
						</div>
						

						<a title="JOIN" href="<?if ($APPLICATION->GetCurDir()=='/ru/') {echo JOIN_LINK_RU;}else{echo JOIN_LINK;}?>" target="_blank" data-join  class="page__btn page__btn--main">
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
						<a title="HOME PAGE" href="<?=SITE_HOME_PAGE?>" class="logo">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="logo" class="mw-100 d-block">
						</a>
					</div>
				</div>
				<!-- /.header_top -->
				<div class="header_fix">
					<div class="page__wrap">
						<div class="header_fix-block">
							<div class="d-flex flex-wrap align-items-center justify-content-between">
								<a title="HOME PAGE" href="<?=SITE_HOME_PAGE?>" class="logo">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="logo" class="mw-100 d-block">
								</a>
								<div class="header_nav">									
                                    <?$APPLICATION->IncludeComponent("bitrix:menu", "m_nav", array(
                                        "ROOT_MENU_TYPE" => "top",
                                        "MENU_CACHE_TYPE" => "N",
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
											<? $activeLang = $langs[LNG_ID]; $arSelLangs = $langs; unset($arSelLangs[LNG_ID])?>
                                            <a title="active Lang" href="javascript:;" class="lang active">
                                                <?=$activeLang[0]?>
                                            </a>
                                            <? foreach($arSelLangs as $key => $link):?>
                                            <a title="lang <?=$key;?>" href="<?=$link[1]?>" class="lang">
                                                <?=$link[0]?>
                                            </a>
                                            <? endforeach ?>
                                        </div>
                                    </div>
									<a title="JOIN" href="<?if ($APPLICATION->GetCurDir()=='/ru/') {echo JOIN_LINK_RU;}else{echo JOIN_LINK;}?>" data-join target="_blank" class="page__btn page__btn--main">
										<span>
											<?=GetMessage('JOIN_BTN')?>
										</span>
									</a>
									<a title="header burger" href="javascript:;" class="header_burger">
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
						<!--<img src="<?=SITE_TEMPLATE_PATH?>/img/ban.jpg" alt=" Relocation program to Russia for work experience " class="mw-100 d-block">-->
						<img src="<?=SITE_TEMPLATE_PATH?>/img/as_mir.jpg" alt=" Relocation program to Russia for work experience " class="mw-100 d-block">
					</div>
					<div class="main_ban-bx">
						<div class="page__wrap">
							<div class="language">								
								<? foreach($langs as $key => $link):?>
                                <a title="lang <?=$key;?>" href="<?=($key == LNG_ID)?'javascript:;':$link[1]?>" class="lang <?=($key == LNG_ID)?'active':''?>">
                                    <?=$link[0]?>
                                </a>
                                <? endforeach ?>
							</div>                
                            <?$APPLICATION->IncludeFile(
                                SITE_TEMPLATE_PATH."/include/".LNG_ID."/head_bnr.php",
                                Array(),
                                Array("MODE"=>"html", "NAME" => "Заглавный баннер", "TEMPLATE" => "head_bnr.php")
                            );?>

                            <div class="anchor-buttons flex">
	                            <button class="white-button ancors" href="#grantCompetition">Grant Competition</button>
	                            <button class="white-button ancors" href="#news">Employment<br>Opportunities</button>
							</div>

							<!-- <a title="JOIN LINK" href="<?if ($APPLICATION->GetCurDir()=='/ru/') {echo JOIN_LINK_RU;}else{echo JOIN_LINK;}?>" data-join target="_blank" class="page__btn page__btn--curr">
								<span>
									<?=GetMessage('JOIN_BTN')?>
								</span>
							</a> -->
						</div>
					</div>
					<!-- /.main_ban-bx -->
				</div>
				<!-- /.main_ban -->