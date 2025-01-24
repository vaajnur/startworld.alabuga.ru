<?php
require_once $_SERVER['DOCUMENT_ROOT']."/local/include/class_currency.php"; 


function explodeUrlQueryParams($sUrl) {
    $aUrl = parse_url($sUrl);
    $aUrl['query_params'] = array();
    $aPairs = explode('&', $aUrl['query']);
    foreach($aPairs as $sPair) {
        if (trim($sPair) == '') { continue; }
        list($sKey, $sValue) = explode('=', $sPair);
        $aUrl['query_params'][$sKey] = urldecode($sValue);
    }
    return $aUrl;
}

