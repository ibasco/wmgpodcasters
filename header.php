<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 Modified from the original version-Isabella Basco
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>

<link href="/wp-content/themes/melos-child/style.css" rel="stylesheet" type="text/css" media="all"/>

<?php thinkup_hook_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/lib/scripts/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?><?php thinkup_bodystyle(); ?>>
<?php /* Body hook */ thinkup_hook_bodyhtml(); ?>
<div id="body-core" class="hfeed site">

	<header>
	<div id="site-header">

		<?php if ( get_header_image() ) : ?>
			<div class="custom-header"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></div>
		<?php endif; // End header image check. ?>
	
		<div id="pre-header">
		<div class="wrap-safari">
		<div id="pre-header-core" class="main-navigation">
  
			<?php /* Social Media Icons */ thinkup_input_socialmediaheaderpre(); ?>

			<?php /* Pre Header Search */ thinkup_input_preheadersearch(); ?>

			<?php if ( has_nav_menu( 'pre_header_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu' ) ); ?>
			<?php endif; ?>

		</div>
		</div>
		</div>
		<!-- #pre-header -->

		<?php /* Add header - above slider */ thinkup_input_headerlocationabove(); ?>

		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2_above(); ?>

		<?php /* Custom Slider */ thinkup_input_sliderhome(); ?>

		<?php /* Custom Intro - Above */ thinkup_custom_introabove(); ?>

		<?php /* Add header - above slider */ thinkup_input_headerlocationbelow(); ?>

		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2_below(); ?>

		<?php /* Custom Intro - Below */ thinkup_custom_introbelow(); ?>

	</div>


	</header>
	<!-- header -->

	<?php /*  Call To Action - Intro */ thinkup_input_ctaintro(); ?>
	<?php /*  Pre-Designed HomePage Content */ thinkup_input_homepagesection(); ?>

	<div id="content">
	<div id="content-core">

		<div id="main">
		<div id="main-core">

		

		

		
		<div class="w3-content w3-display-container">
 

  
  <p></p>
</div>
<style>
h1.site-title, h1.page-title, #section-home-inner, div#section-home {
	display:none !important

}

#logo{
	background-image: url(/wp-content/themes/melos-child/WMG.jpg); 
	background-size: 100%; 
    height: 100px;
    width: 300px;
    display: inline-block;
}

.podcast-description{
	font-size:20px;
	color: darkblue;
}

.podcastdetail{
	font-size:18px;
	color: darkblue; 
}

.WMGPodcastPolicySeries{
	font-size:20px;
	color:darkblue;

}

.podcastslideshow{
	font-size:18px;
	color:darkblue;
}
.wmg{
	float:left; 
	margin-right:20px;
	width:23%;
}
</style>

<script>
var myIndex = 0;

function submitcontact(){
	var subject=document.getElementById("subject").value
	var name=document.getElementById("Your name").value
	window.location.href="mailto:ibasco@washingtonmedia.com?Subject="+subject
}
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 7000); // Change image every 7 seconds
}
window.onload=carousel;
</script> 



