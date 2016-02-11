<?php
function theme_guide(){
add_theme_page( 'Theme guide','Theme documentation','edit_themes', 'theme-documentation', 'fabthemes_theme_guide');
}
add_action('admin_menu', 'theme_guide');

function fabthemes_theme_guide(){ ?>

		
<div id="welcome-panel" class="about-wrap">
<div class="container">

<div class="row">

	<div class="col3 col">
		<img src="<?php echo get_template_directory_uri() ?>/screenshot.png" />
	</div>
	<div class="col34 col">
		<h2>Welcome to <?php echo wp_get_theme(); ?> WordPress theme!</h2>
		<p> <?php echo wp_get_theme(); ?> is a free premium responsive WordPress theme from fabthemes.com. This theme is built 
			on <b>Bootstrap 3</b> framework. This is a News portal, Magazine type theme. The theme comes with custom homepage, custom widgets, custom menu and theme option page. </p>
	</div>

</div>


<div class="row">

	<div class="col col1">
		<h3>Theme setup</h3>

		<h4> 1. Installing theme</h4>

		<p>Download the theme zip file from Fabthemes.com. Open your WordPress admin panel and go to <b> Appearence > Themes</b> . Click <b> Add new </b> and then <b> Upload the theme </b> to your themes directory and activate it.  </p>

		<h4> 2. Setting up Homepage</h4>

		<p> After theme activation, go to the Pages and create a new page named "Home". In the page attribute section you can find a dropdown box for page templates. Select the "Home" template from the dropdown list. Leave the page content section empty and publish the page. </p>
		<p>Go to settings > Reading > Front page displays. Select the "static page" option and for front page select "Home" from the dropdown page list.</p>

		<h4> 3. Setting up Blog page </h4>
		<p> Create a new page called Blog. Go to settings > Reading > Front page displays. Select "Blog" page front the dropdown list for posts page. </p>
		
		<h4> 4. Import sample data</h4>
		<p> Sample xml data is available for the theme. You can use it to test run the theme before you post your actual data. </p>

	</div>

</div>

<div class="row">
	<div class="col col1">
		<h3> Custom widgets and widget areas </h3>
		<p> The theme has 3 widget areas. 
		<ol>
			<li> Sidebar</li>
			<li> Footer </li>
			<li> Homepage </li>
		</ol>
		</p>

		<p> The theme comes with custom widgets
		<dl>
			<dt>Category News widget</dt>
			<dd>This widget should be used on the Homepage widget area. It displays 5 recent posts from the slected category. The first post item will be styled differently. </dd>
			<dt>News gallery widget</dt>
			<dd>This widget should be used on the Homepage widget area. It displays 4 latest posts from the selected category. Ideal for post items with iimage galleries.
			</dd>
			<dt>Sidebar tabs widget</dt>
			<dd>This is sidedar custom widget. This will display a tabbed widget with latest posts, popular posts and recent comments.</dd>
		</dl>
		</p>
	</div>
</div>

<div class="row">

	<div class="col col1"> 
		<h3>Theme Options </h3>
		<p> Theme comes with an options panel to customize its settings. </p>
	 </div>
	 <div class="col col1">
	 	<h4> 1. News Ticker section</h4>
	 	<p> This is a news ticker section above the header. It shows articles from a selected category in the form of an automated ticker. </p>
	 	<p> You have the option to select a caegory and number of posts to show on the ticker.</p>
	 </div>
	 <div class="col col1">
	 	<h4> 2. Features News</h4>
	 	<p> This is a slideshow secton on the homepage. You can give this section a custom title,  select a category and number of items to display.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 3. Promoted articles </h4>
	 	<p> This is a section of 3 articles located to the right side of the featured slider. This can be used to showcase certin articles as promoted articles. You have the option to give a custom title and select a category for this.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 4. Latest news section </h4>
	 	<p> There is a blog section on the homepage, that lists the latest blog entries. You can customize the title and the number of posts for this section.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 5. Custom styling</h4>
	 	<p> Use this options to color customize your theme.</p>
	 </div>

	 <div class="col col1">
	 	<h4> 6. Banner settings </h4>
	 	<p> Use this options to customize the banner ads on the sidebar.</p>
	 </div>

</div>

<div class="row">
	<div class="col col1">
			<?php echo file_get_contents(dirname(__FILE__) . '/FT/license-html.php'); ?>
	</div>
</div>


</div>
</div>



<style media="screen" type="text/css">

	.container{	width: 960px;}
	.row { background: #fff;  margin-bottom: 20px; padding: 20px 0px;}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after {  clear: both;	}
	.row:before, .row:after {  display: table;  content: " ";}
	.row:after { clear: both; }
	.col{ padding:0px 20px 0px 20px;  position:relative; 	 }
	.col1{ width: 920px;}
	.col2{ width: 440px; float: left;}
	.col3{ width: 280px; float: left;}
	.col34{ width: 600px; float: left;}
	.col h2{ font-weight: 700; font-size: 30px;}
	.col h3{ font-weight: 300; font-size: 24px; margin:0px 0px 20px 0px; background: #333; color:#fff; padding: 10px; }
	.col h4{ font-weight: bold; font-size: 16px; margin:10px 0px;}
	.clear{clear: both;}
	.red{color: red;}
	dl{margin-bottom: 20px;}
	dl dt{font-weight: 800;}
	dl dd{margin:10px 0px 20px 0px}
	
</style>	

<?php }
