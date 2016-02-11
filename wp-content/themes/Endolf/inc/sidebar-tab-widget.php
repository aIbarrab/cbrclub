<?php // Creating the widget 
class sidebar_tab_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'sidebar_tab_widget', 
		// Widget name will appear in UI
		__('Sidebar Tabs Widget', 'fabthemes'), 
		// Widget description
		array( 'description' => __( 'Tab widget on the sidebar', 'fabthemes' ), ) 
		);
	}

	public function widget( $args ) {

		echo $args['before_widget']; ?>

		<div id="side-tab">

			<ul id="myTab" class="nav nav-tabs nav-justified">
				<li class="active"> <a data-toggle="tab" href="#latest-tab"> Reciente </a></li>
				<li> <a data-toggle="tab" href="#popular-tab"> Popular </a></li>
				<li> <a data-toggle="tab" href="#comments-tab"> Comentarios </a></li>
			</ul>

			<div id="myTabContent" class="tab-content">

				<div class="tab-pane fade in active" id="latest-tab">

					<?php 
						$count = 5;
						$argos = array( 'posts_per_page' => $count );
						$loop = new WP_Query( $argos );
						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
					<div class="tab-list clearfix">
							<div class="tab-img">
								<?php
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                $thumb_url = $thumb_url_array[0];
								// $thumb = get_post_thumbnail_id();
								// $img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
								// $image = aq_resize( $img_url, 100, 80, true,true,true ); //resize & crop the image
								?>
								<?php if($thumb_url) : ?>
									<a href="<?php the_permalink();?>"> <img src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" /> </a>
								<?php endif; ?>
							</div>
							<div class="tab-entry-content">
								<div class="entry-meta"> <?php the_category(', '); ?> </div>
								<h2><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a> </h2>
							</div>
					</div>

					<?php 
						endwhile;
					    wp_reset_postdata();
					?>

				</div>

				<div class="tab-pane fade" id="popular-tab">

					<?php 
						$count = 5;
						$argos = array( 'posts_per_page' => $count , 'orderby' => 'comment_count');
						$loop = new WP_Query( $argos );
						while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
					<div class="tab-list clearfix">
							<div class="tab-img">
								<?php 
								$thumb = get_post_thumbnail_id();
								$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
								$image = aq_resize( $img_url, 100, 80, true,true,true ); //resize & crop the image
								?>
								<?php if($image) : ?>
									<a href="<?php the_permalink();?>"> <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
								<?php endif; ?>
							</div>
							<div class="tab-entry-content">
								<div class="entry-meta"> <?php the_category(', '); ?> </div>
								<h2><a href="<?php the_permalink();?>"> <?php the_title(); ?> </a> </h2>
							</div>
					</div>

					<?php 
						endwhile;
					    wp_reset_postdata();
					?>

				</div>

				<div class="tab-pane fade" id="comments-tab">

					<?php 
						$args = array('number' => '5');
						$comments = get_comments($args);
						foreach($comments as $comment) : 
						$url = '<h2><a href="'. get_permalink($comment->comment_post_ID).'#comment-'.$comment->comment_ID .'" title="'.$comment->comment_author .' | '.get_the_title($comment->comment_post_ID).'">' . $comment->comment_author . '</a>: </h2>';

						echo('<div class="com-list clearfix">');
							echo('<div class="tab-img">');
							echo get_avatar( $comment, '64' );
							echo('</div>');
							echo $url; 
							comment_excerpt( $comment->comment_ID );
						echo('</div>');

						endforeach;
					?>

				</div>

			</div>
		</div>

	<?php 
		echo $args['after_widget'];
	}

	public function form() { ?>

	<p>	This is the tabbed sidebar widget.	</p>

	<?php
	 }
}

// Register and load the widget
function tab_load_widget() {
	register_widget( 'sidebar_tab_widget' );
}
add_action( 'widgets_init', 'tab_load_widget' );