<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
        	
        	<?php if(is_front_page()) { ?>
        		<div class="slider">
        	<?php } ?>

					<div id="mainnav">

						<div class="wrap" >
							
							<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
							<h1 id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri() ?>/library/images/logo.png">
<?php /* bloginfo('name'); */ ?></a></h1>
							
							<?php get_search_form(); ?>

							<nav role="navigation">
								<?php bones_main_nav(); ?>
							</nav>

						</div>

			</div>

			<?php if(is_front_page()) { ?>

				<header class="header" role="banner">
				
					<div id="inner-header" class="wrap clearfix">

						<div class="slogan text-center">
							<h1>Things just got a whole lot easier.</h1>
							<h2>Our app lets you finish the job even faster.</h2>
						</div>
						
						<div class="aligncenter">
							<img class="aligncenter" src="<?php echo get_stylesheet_directory_uri() ?>/library/images/browsershot1.png" width="855" height="294">
						</div>

					</div> <!-- end #inner-header -->
				
				</header> <!-- end header -->
				</div> <!-- end slider -->
			<?php } ?>

				<?php if(is_front_page()) { ?>
			
					<script type="text/javascript">
			    		jQuery(".slider").backstretch([
			    			"<?php echo get_stylesheet_directory_uri() ?>/library/images/bg1.jpg",
			    			"<?php echo get_stylesheet_directory_uri() ?>/library/images/bg2.jpg",
			    			],{
			    				fade: 900,
            					duration: 5000
			    			});

					</script>
            	
        		<?php } ?>
