<?php
/**
 * The template for displaying homepage.
   Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package fabthemes
 */

get_header(); ?>

<div class="col-md-12">
    <div class="row wrapper">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="top">
                        <?php $slidetitle = ft_of_get_option('fabthemes_slide_title','Featured'); ?>
                        <h3 class="section-title"><span><?php _e( $slidetitle , 'fabthemes' ); ?></span></h3>
                        <div id="slider-box" class="flexslider">
                            <?php $slidecount = ft_of_get_option('fabthemes_slide_count','2'); ?>
                            <?php $slidecat = ft_of_get_option('fabthemes_slide_cat','7'); ?>
                            <?php get_slide_items($slidecat, $slidecount); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php $recent_title = ft_of_get_option('fabthemes_latest_title','Latest'); ?>
                    <h3 class="section-title"><span><?php _e( $recent_title, 'fabthemes' ); ?></span></h3>
                    <div class="row middleAd">
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
                    <div class="latest-entries">
                        <div class="row">

                            <?php
                            $count = ft_of_get_option('fabthemes_latest_count','6');
                            $args = array( 'posts_per_page' => $count );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                                ?>

                                <div class="col-md-6 latest-entry">
                                    <?php
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                    $thumb_url = $thumb_url_array[0];
                                    // $thumb = get_post_thumbnail_id();
                                    // $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
                                    // $image = aq_resize( $img_url, 960, 460, true,true,true ); //resize & crop the image
                                    ?>
                                    <?php if($thumb_url) : ?>
                                        <a href="<?php the_permalink();?>"> <img src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" /> </a>
                                    <?php endif; ?>

                                    <div class="latest-entry-content">
                                        <h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
                                        <div class="entry-meta">
                                            <?php the_category(', '); ?>
                                        </div>
                                        <p><?php echo excerpt(25); ?> </p>
                                    </div>
                                </div>

                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <?php dynamic_sidebar( 'homepage' ); ?>
                    <div class="row middleAd">
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
                    <?php $promocat = ft_of_get_option('fabthemes_promo_cat','9'); ?>
                    <?php get_promo_items( $promocat); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
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