<?php
/**
 * Template Name: Safari Page
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

<?php if( get_field( 'sub_menu' ) ) : ?>

    <div class="sub-menu mb3">
        
		<?php the_field( 'sub_menu' ); ?>

    </div>
    
<?php endif; ?>

<!-- ******************* Tab Controls ******************* -->
<div class="sub-menu mb3">
    <ul>
        <li class="tablink active" onclick="openPage('overview')" id="defaultOpen">Overview</li>
        <li class="tablink" onclick="openPage('riding')">Riding</li>
        <li class="tablink" onclick="openPage('accom')">Accommodation</li>
        <li class="tablink" onclick="openPage('gallery')">Gallery</li>
        <li class="tablink" onclick="openPage('location')">Location</li>
    </ul>
</div>
<!-- ******************* Tab Controls END ******************* -->

<div><!--wrap all tab content to enable sub menu to remain sticky-->

<!-- ******************* Overview Tab ******************* -->

<div id="overview" class="overview-tab tabcontent">

    <div class="text-block mb5">

    <h2 class="heading heading__md mb1"><?php the_field('overview_text_block_heading');?></h2>

    <div class="row">

        <div class="col-6">
                        
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'overview_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('overview_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('overview_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('overview_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>
                
            </div>
            
            <?php if( get_field('overview_logo_accent') == 'true' ): ?>
            
            <?php $accentLogo = get_field('small_logo', 'options');?>
            
                <div class="text-block__accent" style="background-image: url(<?php echo $accentLogo['url']; ?>);"></div>
            
            <?php endif;?>
            
        </div>

        <div class="col-sm-5 offset-sm-1">

        <?php if( get_field('overview_text_block_supporting_list') ): ?>
            
        <?php if( have_rows('overview_text_block_supporting_list') ): ?>
            
            <ul class="features font200">
                
                <?php while ( have_rows('overview_text_block_supporting_list') ) : the_row(); ?>
    
                    <li><?php the_sub_field( 'list_item' );?></li> 
    
                <?php endwhile;?>
            
            </ul>
            
        <?php endif;?>
            
        <?php endif; ?>
        
        </div>
        
    </div><!--r-->

</div>

</div>

<!-- ******************* Overview Tab END ******************* -->


<!-- ******************* Riding Tab ******************* -->

<div id="riding" class="riding-tab tabcontent">

    <div class="text-block mb5">

    <h2 class="heading heading__md mb1"><?php the_field('riding_text_block_heading');?></h2>

    <div class="row">

        <div class="col-6">
                        
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'riding_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('riding_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('riding_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('riding_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>
                
            </div>
            
            <?php if( get_field('riding_logo_accent') == 'true' ): ?>
            
            <?php $accentLogo = get_field('small_logo', 'options');?>
            
                <div class="text-block__accent" style="background-image: url(<?php echo $accentLogo['url']; ?>);"></div>
            
            <?php endif;?>
            
        </div>

        <div class="col-sm-5 offset-sm-1">

        <?php if( get_field('riding_text_block_supporting_list') ): ?>
            
        <?php if( have_rows('riding_text_block_supporting_list') ): ?>
            
            <ul class="features font200">
                
                <?php while ( have_rows('riding_text_block_supporting_list') ) : the_row(); ?>
    
                    <li><?php the_sub_field( 'list_item' );?></li> 
    
                <?php endwhile;?>
            
            </ul>
            
        <?php endif;?>
            
        <?php endif; ?>
        
        </div>
        
    </div><!--r-->

</div>

</div>

<!-- ******************* Riding Tab END ******************* -->

<!-- ******************* Accommodation Tab ******************* -->

<div id="accom" class="accommodation-tab tabcontent">

    <div class="text-block mb5">

    <h2 class="heading heading__md mb1"><?php the_field('accom_text_block_heading');?></h2>

    <div class="row">

        <div class="col-6">
                        
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'accom_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('accom_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('accom_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('accom_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>
                
            </div>
            
            <?php if( get_field('accom_logo_accent') == 'true' ): ?>
            
            <?php $accentLogo = get_field('small_logo', 'options');?>
            
                <div class="text-block__accent" style="background-image: url(<?php echo $accentLogo['url']; ?>);"></div>
            
            <?php endif;?>
            
        </div>

        <div class="col-sm-5 offset-sm-1">

        <?php if( get_field('accom_text_block_supporting_list') ): ?>
            
        <?php if( have_rows('accom_text_block_supporting_list') ): ?>
            
            <ul class="features font200">
                
                <?php while ( have_rows('accom_text_block_supporting_list') ) : the_row(); ?>
    
                    <li><?php the_sub_field( 'list_item' );?></li> 
    
                <?php endwhile;?>
            
            </ul>
            
        <?php endif;?>
            
        <?php endif; ?>
        
        </div>
        
    </div><!--r-->

    </div>

    <div class="accom-block">

        <?php if( have_rows('accm_content') ): 
        while ( have_rows('accm_content') ) : the_row(); ?>   
        
        <h2 class="heading heading__sm mb1"><?php the_sub_field('heading');?></h2>
        
        <div class="row mb3">
        
            <div class="col-6">
    
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_sub_field( 'text' );?></p>
                
                </div>
                
                <?php if( get_sub_field('text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_sub_field('text_more'); ?>          
                
                </div>    
                
                <?php if( get_sub_field('text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>
                
            </div><!--expanding-->
            
        </div><!--col-->

            <div class="col-6">
        
            <?php
            $images = get_sub_field('gallery');
            if( $images ): ?>
        
                <div class="gallery">
        
                    <?php foreach( $images as $image ): ?>
        
                    <a href="<?php echo $image['url']; ?>" class="lightbox-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"><!--<?php echo $image['caption']; ?>--></a>
        
                    <?php endforeach; ?>
        
                </div>
        
            <?php endif; ?>

            </div>

       </div><!--r--> 
       
    <?php endwhile; endif;?>
   
    </div>

</div>

<!-- ******************* Accommodation Tab END ******************* -->

<!-- ******************* Gallery Tab ******************* -->

<div id="gallery" class="gallery-tab tabcontent">

<?php get_template_part('template-parts/gallery');?>

</div>

<!-- ******************* Gallery Tab END ******************* -->

<!-- ******************* Location Tab ******************* -->

<div id="location" class="location-tab tabcontent">

<div class="container">
    
    <div class="row">

    <div class="text-block mb5">

    <h2 class="heading heading__md mb1"><?php the_field('loc_text_block_heading');?></h2>

    <div class="row">

        <div class="col-6">
                        
            <div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">
            
                <div class="expanding-copy__lead">
                
                    <p><?php the_field( 'loc_text_block_text' );?></p>
                
                </div>
                
                <?php if( get_field('loc_text_block_text_more') ): ?>
                
                    <a class="trigger-expand">Read More</a>    
                
                <?php endif; ?>
                
                <div class="expanding-copy__more">
                
                    <?php the_field('loc_text_block_text_more'); ?>          
                
                </div>    
                
                <?php if( get_field('loc_text_block_text_more') ): ?>
                
                    <a class="trigger-collapse hide">Read Less</a>    
                
                <?php endif; ?>
                
            </div>
            
            <?php if( get_field('loc_logo_accent') == 'true' ): ?>
            
            <?php $accentLogo = get_field('small_logo', 'options');?>
            
                <div class="text-block__accent" style="background-image: url(<?php echo $accentLogo['url']; ?>);"></div>
            
            <?php endif;?>
            
        </div>

        <div class="col-sm-5 offset-sm-1">

        <?php if( get_field('loc_text_block_supporting_list') ): ?>
            
        <?php if( have_rows('loc_text_block_supporting_list') ): ?>
            
            <ul class="features font200">
                
                <?php while ( have_rows('loc_text_block_supporting_list') ) : the_row(); ?>
    
                    <li><?php the_sub_field( 'list_item' );?></li> 
    
                <?php endwhile;?>
            
            </ul>
            
        <?php endif;?>
            
        <?php endif; ?>
        
        </div>
        
    </div><!--r-->

</div>

</div><!--r-->

</div><!--c-->
    
    <?php $fullwidthImage = get_field('location_background_image');?>
    
    <div class="fullwidth-image mb5" style="background-image: url(<?php echo $fullwidthImage['url']; ?>);"></div>

<div class="container">

<div class="row">

    <?php get_template_part('template-parts/graph');?>

</div>

</div>

</div>

<!-- ******************* Location Tab END ******************* -->

</div><!--wrap all tab content to enable sub menu to remain sticky-->

<!-- ******************* CTA Block ******************* -->
</div><!--c-->

<?php get_template_part('template-parts/cta');?>

<!-- ******************* CTA END ******************* -->

<div class="container mt5">

<!-- ******************* Leaders Block ******************* -->

<?php get_template_part('template-parts/leaders');?>

<!-- ******************* Leaders END ******************* -->

</div><!--c-->

<script>
function openPage(pageName) {
  var i, tabcontent;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  document.getElementById(pageName).style.display = "block";
}
document.getElementById("defaultOpen").click();
</script>


<?php get_footer();?>