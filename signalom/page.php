<?php
/* 

*/
?>
<?php get_header(); ?>

    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <h2 class="page-title"><?php the_title(); ?></h2>
                        
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                        
                    <?php endwhile; ?>                    
                    
                </div>
                <div class="col-md-4 col-sm-5">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
