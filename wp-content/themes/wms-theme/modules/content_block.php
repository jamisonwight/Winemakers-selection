<div class="grid-container full content-block" data-module-key="<?php echo $moduleIndex['content_block'] ?>" id="content-block-<?php echo $moduleIndex['content_block']; ?>">
    <?php if (get_sub_field('content_type') == 'basic') : ?>  
    <?php if( have_rows('basic') ): while( have_rows('basic') ): the_row(); ?>
    <div class="border_top_<?php echo get_sub_field('series'); ?>">&nbsp;</div>
        <div class="grid-x grid-margin-x grid-padding-x basic parallax align-middle" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);" role="img">
        <?php if( get_sub_field('image_overlay') ): ?><div class="image_overlay">&nbsp;</div><?php endif; ?>
            <?php if(get_sub_field('background_video')): ?>
            <video playsinline="1" muted="1" autoplay="1" loop="1" poster="<?php echo get_sub_field('background_image'); ?>" class="feature-video"> 
                <source src="<?php echo get_sub_field('background_video'); ?>" type="video/mp4">
            </video>
            <?php endif; ?>
            <div class="cell small-12 large-12 align_center">
                <div class="gradient_fill_<?php echo get_sub_field('series'); ?>">
                    <div class="heading_box">
                        <?php if(get_sub_field('main_heading')): ?>
                        <h1><?php echo get_sub_field('main_heading'); ?></h1>
                        <?php endif; ?>
                        <?php if(get_sub_field('vimeo_url')): ?>
                        <a href="<?php echo get_sub_field('vimeo_url'); ?>" class="btn" data-fancybox>Play Video</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <div class="border_bottom_<?php echo get_sub_field('series'); ?>">&nbsp;</div>
    <?php endwhile; endif; ?>
    <div class="clear"></div>
    <?php elseif (get_sub_field('content_type') == 'twoColumn') : ?> 
        <?php if (have_rows('two_column')) : ?>
        <?php while(have_rows('two_column')) : the_row(); ?>
        <div class="grid-x two_column animate">
            <div class="cell small-12 medium-12 large-10 large-offset-1">
                <div class="grid-x align-middle">
                    <div class="cell <?php echo (get_sub_field('offset')) ? 'large-7' : 'large-6'; ?>">
                        <?php echo get_sub_field('left_column'); ?>
                    </div>
                    <div class="cell <?php echo (get_sub_field('offset')) ? 'large-5' : 'large-6'; ?>">
                        <div class="grid-x grid-margin-x grid-padding-x">
                            <div class="cell">
                                <?php echo get_sub_field('right_column'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    <?php endwhile; endif; ?>
    <div class="clear"></div>
    <?php else: ?>
    <?php endif; ?>
    <?php if (get_sub_field('content_type') == 'plain') : ?> 
        <?php if (have_rows('plain')) : ?>
        <?php while(have_rows('plain')) : the_row(); ?>
        <div class="grid-x plain animate">
            <?php $align = get_sub_field('text_align'); ?>
            <div class="cell small-12 medium-12 large-10 large-offset-1 <?php echo esc_attr($align['value']); ?>">
                <?php echo get_sub_field('content'); ?>
                <?php if(get_sub_field('cta')): ?>
                <?php 
                    $link = get_sub_field('cta_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                <a href="<?php echo esc_url( $link_url ); ?>" class="btn <?php echo get_sub_field('button_color'); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo get_sub_field('cta'); ?></a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>