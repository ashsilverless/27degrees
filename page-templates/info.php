<?php
/**
 * Template Name: Info
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

<!-- ******************* Text Block END ******************* -->

<!-- ******************* Full Width Image Block ******************* -->

<?php get_template_part('template-parts/fullwidth', 'image');?>

<!-- ******************* Full Width Image END ******************* -->

<!-- ******************* Text 2 Block ******************* -->
<div class="text-block mt5 mb3">

    <div class="row">

        <div class="col-sm-6">

            <h2 class="heading heading__md mb1"><?php the_field('text_block2_text_block_heading');?></h2>
            
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'text_block2_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('text_block2_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('text_block2_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('text_block2_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>

                <?php if( get_field('text_block2_text_block_experience_level')): ?>
            
                    <div class="experience-level <?php the_field('text_block2_text_block_experience_level');?> mt2 mb2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
            
                <?php endif;?>

                <?php if( get_field('text_block2_button_query') == 'true' ): ?>
            
                    <a href="<?php the_field( 'text_block2_button_target' );?>" class="button">
                        
                        <?php the_field( 'text_block2_button_text' );?>
                    
                    </a>
            
                <?php endif;?>
                
            </div>
        
        </div>

        <div class="col-sm-6">
        
        </div>
        
    </div><!--r-->

</div>

<!-- ******************* Text 2 Block END ******************* -->

<!-- ******************* FAQ Block ******************* -->

<div class="row mb5">

    <div class="col-sm-6">

        <?php get_template_part('template-parts/toggle');?>

    </div>

</div><!--r-->

<!-- ******************* FAQ Block END ******************* -->

<!-- ******************* Full Width Image 2 Block ******************* -->

</div><!--c-->

    <?php $fullwidthImage = get_field('image_block2_background_image');?>
    
    <div class="fullwidth-image" style="background-image: url(<?php echo $fullwidthImage['url']; ?>);"></div>

<div class="container">

<!-- ******************* Full Width Image 2 END ******************* -->

<!-- ******************* Text 3 Block ******************* -->
<div class="text-block mt5 mb2">

    <div class="row">

        <div class="col-sm-6">

            <h2 class="heading heading__md mb1"><?php the_field('text_block3_text_block_heading');?></h2>
            
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'text_block3_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('text_block3_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('text_block3_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('text_block3_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>

                <?php if( get_field('text_block3_text_block_experience_level')): ?>
            
                    <div class="experience-level <?php the_field('text_block3_text_block_experience_level');?> mt2 mb2">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
            
                <?php endif;?>
            
                <?php if( get_field('text_block3_button_query') == 'true' ): ?>
            
                    <a href="<?php the_field( 'text_block3_button_target' );?>" type="button" class="button">
                        
                        <?php the_field( 'text_block3_button_text' );?>
                    
                    </a>
            
                <?php endif;?>
                
            </div>
            
        </div>

        <div class="col-sm-6">
        
        </div>
        
    </div><!--r-->

</div>
<!-- ******************* Text Block END ******************* -->

<?php 
    if( have_rows('list') ): ?>
    
    <ul class="list mb5">
        
    <?php while ( have_rows('list') ) : the_row(); ?>
    
        <li><?php the_sub_field('item');?></li>

    <?php endwhile; ?>

    </ul>

<?php endif; ?>

<!-- ******************* CTA Block ******************* -->
</div><!--c-->
<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->


</div><!--c-->

<?php get_footer();?>