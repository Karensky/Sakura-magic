<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sakura
 */

?>
	</div><!-- #content -->
	<?php 
		if(akina_option('general_disqus_plugin_support')){
			get_template_part('layouts/duoshuo');
		}else{
			comments_template('', true); 
		}
	?>
	
	</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" theme-info="Sakura magic version">
			<div class="footertext">
				<div class="img-preload">
					<img src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/image/loading/loading-circle.svg">
					<img src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/image/loading/preloader.svg">
				</div>
				<p style="color: #666666;"><?php echo akina_option('footer_info', ''); ?></p>
				<p style="color: #666666;">萌备 202020200 号</p>
			</div>
			<div class="footer-device">
			<p style="font-family: 'Ubuntu', sans-serif;">
					<span style="color: #b9b9b9;">
						 <i class="iconfont icon-sakura rotating" style="color: #ffc0cb;display:inline-block"></i>
					</span>
				</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="openNav no-select">
		<div class="iconflat no-select">	 
			<div class="icon"></div>
		</div>
		<div class="site-branding">
			<?php if (akina_option('akina_logo')){ ?>
			<div class="site-title"><a href="<?php bloginfo('url');?>" ><img src="<?php echo akina_option('akina_logo'); ?>"></a></div>
			<?php }else{ ?>
			<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>
			<?php } ?>
		</div>
	</div><!-- m-nav-bar -->
	</section><!-- #section -->
	<!-- m-nav-center -->
	<div id="mo-nav">
		<div class="m-avatar">
			<?php $ava = akina_option('focus_logo') ? akina_option('focus_logo') : get_template_directory_uri().'/images/avatar.jpg'; ?>
			<img src="<?php echo $ava ?>">
		</div>
		<div class="m-search">
			<form class="m-search-form" method="get" action="<?php echo home_url(); ?>" role="search">
				<input class="m-search-input" type="search" name="s" placeholder="<?php _e('Search...', 'sakura') /*搜索...*/?>" required>
			</form>
		</div>
		<?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?>
	</div><!-- m-nav-center end -->
	<a class="cd-top faa-float animated " style='display:none;'></a>
	<button onclick="topFunction()" id="moblieGoTop" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	<!-- search start -->
	<form class="js-search search-form search-form--modal" method="get" action="<?php echo home_url(); ?>" role="search">
		<div class="search-form__inner">
		<?php if(akina_option('live_search')){ ?>
			<div class="micro">
				<i class="iconfont icon-search"></i>
				<input id="search-input" class="text-input" type="search" name="s" placeholder="<?php _e('Want to find something?', 'sakura') /*想要找点什么呢*/?>" required>
			</div>
			<div class="ins-section-wrapper">
                <a id="Ty" href="#"></a>
                <div class="ins-section-container" id="PostlistBox"></div>
            </div>
		<?php }else{ ?>
			<div class="micro">
				<p class="micro mb-"><?php _e('Want to find something?', 'sakura') /*想要找点什么呢*/?></p>
				<i class="iconfont icon-search"></i>
				<input class="text-input" type="search" name="s" placeholder="<?php _e('Search', 'sakura') ?>" required>
			</div>
		<?php } ?>
		</div>
		<div class="search_close"></div>
	</form>
	<!-- search end -->

<!--onload js-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/js/custom/onload.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/js/custom/particles.min.js"></script>
<script src="/wp-content/themes/Sakura/js/custom/particles-app.js"></script>

<div id="particles-js"></div>

<!--typing.js效果-->
<script src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/js/custom/typing.min.js"></script>

<!--img-error-autofill-->
<script src="https://cdn.jsdelivr.net/gh/fz6m/img-error-autofill@1.2/dist/img-error-autofill.min.js"></script>

<!--lamuleimu-->
<script src="https://cdn.jsdelivr.net/gh/fz6m/lamu-leimu-button@1.2/dist/lamu-leimu.min.js"></script>

<!-- live2d 核心 -->
<script src="https://cdn.jsdelivr.net/gh/fz6m/live2d-generator@1.1/dist/live2d.js"></script>

