<div class="content-wine-slider grid-container" data-module-key="<?php echo $moduleIndex['display_wines'] ?>" id="content-wine-slider-<?php echo $moduleIndex['display_wines']; ?>">
    <div class="wine-slider-container grid-x small-12 medium-12 large-10 large-offset-1">
		<div class="main-content small-12 medium-12 large-12">
            <?php if(get_sub_field('main_heading')): ?>
            <h2><?php echo get_sub_field('main_heading'); ?></h2>
            <?php endif; ?>
		</div>
		<div class="wine_slider grid-x wrapper">
			<div class="wine-swiper-container cell">
				<div class="swiper-prev">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Previous">
				</div>
				<div class="swiper-wrapper">
                    <?php if (get_sub_field('type') == 'mixed'): ?>
					    <?php
						$args = array('post_type' => 'wine', 'orderby'=>'menu_order', 'order'=>'asc', 'posts_per_page' => '-1');
						$myQuery = new WP_query($args);
							while($myQuery->have_posts()) : $myQuery->the_post();
								$post_meta = get_post_meta($post->ID, true);		  
						?>  
                        <div class="swiper-slide">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array('itemprop' => 'image')); ?></a>
                            <a href="<?php the_permalink(); ?>"><h4><?php echo get_field('series'); ?><br> <?php the_title(); ?></h4></a>
                        </div> 
                        <?php endwhile; ?>
                        <?php wp_reset_query() ?>
                    <?php endif; ?>
                    <?php if (get_sub_field('type') == 'reserve'): ?>
                        <?php
                        $args = array('post_type' => 'wine', 'series'=>'reserve', 'orderby'=>'menu_order', 'order'=>'asc', 'posts_per_page' => '-1');
                        $myQuery = new WP_query($args);
                            while($myQuery->have_posts()) : $myQuery->the_post();
                                $post_meta = get_post_meta($post->ID, true);		  
                        ?>  
                        <div class="swiper-slide">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array('itemprop' => 'image')); ?></a>
                            <a href="<?php the_permalink(); ?>"><h4><?php echo get_field('series'); ?><br> <?php the_title(); ?></h4></a>
                            </div> 
                        <?php endwhile; ?>
                        <?php wp_reset_query() ?>
                    <?php endif; ?>
                    <?php if (get_sub_field('type') == 'classic'): ?>
                        <?php
                        $args = array('post_type' => 'wine', 'series'=>'classic', 'orderby'=>'menu_order', 'order'=>'asc', 'posts_per_page' => '-1');
                        $myQuery = new WP_query($args);
                            while($myQuery->have_posts()) : $myQuery->the_post();
                                $post_meta = get_post_meta($post->ID, true);		  
                        ?>
                            <div class="swiper-slide">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array('itemprop' => 'image')); ?></a>
                            <a href="<?php the_permalink(); ?>"><h4><?php echo get_field('series'); ?><br> <?php the_title(); ?></h4></a>
                            </div>       
                        <?php endwhile; ?>
                        <?php wp_reset_query() ?>
                    <?php endif; ?> 
                    
                    <!-- 3L BOXES -->
                    <div class="swiper-slide wine-box">
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-cabernet-sauvignon">
                            <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2024/05/WMS_3L_Cab_Sides_R24V1A22.png" alt="Cabernet Sauvignon Classic Box">
                        </a>
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-cabernet-sauvignon"><h4>Classic Cabernet Sauvignon Box</h4></a>
                    </div>
                    <div class="swiper-slide wine-box">
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-sauvignon-blanc">
                            <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2024/05/sauv_box_slider.png" alt="Sauvignon Blanc Classic Box">
                        </a>
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-sauvignon-blanc"><h4>Classic Sauvignon Blanc Box</h4></a>
                    </div>   
                    <div class="swiper-slide wine-box">
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-chardonnay">
                            <img src="<?php echo bloginfo('url'); ?>/wp-content/uploads/2024/05/WMS_3L_Chard_Sides_R24V1A222.png" alt="Chardonnay Classic Box">
                        </a>
                        <a href="<?php echo bloginfo('url'); ?>/wine/classic-cabernet-sauvignon"><h4>Classic Chardonnay Box</h4></a>
                    </div>        
				</div> 
				<div class="swiper-next">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Next">
				</div> 
			</div>     
		</div>
	</div>   
</div>