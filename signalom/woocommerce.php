<?php
/* 

*/
?>
<?php get_header(); ?>

    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    
                    <div class="page-content">
                        <?php woocommerce_content(); ?>
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-5">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
