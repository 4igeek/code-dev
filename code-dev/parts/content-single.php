<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <?php get_template_part( 'parts/meta-info' );?>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>