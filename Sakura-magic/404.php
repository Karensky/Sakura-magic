<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Akina
 */

 ?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title itemprop="name"><?php global $page, $paged;wp_title( '-', true, 'right' );
bloginfo( 'name' );$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) echo " - $site_description";if ( $paged >= 2 || $page >= 2 ) echo ' - ' . sprintf( __( 'page %s'), max( $paged, $page ) );/*第 %s 页*/?>
</title>
<link type="text/css" media="all" href="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/css/main/lib.min.css" rel="stylesheet" />
<?php wp_head(); ?>
<script>
var the_url=window.location.href;
var the_dom="<?php echo str_replace("http://", "", str_replace("https://", "", get_site_url())); ?>";
var the_ua=navigator.userAgent;
var the_ref=document.referrer;
function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); 
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
</script>
</head>
<body <?php body_class(); ?>>
<section class="error-404 not-found">
<div class="error-img">
<div class="anim-icon" id="404" style="background: url(https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/image/error/image-404.png) no-repeat center center;
    background-size: contain;
    height: 50%;
    margin: 10% 0 5% 0;"></div>
</div>
<div class="err-button back">
<a id="golast" href=javascript:history.go(-1);><?php _e('return to previous page','sakura');/*返回上一页*/?></a>
<a id="gohome" href="<?php bloginfo('url');?>"><?php _e('return to home page','sakura');/*返回主页*/?></a>  
</div>
<div style="display:block; width:284px;margin: auto;">
<p style="margin-bottom: 1em;margin-top: 1.5em;text-align: center;font-size: 15px;"><?php _e('Don\'t worry, search in site?','sakura');/*别急，试试站内搜索？*/?></p>
<form class="s-search" method="get" action="/" role="search">
    <i class="iconfont icon-search" style="bottom: 8px;left: 12px;"></i>
    <input class="text-input" style="padding: 8px 20px 8px 46px;" type="search" name="s" placeholder="<?php _e('Search...', 'akina') ?>" required>	
</form>
</div>
</section>
<!--<script src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@1.5/php/js/404.min.js" type="text/javascript"></script>-->
</body>
