<div class="leaders mb5">
    
    <div class="row">
        
        <?php 
            if( have_rows('leader') ): 
            while ( have_rows('leader') ) : the_row(); 
            
            $leaderImage = get_sub_field('image');?>

            <div class="col-4">
            
                <a href="<?php the_sub_field( 'target' );?>">                
                    
                    <div class="leaders__item" style="background-image: url(<?php echo $leaderImage['url']; ?>);">
                    
                        <h2 class="heading heading__sm heading__light"><?php the_sub_field( 'heading' );?></h2>  
                    
                    </div>        
                </a>       
            
            </div> 

        <?php endwhile; endif;?>        

    </div><!--r-->
    
</div><!--leaders-->