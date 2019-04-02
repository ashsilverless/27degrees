<?php
/**
 * Template Name: Home Page
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

<div id="content"  class="container pt1">

<!-- ******************* Text Block ******************* -->

<div class="text-block mt5 mb5">

    <div class="row">

        <div class="col-sm-6">
            
            <h2 class="heading heading__md mb1 slide-up"><?php the_field('text_block_heading');?></h2>
            
            <?php get_template_part('template-parts/text', 'block');?>
            
        </div>

        <div class="col-sm-6">
        
        </div>
        
    </div><!--r-->

</div>

<!-- ******************* Text Block END ******************* -->      

<!-- ******************* CTA Block ******************* -->
</div><!--c-->
<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->

</div><!--c-->

<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
 
<?php get_footer(); ?>