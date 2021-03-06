<?php 
    if( get_field('hero_type') == 'image' ): 
        $heroImage = get_field('hero_background_image');
    elseif ( get_field('hero_type') == 'color' ): 
        $heroColor = get_field('hero_background_colour');
    endif;
?>

<?php 
	if( get_field('hero_type') !== 'slider'):
    
    	if(is_front_page()): ?>

		    <div class="hero hero__home mb3" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">
			    
			    <div class="wrapper-hero-home">
		
				    <div class="hero__home__content">
					    
					    <div class="logo-hero">
					    	<?php get_template_part('inc/img/27-degrees-logo');?>
					    </div>
						
			        </div>
			        
			        <div id="discover_more" class="hero__home__content description">
				        
				        <div class="wrapper-heading">
					        
					    	<h2 class="heading heading__spaced heading__light pb5"><?php the_field('hero_copy');?></h2>
					    	
				        </div>
				        
				        <div class="circle-background"></div>
				        
					</div>
					
					<div class="scroll-section fixed">
						
						<a href="#discover_more" class="next-section scroll-home">
							<div>Start your adventure</div>
							<i class="fas fa-chevron-down"></i>
						</a>
						
						<a href="#content" class="next-section hidden">
							<i class="fas fa-chevron-down"></i>
						</a>
						
					</div>
					
					<div class="scroll-shadow fixed"></div>
					
			    </div>
			    
			</div>
			
		<?php else: ?>
		
		    <div class="hero <?php the_field( 'hero_height' );?>" style="background-image: url(<?php echo $heroImage['url']; ?>); background-color: <?php echo $heroColor; ?>;">
		                
		    <div class="hero__content">
		        
		        <div class="site-logo">
		            
		            <a href="<?php echo get_home_url(); ?>">
		                
		                <?php get_template_part('inc/img/27-degrees-logo');?>
		            
		            </a>
		        
		        </div>
		  
		        <h1 class="heading heading__xl heading__light font800"><?php the_field( 'hero_heading' );?></h1>
                <h2 class="heading heading__md heading__light font400"><?php the_field( 'hero_sub_heading' );?></h1>
		        <?php 
		            if( have_rows('button') ): 
		            while ( have_rows('button') ) : the_row(); ?>
		            
		        <a href="<?php the_sub_field( 'button_target' );?>" type="button" class="button">
		            
		            <?php the_sub_field( 'button_text' );?>
		        
		        </a>
		        
		        <?php endwhile; endif;?>
		        
		    </div>       
		
		</div>
			

		<?php endif;
			
	endif;
?>

<!--hero-->

<?php 
    if( get_field('hero_type') == 'slider'):
?>

    <div class="hero hero__carousel mb3 <?php the_field( 'hero_height' );?>">

        <div class="owl-carousel owl-theme carousel">

        <?php if( have_rows('hero_slider') ): while( have_rows('hero_slider') ): the_row();   ?>

            <div class="carousel__item" style="background-image: url(<?php the_sub_field( 'slider_background' );?>);">

            <div class="container">
                
               <h1 class="heading heading__xl heading__light font800"><?php the_sub_field( 'slider_header' );?></h1>            
                
               <h2 class="heading heading__sm heading__light"><?php the_sub_field( 'copy' );?></h2> 

                <?php 
                    if( have_rows('slider_button') ): 
                    while ( have_rows('slider_button') ) : the_row(); ?>
                    
                <a href="<?php the_sub_field( 'button_target' );?>" type="button" class="button">
                    
                    <?php the_sub_field( 'button_text' );?>
                
                </a>
                
                <?php endwhile; endif;?>
                
            </div><!--c-->

            </div>

        <?php endwhile; endif;?>

    </div>
     
    </div><!--hero-carousel-->

<?php endif;?>