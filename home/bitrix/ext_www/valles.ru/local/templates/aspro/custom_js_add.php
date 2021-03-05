<?
use \Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
$asset->addJs(SITE_TEMPLATE_PATH.'/js/lazyload.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.carousel.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.autoplay.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.autoheight.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.navigation.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.support.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.animate.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.autorefresh.min.js');
$asset->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.hash.min.js');
$asset->addCss(SITE_TEMPLATE_PATH.'/css/slick.css');
$asset->addCss(SITE_TEMPLATE_PATH.'/css/owl/owl.carousel.css');
$asset->addCss(SITE_TEMPLATE_PATH.'/css/owl/owl.theme.default.css');