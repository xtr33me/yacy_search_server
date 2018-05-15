<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	
	<title>
		<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head();?>
	
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<style type="text/css">
			#entry-author-info, .commentlist li, #search, #searchsubmit, button,
			#submit, .submit, #author-link a, input.wpcf7-submit, .post-edit-link,
			.reply a.comment-reply-link, .wp-paginate li a, .wp-paginate li span.page, article .widget, input[type="text"], textarea, .works { behavior:url(<?php bloginfo('stylesheet_directory'); ?>/includes/PIE.php)}
		</style>
	<![endif]-->
	
	<!--[if lt IE 7]>
   		<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish({
				animation:   {opacity:'show', height:'show'}
			});
		});
		
		// last-child
		jQuery(function(){
		   jQuery(".works li:last-child").css("margin","0");
		})
	</script>
</head>
<body <?php body_class(); ?>>
	<div class="main">
		<div class="inner">
			<header>
				<div class="header-bg">
					<div class="container">
						
						<div id="logo">
							<?php if ( is_front_page() || is_home()) echo ('<h1>'); else echo ('<h2>'); if ( get_theme_mod_tm('logo_image', '')) {?>
								<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod_tm('logo_image', '') ?>" title="" alt="" /></a>
							<?php } else {?>
								<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php  bloginfo('title'); ?></a>
							<?php } if ( is_front_page() || is_home() ) echo ('</h1>'); else echo ('</h2>');?>
						</div>
						
						<nav id="primary-nav">
							<?php
								wp_nav_menu( array(
									'container' =>false,
									'menu_class'=> 'sf-menu',
									'menu_id'=> 'topnav',
									'echo' => true,
									'before' => '',
									'after' => '',
									'link_before' => '<span>',
									'link_after' => '</span>',
									'depth' => 0,
									'theme_location' => 'header_menu'
								));
							?>
						</nav><!--nav-->
						
					</div><!--.container-->
				</div>
			</header>
			
			<?php if ( is_home() || is_front_page() ) { ?>
				<div id="slider-wrapper">
					<div class="slider-bg"><?php if ( ! dynamic_sidebar( 'Header' ) ) :?><!-- Wigitized Header --><?php endif;?></div>
				</div>
<div  class="widget container">
				<iframe name="target3"
       src="https://cubefectionyacy.herokuapp.com/yacyinteractive.html?display=2"
       width="100%"
       height="180"
       frameborder="0"
       scrolling="auto"
       id="target3"> 
      </iframe>  
</div>
			<?php } else {
				if(function_exists('breadcrumb_trail')) {
					$breadcrumb = array(
						'separator' => '&raquo;',
						'before' => false,
						'after' => false,
						'front_page' => true,
						'show_home' => __('Home'),
						'singular_{your_custom_post_type}_taxonomy' => 'your_custom_taxonomy',
						'echo' => true,
					);
					breadcrumb_trail($breadcrumb);
				}
			} ?>