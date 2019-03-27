<?php
/**
 * Template Name: Countries
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

<!-- ******************* Text Block ******************* -->

<div class="text-block">

    <div class="row">

        <div class="col-6">
            
            <h2 class="heading heading__md mb1"><?php the_field('text_block_heading');?></h2>
            
            <?php get_template_part('template-parts/text', 'block');?>
            
        </div>

        <div class="col-6">

        ADDITIONAL CONTENT (Where applicable)
        
        </div>
        
    </div><!--r-->

</div>

<!-- ******************* Text Block END ******************* -->

<!-- ******************* Leaders Block ******************* -->

LEADERS

<!-- ******************* Leaders END ******************* -->

<!-- ******************* CTA Block ******************* -->
</div><!--c-->
<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->


</div><!--c-->

<?php get_footer();?>