<?php
if( in_array( 'locations', get_field('cta_block_cta') ) ) {
?>   

LOCATIONS

<?php
}
?>



<?php
if( in_array( 'newsletter', get_field('cta_block_cta') ) ) {
?>   

<?php $newsletterCtaImage = get_field('newsletter_image', 'options');?>

<div class="call-to-action" style="background-image: url(<?php echo $newsletterCtaImage['url']; ?>);">

    <div class="container">
    
        <h3 class="heading heading__md heading__light font800"><?php the_field('newsletter_headline', 'options');?></h3>

        <h3 class="heading heading__md heading__light font 300"><?php the_field('newsletter_sub_headline', 'options');?></h3>   
    
    </div><!--c-->

</div>

<?php
}
?>

<?php
if( in_array( 'enquire', get_field('cta_block_cta') ) ) {
?>   

ENQUIRE

<?php
}
?>
