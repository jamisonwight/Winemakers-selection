<div class="grid-container content-split content-split-right" id="content-split-right-<?php echo $moduleIndex['content_split_right']; ?>" data-module-key="<?php echo $moduleIndex['content_split_right'] ?>">
    <div class="animate grid-x small-12 medium-12 large-12 wrapper">
        <div class="cell">
            <div class="grid-x">
                <div class="cell small-12 medium-12 large-6 image-block" style="background: url('<?php echo get_sub_field('image_block'); ?>') no-repeat; background-position: center !important;" role="img">
                    &nbsp;
                </div>
                <div class="cell small-12 medium-12 large-6 box-content">
                    <div class="copy">
                    <?php if(get_sub_field('main_heading')): ?>
                        <h2><?php echo get_sub_field('main_heading'); ?></h2>
                    <?php endif; ?>
                    <?php echo get_sub_field('copy'); ?>
                    <?php if(get_sub_field('cta')): ?>
                        <?php 
                            $link = get_sub_field('cta_link');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" class="btn" target="<?php echo esc_attr( $link_target ); ?>"><?php echo get_sub_field('cta'); ?></a>
                    <?php endif; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>