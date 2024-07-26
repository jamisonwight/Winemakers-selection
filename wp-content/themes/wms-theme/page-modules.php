<?php 
/** Template Name: Modules */ 
get_header();
?>
<div class="content">
	<div class="inner-content grid-x">
		<div class="main small-12 medium-12 large-12 modules" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php 
				$moduleIndex = array(
					'feature_slider' => -1,
					'content_block' => -1,
					'content_split_left' => -1,
					'content_split_right' => -1,
					'display_wines' => -1,
				);
			?>
			<?php if( have_rows('modules') ): ?>
				<?php while ( have_rows('modules') ) : the_row(); ?>
					<?php if( get_row_layout() == 'feature_slider' ): 
						$moduleIndex['feature_slider']++; 
						include 'modules/feature_slider.php';
					endif; ?>
					<?php if( get_row_layout() == 'content_block' ):
						$moduleIndex['content_block']++;  
						include 'modules/content_block.php';
					endif; ?>
					<?php if( get_row_layout() == 'content_split_left' ):
						$moduleIndex['content_split_left']++;  
						include 'modules/content_split_left.php';
					endif; ?>
					<?php if( get_row_layout() == 'content_split_right' ):
						$moduleIndex['content_split_right']++;  
						include 'modules/content_split_right.php';
					endif; ?>
					<?php if( get_row_layout() == 'display_wines' ):
						$moduleIndex['display_wines']++;  
						include 'modules/content_display_wines.php';
					endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php //the_content(); ?>	
			<?php endwhile; endif; ?>						
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>