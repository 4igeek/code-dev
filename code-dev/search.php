<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <div style="text-align: center;">
                    <h1><?php esc_html_e('Search results for', 'code-dev'); ?>: <?php echo get_search_query(); ?></h1>
                    <?php get_search_form(); ?>
                </div>
                <?php while( have_posts() ): the_post(); ?>
                    <?php get_template_part( 'parts/content','search' );?>
                <?php endwhile;  the_posts_pagination( ); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>