<!-- live2d 生成器 -->
<script src="https://cdn.jsdelivr.net/gh/fz6m/live2d-generator@1.5/dist/live2d-generator.min.js"></script>

<!--new year-->
<?php
    date_default_timezone_set('PRC');
    
    $year = date("Y");
    $month = date("n");
    $day = intval(date("d"));
    
    $is_current_year = $year == 2021;
    $is_new_year_day = $month == 1 && $day < 4; // 1.1 ~ 1.3
    $is_spring_festival = $month == 2 && $day > 9 && $day < 27; // 2.10 ~ 2.26
    $is_show = $is_new_year_day || $is_spring_festival;
    
    if($is_current_year && $is_show) {
        echo '<script src="https://cdn.jsdelivr.net/gh/fz6m/china-lantern@1.6/dist/china-lantern.min.js"></script>';
        echo '<style>.j-china-lantern .lantern__warpper {z-index:9999;}</style>';
    }
?>

<!--防审查-->
<script src="https://cdn.jsdelivr.net/gh/fz6m/console-ban@2.2/dist/console-ban.min.js"></script>
 <script>ConsoleBan.init({redirect: '/not-found'})</script>

<!--sakura 效果-->
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@1.2/js/sakura/sakura-small.js"></script>-->

<!--onload end-->

<?php wp_footer(); ?>
<?php if(akina_option('site_statistics')){ ?>
<div class="site-statistics">
<script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
</div>
<?php } ?>

<div class="skin-menu no-select">
    <div class="theme-controls row-container">
        <ul class="menu-list">
            <li id="white-bg">
                <i class="fa fa-television" aria-hidden="true"></i>
            </li><!--Default-->
            <li id="sakura-bg">
                <i class="iconfont icon-sakura"></i>
            </li><!--Sakura-->
            <li id="gribs-bg">
                <i class="fa fa-slack" aria-hidden="true"></i>
            </li><!--Grids-->
            <li id="KAdots-bg">
                <i class="iconfont icon-dots"></i>
            </li><!--Dots-->
            <li id="totem-bg">
                <i class="fa fa-superpowers" aria-hidden="true"></i>
            </li><!--Orange-->
            <li id="pixiv-bg">
                <i class="iconfont icon-pixiv"></i>
            </li><!--Start-->
            <li id="bing-bg">
                <i class="iconfont icon-bing"></i>
            </li><!--Bing-->
            <li id="dark-bg">
                <i class="fa fa-moon-o" aria-hidden="true"></i>
            </li><!--Night-->
        </ul>
    </div>
    <div class="font-family-controls row-container">
        <button type="button" class="control-btn-serif selected" data-mode="serif" 
                onclick="mashiro_global.font_control.change_font()">Serif</button>
        <button type="button" class="control-btn-sans-serif" data-mode="sans-serif" 
                onclick="mashiro_global.font_control.change_font()">Sans Serif</button>
    </div>
</div>
<canvas id="night-mode-cover"></canvas>
<?php if (akina_option('sakura_widget')) : ?>
	<aside id="secondary" class="widget-area" role="complementary" style="left: -400px;">
    <div class="heading"><?php _e('Widgets') /*小工具*/ ?></div>
    <div class="sakura_widget">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sakura_widget')) : endif; ?>
	</div>
	<div class="show-hide-wrap"><button class="show-hide"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32"><path d="M22 16l-10.105-10.6-1.895 1.987 8.211 8.613-8.211 8.612 1.895 1.988 8.211-8.613z"></path></svg></button></div>
    </aside>
<?php endif; ?>
<?php if (akina_option('playlist_id', '')): ?>
    <div id="aplayer-float" style="z-index: 100;"
	    class="aplayer"
        data-id="<?php echo akina_option('playlist_id', ''); ?>"
        data-server="netease"
        data-type="playlist"
        data-fixed="true"
        data-theme="orange">
    </div>
<?php endif; ?>

</body>
</html>
