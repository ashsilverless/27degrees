<?php
/**
 * Header
 *
 * @package Silverless
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
    <head>
    
	<meta charset="UTF-8">
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>27 Degrees South</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"><!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><!-- Font Awesome CDN-->
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	
	<?php wp_head(); ?>
	
</head>

    <body <?php body_class(); ?>>
    
    	<div id="page" class="site-wrapper">
    
    		<nav id="nav">

	    		<div class="nav-menu">
 						
                    <?php $mainLogo = get_field('logo', 'options');?>
                    
                    
                    <div class="nav-menu__logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo $mainLogo['url'];?>"/>
                        </a>
                    </div>        
                    
                    
                    <?php
                    wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container_class' => 'mainMenu' ) );
                    ?>

                    <?php if( have_rows('social_links', 'option') ): ?>
                    
                        <div class="social">
                        
                        <?php while( have_rows('social_links', 'option') ): the_row(); ?>
                        
                            <a href="<?php the_sub_field('page_link'); ?>"><i class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
                        
                        <?php endwhile; ?>
                        
                        </div>
                    
                    <?php endif; ?>
                
				</div>
    				
    			<div class="nav-menu-content container">
	    			
					<div class="menu-trigger">
						
						<div class="close-text">Close</div>
						
						<?php $smallSiteLogo = get_field('small_logo', 'options');?>
						<div class="small-logo" style="background-image: url(<?php echo $smallSiteLogo['url']; ?>);"></div>
						
						<div class="menu-circle mb1"></div>
						
						<div class="menu-text">Menu</div>
						
					</div>
    
    			</div>
    
    		</nav>
    
            <main><!--closes in footer.php-->
