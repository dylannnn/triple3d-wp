<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" type="image/png">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon@2x.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="Triple 3D, 3D printing">
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,300italic,400' rel='stylesheet' type='text/css'>
		<script>
        // conditionizr.com
        // configure environment tests

        // conditionizr.config({
        //     assets: '<?php echo get_template_directory_uri(); ?>',
        //     tests: {}
        // });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- Navigation -->
	    <nav id="mainNav" class="container-fluid">
	    <div class="navWrapper">
		        <div class="navRow">
			        <div class="logoWrapper">
			            <div class="logo">
			            	<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Triple 3D Logo" width="100px" title="Triple 3D"></a>
			            </div>
			            <div class="mIconContainer">
			            	<a href="#">
			                	<div class="mIcon">
			                		<i class="fa fa-bars"></i>
			                	</div>
			            	</a>
			            </div>
			            <div class="nav">
			            	<?php triple_nav(); ?>
			            </div>
			        </div>
			        <div class="signUp">
		            	<a class="btn signBtn">
						    <span class="btnIcon"><i class="fa fa-user"></i></span>
						    <span class="btnText">Sign In/Sign Up</span>
						</a>
		            </div>
		            <div class="searchFormArea">
		                <?php get_template_part('searchform'); ?>
		            </div>
		        </div>
		    </div>
	    </nav>
