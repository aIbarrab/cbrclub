<?php
	header("Content-type: text/css;");
	
	if( file_exists('../../../../wp-load.php') ) :
		include '../../../../wp-load.php';
	else:
		include '../../../../../wp-load.php';
	endif;
?>

<?php
	// Styles	
	$primary 	= ft_of_get_option('fabthemes_primary_color','#769A38');
	$secondary	= ft_of_get_option('fabthemes_secondary_color','');
	$link 		= ft_of_get_option('fabthemes_link_color','');
	$hover 		= ft_of_get_option('fabthemes_hover_color','');
	
?>
.search-right .search-form .search-submit,
.fab-pagination span,
.main-navigation li:hover > a,
.main-navigation .current_page_item a, .main-navigation .current-menu-item a,
.main-navigation ul ul,
#secondary .widget #side-tab ul#myTab li.active a,
#secondary .widget #side-tab ul#myTab li a:hover,
#secondary .widget .tagcloud a,
#footer-widgets .widget .tagcloud a,
#comments #respond p.form-submit input
{
	background: <?php echo $primary ?>!important;
}

.e-breadcrumbs a:link, .e-breadcrumbs a:visited{
	color:<?php echo $primary ?>;
}
.top-bar span,
h3.section-title span,
#secondary .widget h3.widget-title span,
#footer-widgets .widget h3.footer-widget-title span,
#comments h2.comments-title span,
.page-title span
{
  -webkit-box-shadow: inset 0 -5px 0 0 <?php echo $primary ?>;
  box-shadow: inset 0 -5px 0 0 <?php echo $primary ?>;
}

.search-right .search-form .search-submit,
#secondary .widget #side-tab ul#myTab li.active a,
#secondary .widget #side-tab ul#myTab li a:hover,
#comments #respond p.form-submit input
{
	border-color:<?php echo $primary ?>!important;
}

.main-navigation, #footer-widgets, .site-footer{
	background: <?php echo $secondary ?>;
}



/* Links */

a, .hentry .entry-header .entry-meta span {
	color: <?php echo $link ?>;
}

a:visited {
	color: <?php echo $link ?>;
}

a:hover,
a:focus,
a:active {
	color:<?php echo $hover ?>;
	text-decoration: none;
}


