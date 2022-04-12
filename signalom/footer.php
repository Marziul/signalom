<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */

?>

    <footer class="footer-area">
       
        <div class="footer-top">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-6">
						<div class="sign-from">
							<?php echo do_shortcode('[mc4wp_form id="129"]'); ?>
						</div>
                    </div>
                    <div class="col-md-6">
                        
							<?php dynamic_sidebar('nsflogo'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php dynamic_sidebar('footer1'); ?>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <?php dynamic_sidebar('footersocial'); ?>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="footer-middle">
							<?php dynamic_sidebar('footercopy'); ?>
                        </div>
                    </div>
                    
                    <div class="col-sm-2">
						<?php dynamic_sidebar('canada'); ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
    </footer>
    
    

<?php wp_footer(); ?>

    <!-- jQuery -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
    
    <!-- Owl Curosel -->
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/owlcarousel-2/owl.carousel.min.js"></script>
    
    <!-- Custom Script -->
    <script src="<?php // echo esc_url(get_template_directory_uri()); ?>/js/custom.js"></script>


</body>
</html>
