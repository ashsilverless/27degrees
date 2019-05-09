<?php
/**
 * The template for displaying the footer
 * @package Silverless
 */
?>

</main>

    <footer class="footer">
    
        <div class="container">
    
            <div class="socket">
    
                <div class="row">
    
                    <div class="col-2 socials">
    
                        <?php if( have_rows('social_links', 'option') ): while( have_rows('social_links', 'option') ): the_row(); ?>
    
                        <a href="<?php the_sub_field('page_link'); ?>"><i class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
    
                        <?php endwhile; endif; ?>
    
                    </div>
    
                    <div class="col-4 accreds">


                    <?php 
                    if( have_rows('partner_logos', 'options') ): 
                    while ( have_rows('partner_logos', 'options') ) : the_row(); ?>        
                    
                        <img src="<?php the_sub_field('image');?>"/>    
                    
                    <?php endwhile; endif;?>

                    </div>
    
                    <div class="col-6 socket__colophon">
    
                        <p>&copy; 27 Degrees South <?php echo date ('Y');?>
    
                        <a href="">Terms</a>
    
                        <a href="">Privacy</a></p>

                        <div class="logo-holder">
                            
                            <a href="https://silverless.co.uk">
                                
                                <?php get_template_part('inc/img/silverless', 'logo');?>
                            
                            </a>
                        
                        </div>
    
                        <p class="trading">27 Degrees South is a trading name of Mark Rampton Ltd</p>
    
                    </div>
    
                </div><!--row-->
    
            </div><!--socket-->
    
        </div><!--container-->
    
    </footer>
    
        </div><!-- #page -->
    
        <?php wp_footer(); ?>
    
    </body>
    
</html>
