<?php
function FT_OP_update()
{
	$settings = get_option('ft_op');
	$settings['id'] = 'ft_' . FT_scope::tool()->optionsName;
	update_option('ft_op', $settings);
}

function FT_OP_options()
{
	
	// Test data
	$test_array = array("1" => "Tutorials","2" => "Posts");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
	
		// Pull all the pages into an array
	$options_slider = array();  
	$options_slider_obj = get_posts('post_type=custom_slider');
	$options_slider[''] = 'Select a slider:';
	foreach ($options_slider_obj as $post) {
    	$options_slider[$post->ID] = $post->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/images/';
		
	$options = array();
	
	
																	
	
	$options[] = array( "name" => "Homepage",
						"type" => "heading");	
						
	$options[] = array( "name" => "News ticker Category",
						"desc" => "Select a category for the news ticker above header",
						"id"   => "fabthemes_ticker_cat",
						"type" => "select",
						"options" => $options_categories);		
						
	$options[] = array( "name" => "News ticker Count",
						"desc" => "Enter the number of posts on ticker",
						"id"   => "fabthemes_ticker_count",
						"std"  => "5",
						"type" => "text");		

	$options[] = array( "name" => "Featured slider title",
						"desc" => "Enter the title for featured slider section",
						"id"   => "fabthemes_slide_title",
						"std"  => "Featured",
						"type" => "text");		

	$options[] = array( "name" => "Featured slider Category",
						"desc" => "Select a category for the featured news slider",
						"id"   => "fabthemes_slide_cat",
						"type" => "select",
						"options" => $options_categories);		
						
	$options[] = array( "name" => "Featured slider Count",
						"desc" => "Enter the number of posts on slider",
						"id"   => "fabthemes_slide_count",
						"std"  => "5",
						"type" => "text");		

	$options[] = array( "name" => "Promoted posts section title",
						"desc" => "Enter the title for promoted news section",
						"id"   => "fabthemes_promo_title",
						"std"  => "Promoted",
						"type" => "text");		

	$options[] = array( "name" => "Promoted posts Category",
						"desc" => "Select a category for the promoted news items",
						"id"   => "fabthemes_promo_cat",
						"type" => "select",
						"options" => $options_categories);	

	$options[] = array( "name" => "Latest posts section title",
						"desc" => "Enter the title for latest posts section",
						"id"   => "fabthemes_latest_title",
						"std"  => "Latest",
						"type" => "text");		

	$options[] = array( "name" => "Number of latest posts",
						"desc" => "Enter the number of recent posts on the homepage",
						"id"   => "fabthemes_latest_count",
						"std"  => "5",
						"type" => "text");		




	$options[] = array( "name" => "Style Settings",
						"type" => "heading");		


	$options[] = array( "name" => "Main Color scheme",
						"desc" => "Theme main color",
						"id"   => "fabthemes_primary_color",
						"std"  => "",
						"type" => "color");
						

	$options[] = array( "name" => "Accent color",
						"desc" => "Secondary accent color",
						"id"   => "fabthemes_secondary_color",
						"std"  => "",
						"type" => "color");						
						
					
	$options[] = array( "name" => "Link color",
						"desc" => "Link color",
						"id"   => "fabthemes_link_color",
						"std"  => "",
						"type" => "color");		
									
	$options[] = array( "name" => "Link hover color",
						"desc" => "Link color on hover",
						"id"   => "fabthemes_hover_color",
						"std"  => "",
						"type" => "color");							
						
					

	if (file_exists(dirname(__FILE__) . '/FT/options/banners.php'))
			include ('FT/options/banners.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/colors.php'))
			include ('FT/options/colors.php');

	if (file_exists(dirname(__FILE__) . '/FT/options/common.php'))
			include ('FT/options/common.php');

	return $options;
}