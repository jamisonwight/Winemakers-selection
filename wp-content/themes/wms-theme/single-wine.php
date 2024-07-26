<?php get_header(); ?>
			
<div class="content">
	<div class="inner-content" itemscope itemtype="https://schema.org/Product">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="border_top_<?php echo get_field('series'); ?>">&nbsp;</div>
		<div class="grid-x product_info">
			<div class="cell small-12 large-6 product-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<?php if( have_rows('slideshow') ): ?>
						<?php while( have_rows('slideshow') ): the_row(); ?>
						<div class="swiper-slide" style="background: url('<?php echo get_sub_field('image'); ?>') no-repeat;">
							<?php if(get_sub_field('video_url')): ?>
							<a href="<?php echo get_sub_field('video_url'); ?>" data-fancybox><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-play.svg" alt="Play Video" class="play_button"></a>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
					<div class="swiper-nav"></div>
				</div>
			</div>
			<div class="border_bottom_<?php echo get_field('series'); ?> mobile">&nbsp;</div>
			<?php if(get_field('series') == 'classic') { ?>
			<div class="cell small-12 large-6">
			<?php } ?>
			<?php if(get_field('series') == 'reserve') { ?>
			<div class="cell small-12 medium-12 large-6">
			<?php } ?>
				<div class="product_meta" itemprop="description">
					<?php if(get_field('series') == 'classic') { ?>
					<span class="heading_6">Winemakers Selection Classic Series</span>
					<?php } ?>
					<?php if(get_field('series') == 'reserve') { ?>
					<span class="heading_6">Winemakers Selection Reserve Series</span>
					<?php } ?>
					<h1><?php the_title(); ?></h1>
					<?php if(get_field('series') == 'classic') { 
						$field = get_field_object('classic_appellation'); 
						$value = $field['value'];
						$label = $field['choices'][ $value ];
					?>
					<p class="uppercase"><?php echo esc_html($label); ?></p>
					<?php } ?>
					<?php if(get_field('series') == 'reserve') { 
						$field = get_field_object('reserve_appellation'); 
						$value = $field['value'];
						$label = $field['choices'][ $value ];
					?>
					<p class="uppercase"><?php echo esc_html($label); ?></p>
					<?php } ?>
					<?php the_content(); ?>
					<div class="buttons">
						<a href="/find/" class="btn">Find Now</a> <?php if(get_field('tasting_notes_pdf')): ?><a href="<?php echo get_field('tasting_notes_pdf'); ?>" class="btn" target="_blank">Tasting Notes</a><?php endif; ?>
					</div>
				</div> 
			</div>
		</div>
		<div class="border_bottom_<?php echo get_field('series'); ?> desktop">&nbsp;</div>
		<div class="grid-x small-12 medium-10 medium-offset-1 large-10 large-offset-1 wrapper product_attributes animate" style="border-color: <?php echo get_field('wine_color'); ?>;">
			<div class="cell">
				<?php if(get_field('award_image')): ?>
				<img src="<?php echo get_field('award_image'); ?>" alt="Award Image" class="award_image" /> 
				<?php endif; ?>
				<div class="grid-x">
					<div class="cell small-12 medium-12 large-6 wine_label" style="background: url(<?php echo get_field('wine_label_image'); ?>) no-repeat;">
						&nbsp;
					</div>
					<div class="cell small-12 medium-12 large-6">
						<?php if(get_field('tasting_note')): ?>
						<div class="bottom_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
							<p><strong>TASTING NOTES</strong></p>
							<p><?php echo get_field('tasting_note'); ?></p>
						</div>
						<?php endif; ?>
						<?php if(get_field('food_pairing')): ?>
						<div class="bottom_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
							<p><strong>PAIRING</strong></p>
							<p><?php echo get_field('food_pairing'); ?></p>
						</div>
						<?php endif; ?>
						<?php if(get_field('winemaker') == 'andrea') { ?>
						<div class="bottom_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
							<p class="winemaker"><strong>WINEMAKER</strong></p>
							<div class="signature">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/andrea-brambila-signature.svg" alt="Andréa Brambila signature" class="signature">
								<p>Andréa Brambila</p>
							</div>
						</div>
						<?php } ?>
						<?php if(get_field('winemaker') == 'james') { ?>
						<div class="bottom_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
							<p class="winemaker"><strong>WINEMAKER</strong></p>
							<div class="signature">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-foster-signature.svg" alt="James Foster signature" class="signature">
								<p>James Foster</p>
							</div>
						</div>
						<?php } ?>
						<div class="last_row" style="border-color: <?php echo get_field('wine_color'); ?>;">
						<?php if(get_field('series') == 'classic') { ?>
							<div class="classic_scales">
								<p class="more_margin"><strong>SWEETNESS</strong></p>
								<p><strong>DRY</strong>
								<?php if( get_field('classic_sweetness') == '1' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-classic-scale1.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('classic_sweetness') == '2' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-classic-scale2.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('classic_sweetness') == '3' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-classic-scale3.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('classic_sweetness') == '4' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-classic-scale4.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('classic_sweetness') == '5' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-classic-scale5.svg" alt=""> 
								<?php } ?>
								SWEET</p>
							</div>
						<?php } ?>
						<?php if(get_field('series') == 'reserve') { ?>
							<div class="reserve_scales">
								<p class="more_margin"><strong>BODY/SWEETNESS</strong></p>
								<p class="body_scale"><strong>LIGHT</strong> 
								<?php if( get_field('reserve_body') == '1' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale1.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('reserve_body') == '2' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale2.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('reserve_body') == '3' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale3.svg" alt=""> 
								<?php } ?>
								FULL</p>
								<p class="sweetness_scale"><strong>DRY</strong>
								<?php if( get_field('reserve_sweetness') == '1' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale1.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('reserve_sweetness') == '2' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale2.svg" alt=""> 
								<?php } ?>
								<?php if( get_field('reserve_sweetness') == '3' ) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-reserve-scale3.svg" alt=""> 
								<?php } ?>
								SWEET</p>
							</div>
						<?php } ?>
						<?php if (in_array('reserve-cabernet-sauvignon', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-cabernet-seal.jpg" alt="Monterey County, California"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-sauvignon-blanc', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-sauvignon-blanc-seal.jpg" alt="Marlborough, New Zealand"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-red-blend', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-red-blend-seal.jpg" alt="California"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-pinot-grigio', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-pinot-grigio-seal.jpg" alt="Italy, Delle Venezie"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-pinot-noir', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-pinot-noir-seal.jpg" alt="Monterey County, California"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-chardonnay', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-chardonnay-seal.jpg" alt="Monterey County, California"> 
								</div>
								<?php } ?>
								<?php if (in_array('reserve-prosecco-d-o-c', get_body_class())) { ?>
								<div class="left_border" style="border-color: <?php echo get_field('wine_color'); ?>;">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reserve-prosecco-seal.jpg" alt="Italy"> 
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-x small-12 medium-10 medium-offset-1 large-10 large-offset-1 wrapper single_awards animate">
			<div class="cell">
				<?php if( have_rows('awards') ): ?>
				<table>
					<tr>
						<th><p class="uppercase" role="heading">Awards</p></th>
					</tr>
					<tr>
					<?php while( have_rows('awards') ): the_row(); ?>
						<td><?php echo esc_html( get_sub_field('award') ); ?></td>
					</tr>
					<?php endwhile; ?>
				</table>
				<?php endif; ?>
			</div>
		</div>		
		<div class="content-wine-slider">
			<div class="wine-slider-container grid-x small-10 small-offset-1 medium-10 medium-offset-1 large-10 large-offset-1">
				<div class="main-content small-12 medium-12 large-12">
					<?php if(get_field('series') == 'classic') { ?>
					<h2>Explore Winemakers Selection Classic Wines</h2>
					<?php } ?>
					<?php if(get_field('series') == 'reserve') { ?>
					<h2>Explore Winemakers Selection Reserve Wines</h2>
					<?php } ?>
				</div>
				<div class="wine_slider grid-x wrapper">
					<div class="wine-swiper-container cell">
						<div class="swiper-prev">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Previous">
						</div>
						<div class="swiper-wrapper">
						<?php if(get_field('series') == 'classic') { ?>
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
						<?php } ?>
						<?php if(get_field('series') == 'reserve') { ?>
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
						<?php } ?>
						</div> 
						<div class="swiper-next">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Next">
						</div> 
					</div>     
				</div>
			</div>    
		</div> 
		<?php wp_reset_query() ?>				
		<?php endwhile; endif; ?>
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>