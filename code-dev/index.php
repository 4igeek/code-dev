<?php get_header(); ?>
    <?php get_template_part( 'parts/image-banner' );?>
        <!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <!-- <h1>Blog</h1> -->
                        <div class="container">
                            <div class="blog-items">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <?php get_template_part('parts/content' ); ?>
                                    <?php endwhile; ?>
                                    <?php get_template_part('parts/pagination' ); ?>
                                    <?php else : ?>
                                    <p>Nothing to display. Please add some posts.</p>
                                <?php endif; ?>
                            </div>
                            <?php get_sidebar() ?>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>