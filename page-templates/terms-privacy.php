<?php
/**
 * Template Name: Terms and Privacy
 *
 * @package Silverless
 */
get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ******************* Hero Content ******************* -->

<?php if( get_field('hero_height') == 'd-none' ): ?>

    <div class="content no-hero">    
        
    <?php else:?>

    <div class="content has-hero">

<?php endif;?>

<?php if( get_field('hero_background_image') ): 

    get_template_part('template-parts/hero');?>

<?php endif;?>

<!-- ******************* Hero Content END ******************* -->

<div class="container">

<!-- ******************* Text Block ******************* -->

<div class="text-block pt5 pb5">

    <div class="row">

        <div class="col-12">
            
            <?php the_content($post->ID);?>
            
        </div>

        
        <div class="col-6">
    
        </div>
        
    </div><!--r-->

</div>

<!-- ******************* CTA Block ******************* -->
</div><!--c-->
<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->

</div><!--c-->

<?php endwhile; endif; ?>	

<?php get_footer();?>