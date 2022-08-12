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
	
	 <!--看板娘-->
	<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/stevenjoezhang/live2d-widget/autoload.js"></script>

	
	</div><!-- #page Pjax container-->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" theme-info="Sakura v<?php echo SAKURA_VERSION; ?>">
			<div class="footertext">
				<div class="img-preload">
					<img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/wordpress-rotating-ball-o.svg">
					<img src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.1.9/img/Sakura/images/disqus-preloader.svg">
				</div>
				<p style="color: #666666;"><?php echo akina_option('footer_info', ''); ?></p>
			</div>
			<div class="footer-device">
			<p style="font-family: 'Ubuntu', sans-serif;">
					<span style="color: #b9b9b9;">
						<?php /* 能保留下面两个链接吗？算是我一个小小的心愿吧~ */ ?>
						Theme <a href="https://2heng.xin/theme-sakura/" target="_blank" style="color: #b9b9b9;;text-decoration: underline dotted rgba(0, 0, 0, .1);">Sakura</a> <i class="iconfont icon-sakura rotating" style="color: #ffc0cb;display:inline-block"></i> by <a href="https://2heng.xin/" target="_blank" style="color: #b9b9b9;;text-decoration: underline dotted rgba(0, 0, 0, .1);">Mashiro</a>
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
	<a class="cd-top faa-float animated "></a>
	<button id="moblieGoTop" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	<button id="moblieDarkLight"><i class="fa fa-moon-o" aria-hidden="true"></i></button>
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
<?php wp_footer(); ?>
<?php if(akina_option('site_statistics')){ ?>
<div class="site-statistics">
<script type="text/javascript"><?php echo akina_option('site_statistics'); ?></script>
</div>
<?php } ?>
<div class="changeSkin-gear no-select" style="bottom: -999px;">
    <div class="keys">
        <span id="open-skinMenu">
		<i class="iconfont icon-gear inline-block rotating"></i>&nbsp; 切换主题 | SCHEME TOOL 
        </span>
    </div>
</div>
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
	<div class="show-hide-wrap"><button class="show-hide"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 32 32"><path d="M22 16l-10.105-10.6-1.895 1.987 8.211 8.613-8.211 8.612 1.895 1.988 8.211-8.613z" ></path></svg></button></div>
    </aside>
<?php endif; ?>
<?php if (akina_option('aplayer_server') != 'off'): ?>
    <div id="aplayer-float" style="z-index: 100;"
	    class="aplayer"
        data-id="<?php echo akina_option('aplayer_playlistid', ''); ?>"
        data-server="<?php echo akina_option('aplayer_server'); ?>"
        data-type="playlist"
        data-fixed="true"
        data-theme="orange"
        data-autoplay="ture"
        >
    </div>
<?php endif; ?>
</body>
</html>
<!-- 🌸飘落 -->
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn@latest/js/sakura.js"></script>
<!-- 点击出现爱心 -->
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<!-- // 连线 -->
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/canvas-nest.min.js"></script>
<script type="text/javascript" src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
<!--运行时间-->
<script type="text/javascript">
    function show_runtime() {
        window.setTimeout("show_runtime()", 1000);
        X = new Date("12/11/2021 7:00:00");
        Y = new Date();
        T = (Y.getTime() - X.getTime());
        M = 24 * 60 * 60 * 1000;
        a = T / M;
        A = Math.floor(a);
        b = (a - A) * 24;
        B = Math.floor(b);
        c = (b - B) * 60;
        C = Math.floor((b - B) * 60);
        D = Math.floor((c - C) * 60);
        runtime_span.innerHTML = "网站在各种灾难中运行了: " + A + "天" + B + "小时" + C + "分" + D + "秒"
    }
    show_runtime();
</script>
