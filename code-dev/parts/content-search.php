<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == get_post_type() ): ?>
        <div class="meta-info">
            <p>
                Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> 
                <?php if(has_category()):?>
                    Categories: <?php the_category(' '); ?>
                <?php endif; ?>
                <?php if(has_tag()):?>
                    Tags: <?php the_tags('', ', '); ?> 
                <?php endif; ?>
            </p>     
        </div>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>