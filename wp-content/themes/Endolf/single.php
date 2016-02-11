<?php
/**
 * The template for displaying all single posts.
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <?php the_breadcrumb(); ?>
        </div>
    </div>
    <div class="row wrapper">
        <div class="col-md-8">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'single' ); ?>

                        <?php fabthemes_post_nav(); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <?php $promotitle = ft_of_get_option('fabthemes_promo_title','Promoted'); ?>
                    <h3 class="section-title"><span><?php _e( $promotitle, 'fabthemes' ); ?></span></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- MiddleResponsiveAd -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-5532357103461788"
                                 data-ad-slot="5517270559"
                                 data-ad-format="auto"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>