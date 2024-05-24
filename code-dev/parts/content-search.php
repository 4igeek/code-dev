<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == get_post_type() ): ?>
        <div class="meta-info">
            <p>
                <?php _e('Posted in', 'code-dev');?> <?php echo get_the_date(); ?> <?php _e('by', 'code-dev');?> <?php the_author_posts_link(); ?> 
                <?php if(has_category()):?>
                    <?php _e('Categories', 'code-dev');?>: <?php the_category(' '); ?>
                <?php endif; ?>
                <?php if(has_tag()):?>
                    <?php _e('Tags', 'code-dev');?>: <?php the_tags('', ', '); ?> 
                <?php endif; ?>
            </p>     
        </div>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>