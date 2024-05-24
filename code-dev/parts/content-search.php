<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == get_post_type() ): ?>
            <?php get_template_part( 'parts/meta-info' );?>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>