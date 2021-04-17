<?php
 
/**
 * Template Name: 说说/微语
 */
 
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="cbp_shuoshuo">
                <?php
                	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts("post_type=shuoshuo & post_status=publish & 
                    				posts_per_page=10 & paged=$paged");
                    if (have_posts()) : ?>
                        <ul class="cbp_tmtimeline" id="dynamic_ul">
                            <?php
                                while (have_posts()) : the_post(); ?>
                                    <li class="dynamic_li">
                                        <span class="shuoshuo_author_img"><img src="<?php echo get_avatar_profile_url(get_the_author_meta('ID')); ?>" class="avatar avatar-48" width="48" height="48"></span>
                                        <a class="cbp_tmlabel">
                                        <p></p>
                                        <p><?php the_content(); ?></p>
                                        <p></p>
                                        <p class="shuoshuo_time"><i class="fa fa-clock-o"></i> <?php the_time('Y年 n月 j日 G:i'); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                        </ul>
                    <?php
                    else : ?>
                        <h3 style="text-align: center;">你还没有发表说说噢！</h3>
                        <p style="text-align: center;">赶快去发表你的第一条说说心情吧！</p>
                    <?php
                    endif; ?>
            </div>
        </main><!-- #main -->
        <div id="pagination_dynamic"><?php next_posts_link(' Previous'); ?></div>
    </div><!-- #primary -->
    <script src="https://cdn.jsdelivr.net/gh/fz6m/Private-web@2.0.0/js/custom/dynamic.min.js"></script>
<?php
get_footer();
 
