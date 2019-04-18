<div class="expanding-copy <?php the_sub_field( 'text_type' );?> <?php the_sub_field( 'dev_class' );?>">

    <div class="expanding-copy__lead">
    
        <?php the_field( 'text_block_text' );?>
    
    </div>
    
    <?php if( get_field('text_block_text_more') ): ?>
    
        <a class="trigger-expand">Read More</a>    
    
    <?php endif; ?>
    
    <div class="expanding-copy__more">
    
        <?php the_field('text_block_text_more'); ?>          
    
    </div>    
    
    <?php if( get_field('text_block_text_more') ): ?>
    
        <a class="trigger-collapse hide">Read Less</a>    
    
    <?php endif; ?>

    <?php if( get_field('button_query') == 'true' ): ?>

        <a href="<?php the_field( 'button_target' );?>" type="button" class="button">
            
            <?php the_field( 'button_text' );?>
        
        </a>

    <?php endif;?>
    
</div>

<?php if( get_field('logo_accent') == 'true' ): ?>

<?php $accentLogo = get_field('small_logo', 'options');?>

    <div class="text-block__accent" style="background-image: url(<?php echo $accentLogo['url']; ?>);"></div>

<?php endif;?>