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
                
                <?php
                wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container_class' => 'mainMenu' ) );
                ?>
                
				</div>
    				
    			<div class="nav-menu-content container pr0 pl0">
    
    				<div class="col pr0 pl0">
    
    					<div class="row pr0 pl0">
	    					
							<div class="menu-trigger">
								<div class="close-text">Close</div>
								<div class="menu-circle mb1"></div><br>
								<div class="menu-text">Menu</div>
							</div>
    
    					</div>
    
    				</div>
    
    			</div>
    
    		</nav>
    
            <main><!--closes in footer.php-->
