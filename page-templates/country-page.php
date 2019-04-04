<?php
/**
 * Template Name: Country Page
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

<div class="text-block mt5 mb5">

    <div class="row">

        <div class="col-sm-6">
            
            <h2 class="heading heading__md mb1"><?php the_field('text_block_heading');?></h2>
            
            <?php get_template_part('template-parts/text', 'block');?>
            
        </div>

        <div class="col-sm-6">
        
        </div>
        
    </div><!--r-->

</div>

<!-- ******************* Safari Block (Repeater) ******************* -->

    <div class="safari-block">

        <?php if( have_rows('safari_safari') ): 
        while ( have_rows('safari_safari') ) : the_row(); ?>   
    
    </div><!--r-->
    </div><!--c-->

        <?php $fullwidthImage = get_sub_field('image');?>
        
        <div class="fullwidth-image" style="background-image: url(<?php echo $fullwidthImage['url']; ?>);"></div>

        <div class="container"> 
                
            <div class="row pb5 text-block pt3">
                
                <?php set_query_var('path', 1); get_template_part('template-parts/path-image');?>
                
                <div class="col-6">
            
                    <h2 class="heading heading__md mb1"><?php the_sub_field('heading');?>
                        <span><?php the_sub_field('sub_heading');?></span>
                    </h2>
                                      
                    <p><?php the_sub_field( 'text' );?></p>
        
                    <h4 class="heading heading__sm mb1">Experience Level</h2>            
                    
                    <div class="experience-level <?php the_sub_field('experience_level');?> mt2 mb2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
        
                    <a href="<?php the_sub_field( 'button_target' );?>" type="button" class="button">
                    
                    <?php the_sub_field( 'button_text' );?>
                
                    </a>
        
                </div><!--col-->
        
            </div><!--r--> 
               
            <?php endwhile; endif;?>
           
        </div>

<!-- ******************* Safari Block (Repeater) END ******************* -->

<!-- ******************* CTA Block ******************* -->
</div><!--c-->
<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->

</div><!--c-->

<?php get_footer();?>