<?php
/**
 * Template Name: Home
 */

get_header(); 

?>
    
    
    <section class="signalom_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('signalom_top_title'); ?></h1>
					<p class="signalom-desc"><?php the_field('signalom_sub_title'); ?></p>
					<div class="singlom_top_item">
						<?php
						if( have_rows('signalom_image_item') ):
						while ( have_rows('signalom_image_item') ) : the_row(); ?>

						<div class="signalom_content">
							<div class="sign-hover blue">
								<img src="<?php the_sub_field('signalom_image'); ?>" alt="">
								<h2><?php the_sub_field('signalom_image_overlay_text'); ?></h2>
							</div>
							<ul>
								<li><?php the_sub_field('signalom_button'); ?></li>
								<li style="background-color:<?php the_sub_field('button_bottom_color'); ?>"><?php the_sub_field('signalom_button_bottom_text'); ?></li>
							</ul>
							<span><?php the_sub_field('signalom_button_samll_text'); ?></span>
						</div>

						<?php   
						endwhile;
						else :
						// no rows found
						endif;
						?>
                	</div>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="row">
                <div class="signalom_product bbtn woocommerce">

                    <?php $sl = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => 3
                    )); 
                        $ppd = 1;
                    ?>

                    <?php while( $sl->have_posts() ) : $sl->the_post(); ?>

                        <div class="col-md-4 left-pad-off">
                            <div class="signalom_product_item">
                                <?php the_post_thumbnail(); ?>
                                <h2 style="background:<?php the_field('supplement_item_color'); ?>"><?php the_field('product_status'); ?></h2>

                                <h1 class="product-price">
                                    <?php wc_get_template( 'single-product/price.php' ); ?>
                                </h1>

                                <p><?php the_field('product_short_descripiton'); ?></p>

                                <div class="addto">
                                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                </div>

                                <div style="background:<?php the_field('supplement_item_color'); ?>" class="rebone text-center">
                                    <p><?php the_field('product_bottom_rebone'); ?></p>
                                </div>

                            </div>
                        </div>


                    <?php $bdr++; endwhile; wp_reset_query(); ?>

                </div>


            </div>
        </div>

        <div class="nsf-section">
            <div class="container">
                <div class="col-sm-2">
                    <div class="nsf-left">
                        <?php if( get_field('nsf_left_logo') ): ?>
                            <img src="<?php the_field('nsf_left_logo'); ?>" />
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-sm-10">
                    <div class="nsf-right">
                        <?php the_field('nsf_right_text'); ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!-- benefit section Start -->
    
    <section class="benefit-section">
        <div class="container">
            <h1 class="title text-center">
               <?php the_field('benefit_title'); ?>
            </h1>
                
            <div class="row">
                
                <div class="plus-top">
                    
					<?php
						if( have_rows('benifit_items') ):
						while ( have_rows('benifit_items') ) : the_row(); ?>

                        <div class="col-sm-4">
                            <div class="top text-center">
                                <img src="<?php the_sub_field('benifit_top_logo'); ?>" alt="">
                            </div>
                            <div class="signalom-item">
                                <?php the_sub_field('benifit_item'); ?>
                            </div>
                        </div>
                        
                    <?php   
                    endwhile;
                    else :
                    // no rows found
                    endif;
                    ?>
					
                </div>
            </div>
        </div>
    </section>
    
    <!--  SUPPLEMENTS section Start -->
    
    <div class="supplement-section woocommerce bbtn">
        <div class="container">
            <div class="row">
               
                <h1 class="title text-center">
                   <?php the_field('supplements_title'); ?>
                </h1>
               
                <div class="plus-long">
                <?php $sl = new WP_Query( array(
                    'post_type' => 'product',
                    'posts_per_page' => 3
                )); 
                    $bdr = 1;
                ?>

                <?php while( $sl->have_posts() ) : $sl->the_post(); ?>
                    
                    <?php if($bdr%2 == 0): ?>
                    
                    
                <?php
                    $Hex_color = get_field('supplement_item_color');
                    $RGB_color = hex2rgb($Hex_color);
                    $Final_Rgb_color = implode(", ", $RGB_color); 
                ?>
                    
                    <div class="col-sm-12 a<?php echo $bdr; ?> bgcolor" style="position:relative;background:rgba(<?php echo $Final_Rgb_color;  ?>, .6 )">
                       
                        <div class="col-sm-9">
                            <div class="supplement-item">
                                <div class="supplement-text leftpad">
                                    <h3><?php the_title(); ?></h3> 
                                    
                                    <p><?php the_content(); ?></p>
                                    
                                    <div class="addtocart">
                                        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="supplement-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        
                        <div class="pluss">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/plus2.png" alt="">
                        </div>
                        
                    </div>
                    
                    
                    <?php else: ?>
                    
                    <?php
                        $Hex_color = get_field('supplement_item_color');
                        $RGB_color = hex2rgb($Hex_color);
                        $Final_Rgb_color = implode(", ", $RGB_color); 
                    ?>
                    
                    <div class="col-sm-12 bgcolor a<?php echo $bdr; ?> no-padding" style="position:relative;background:rgba(<?php echo $Final_Rgb_color;  ?>, .6 ); ?>">
                       
                       
                        <div class="col-sm-3">
                            <div class="supplement-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                       
                        <div class="col-sm-9  left-pad-off">
                            <div class="supplement-text righttpad">
                                <h3><?php the_title(); ?></h3> 
                                
                                <p><?php the_content(); ?></p>
                                
                                <div class="addtocart">
                                    <p><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="pluss">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/plus1.png" alt="">
                        </div>
                    </div>
                    
                   
                    
                    <?php endif; ?>
                    
                <?php $bdr++; endwhile; wp_reset_query(); ?>
              
                 
            </div>
            </div>
        </div>
    </div>
    
     <!--  Information section Start -->
    
    <div class="signalom-full-section">
        <div class="container">
            <div class="row">
               
                <h1 class="title text-center">
                   <?php the_field('signalom_title'); ?>
                </h1>
                
                    <div class="col-sm-12">
                        <div class="sign-text">
                            <?php the_field('signalom_full_text'); ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <!--  about section Start -->
    
    <div class="about-section">
        <div class="container">
            <div class="row">
               
                <h1 class="title text-center">
                   <?php the_field('about_title'); ?>
                </h1>
                
                        <?php $st = new WP_Query( array(
                            'post_type' => 'about',
                            'posts_per_page' => 2
                        )); 
                            while( $st->have_posts() ) : $st->the_post(); 
                        ?>
                        
                    <div class="about-item">
                        <div class="col-sm-3">
                            <div class="about-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="about-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; wp_reset_query(); ?>
                
            </div>
        </div>
    </div>
    
    <!-- Faqs section Start -->
    
    <section class="faq-section">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">
                   <?php the_field('faq_title'); ?>
                </h1>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <div class="faq-item">
                        <?php echo do_shortcode('[faq]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section Start -->
    
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <h1 class="title text-center">
                   <?php the_field('contact_us_title'); ?>
                </h1>
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-left">
                       
                        <?php if( have_rows('contact_left_text_item') ): 
                        while( have_rows('contact_left_text_item') ): the_row(); 
                        // vars
                            $image = get_sub_field('contact_icon');
                            $content = get_sub_field('contact_text');
                        ?>

                        <div class="contact-item">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            
                            <div class="contact-text">
                                <p><?php echo $content; ?></p>
                            </div>
                        </div>
                        
					<?php endwhile; ?>
                    
					<?php endif; ?>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-right">
                       <?php $ctf = get_field('contact_from_shortcode'); ?>
					   <?php echo do_shortcode($ctf); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>