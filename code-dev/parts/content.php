<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php if(has_post_thumbnail()):?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
    <?php endif; ?>
    <?php get_template_part( 'parts/meta-info' );?>
    <?php the_excerpt(); ?>
</article>