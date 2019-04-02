<?php
if( in_array( 'locations', get_field('cta_block_cta') ) ) {
?>   

<?php $locationsCtaImage = get_field('locations_image', 'options');?>

<div class="call-to-action" style="background-image: url(<?php echo $locationsCtaImage['url']; ?>);">

    <div class="container">
    
        <h3 class="heading heading__lg heading__light font600 mb2 slide-right"><?php the_field('locations_headline', 'options');?></h3>
		            
		        <a href="<?php the_field( 'locations_target', 'options');?>" type="button" class="button">
		            
		            <?php the_field( 'locations_button_text', 'options');?>
		        
		        </a>

    
    </div><!--c-->

</div>

<?php
}
?>

<?php
if( in_array( 'newsletter', get_field('cta_block_cta') ) ) {
?>   

<?php $newsletterCtaImage = get_field('newsletter_image', 'options');?>

<div class="call-to-action" style="background-image: url(<?php echo $newsletterCtaImage['url']; ?>);">

    <div class="container">
    
        <h3 class="heading heading__lg heading__light font800 slide-right"><?php the_field('newsletter_headline', 'options');?></h3>

        <h3 class="heading heading__md heading__light font 300 mb2"><?php the_field('newsletter_sub_headline', 'options');?></h3>   

<?php echo do_shortcode('[contact-form-7 id="1893" title="Subscribe Form"]');?>
    
    </div><!--c-->

</div>

<?php
}
?>

<?php
if( in_array( 'enquire', get_field('cta_block_cta') ) ) {
?>   

<?php $enquireCtaImage = get_field('enquire_image', 'options');?>

<div class="call-to-action" style="background-image: url(<?php echo $enquireCtaImage['url']; ?>);">

    <div class="container">
    
        <h3 class="heading heading__md heading__light font800 slide-right"><?php the_field('enquire_headline', 'options');?></h3>

        <h3 class="heading heading__md heading__light font 300 mb2"><?php the_field('enquire_sub_headline', 'options');?></h3>   

		        <a href="<?php the_field( 'enquire_target', 'options');?>" type="button" class="button">
		            
		            <?php the_field( 'enquire_button_text', 'options');?>
		        
		        </a>
    
    </div><!--c-->

</div>

<?php
}
?>
