<?php get_header();  
/*
/   Default Page Template
/   @package Silverless
*/ 
?>

<?php if( get_field('hero_height') == 'd-none' ): ?>

    <div class="content no-hero">    
        
    <?php else:?>

    <div class="content has-hero">

<?php endif;?>

<?php if( get_field('hero_background_image') ): 

    get_template_part('template-parts/hero');?>

<?php endif;?>

    <div class="container">
    
        <div class="row mb5 w75 font400">

            cdd
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
    
        </div>
      
    </div><!--c-->

</div><!--content-->
 
<?php get_footer(); ?>