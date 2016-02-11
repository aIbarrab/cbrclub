<?php
function get_news_ticker($tickercat, $count){
	global $post;

	$args = array(
        'posts_per_page' => $count,
        'cat' => $tickercat,
    );

	$loop = new WP_Query( $args );
	echo "<ul>";
	while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<li class="ticker-item">
		<b><?php the_time('M j, Y'); ?></b>  - <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
  	  	
  	</li>

    <?php endwhile;
    echo "</ul>";
    wp_reset_postdata();
}