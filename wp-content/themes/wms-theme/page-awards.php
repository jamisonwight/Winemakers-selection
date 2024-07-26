<?php 
/** Template Name: Awards */ 
get_header();
?>
<div class="content">
	<div class="inner-content grid-x">
		<div class="main small-12 medium-12 large-10 large-offset-1 modules" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>	
			<div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-2">
				<div class="cell">
					<?php if( have_rows('reserve_awards') ): ?>
					<ul class="accordion" data-accordion data-allow-all-closed="true">
						<li><span class="reserve_ribbon" role="heading">Reserve Series</span></li>
					<?php while( have_rows('reserve_awards') ): the_row(); ?>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title"><?php echo esc_html( get_sub_field('varietal') ); ?></a>
							<div class="accordion-content" data-tab-content>
								<table>
								<?php if( have_rows('varietal_awards') ): while( have_rows('varietal_awards') ): the_row(); ?>
									<tr>
										<td><?php echo esc_html( get_sub_field('award') ); ?></td>
									</tr>
								<?php endwhile; endif; ?>
								</table>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
				<div class="cell">
					<?php if( have_rows('classic_awards') ): ?>
					<ul class="accordion" data-accordion data-allow-all-closed="true">
						<li><span class="classic_ribbon" role="heading">Classic Series</span></li>
					<?php while( have_rows('classic_awards') ): the_row(); ?>
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title"><?php echo esc_html( get_sub_field('varietal') ); ?></a>
							<div class="accordion-content" data-tab-content>
								<table>
								<?php if( have_rows('varietal_awards') ): while( have_rows('varietal_awards') ): the_row(); ?>
									<tr>
										<td><?php echo esc_html( get_sub_field('award') ); ?></td>
									</tr>
								<?php endwhile; endif; ?>
								</table>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>						
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>