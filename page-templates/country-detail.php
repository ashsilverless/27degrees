<?php
/**
 * Template Name: Country - DETAIL
 *
 * @package Silverless
 */
get_header();?>

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
SUB MENU HERE
<!-- ******************* Text Block ******************* -->

<?php if( get_field('text_block_heading') ): ?>

<div class="text-block mt5 mb5">

    <h2 class="heading heading__md mb1"><?php the_field('text_block_heading');?></h2>

    <div class="row">

        <div class="col-6">
                        
            <?php get_template_part('template-parts/text', 'block');?>
            
        </div>

        <div class="col-sm-5 offset-sm-1">

            <?php if( get_field('text_block_supporting_list') ): ?>
            
        <?php 
            if( have_rows('text_block_supporting_list') ): ?>
            
            <ul class="features font200">
                
            <?php while ( have_rows('text_block_supporting_list') ) : the_row(); ?>
            
            
            
            <li><?php the_sub_field( 'list_item' );?></li> 
            
            
            <?php endwhile;?>
            
            </ul>
            
            <?php endif;?>
            
            <?php endif; ?>
        
        </div>
        
    </div><!--r-->

</div>

<?php endif;?>

<!-- ******************* Text Block END ******************* -->

<!-- ******************* Full Width Image Block ******************* -->

<?php if( get_field('image_background_image') ): ?>

<?php get_template_part('template-parts/fullwidth', 'image');?>

<?php endif;?>

<!-- ******************* Full Width Image END ******************* -->

<!-- ******************* Climate Block ******************* -->

<?php if( get_field('climate_heading') ): ?>

<div class="mb5">
    
    CLIMATE BLOCK

</div>

<?php endif;?>

<!-- ******************* Climate END ******************* -->


<!-- ******************* Gallery Block ******************* -->

<?php if( get_field('single_gallery') ): ?>

<?php get_template_part('template-parts/gallery');?>

<?php endif;?>

<!-- ******************* Gallery END ******************* -->

<!-- ******************* CTA Block ******************* -->
</div><!--c-->

<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->

<div class="container mt5">

<!-- ******************* Leaders Block ******************* -->

<?php get_template_part('template-parts/leaders');?>

<!-- ******************* Leaders END ******************* -->

</div><!--c-->

<?php get_footer();?>