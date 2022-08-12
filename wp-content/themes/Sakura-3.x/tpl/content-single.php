<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="entry-census"><?php echo poi_time_since(strtotime($post->post_date_gmt)); ?>&nbsp;&nbsp;<?php echo get_post_views(get_the_ID()).' '. _n('View','Views',get_post_views(get_the_ID()),'sakura')/*次阅读*/?> </p>
		<hr>
	</header><!-- .entry-header -->
	<?php } ?>
	<!--<div class="toc-entry-content"><!-- 套嵌目录使用（主要为了支援评论）-->
	<div class="entry-content">
	    <?php
            $getunix = get_post_modified_time('U')-2880;//WP莫名总差8个小时
            $days_old = (((time() - $getunix)/86400));
            $daynum = floor($days_old);
            if ($days_old > 365) {
                echo '<div class="old-message">提醒：本文最后更新于 <a><strong>' . $daynum . '</strong></a> 天前，其中某些信息可能已经过时，请谨慎使用！</div><div class="expired-message">你似乎正在查看一篇很久远的文章。<br>为了你这样的访客，我特地保留了我的历史博文。不要笑话过去的我，用温柔的目光看下去吧。</div>';
            }
        //注意$days_old这个参数单位是天，根据自己需要修改
        ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ondemand' ),
				'after'  => '</div>',
			) );
		?>
		<!--<div class="oshimai"></div>-->
		<!--<h2 style="opacity:0;max-height:0;margin:0">Comments</h2>--><!-- 评论跳转标记 -->
	</div><!-- .entry-content -->
	<?php the_reward(); ?>
	<footer class="post-footer">
	<div class="post-lincenses"><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh"  target="_blank" rel="nofollow"><i class="fa fa-creative-commons" aria-hidden="true"></i> <?php _e('Attribution-NonCommercial-ShareAlike 4.0 International','sakura'); /*知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议*/?></a></div>
	<div class="post-tags">
		<?php if ( has_tag() ) { echo '<i class="iconfont icon-tags"></i> '; the_tags('', ' ', ' ');}?>
	</div>
    <?php get_template_part('layouts/sharelike'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
