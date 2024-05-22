<?php get_header(); ?>
        <!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="home-blog">
                        <!-- Lesson 31 "Exploring the WQ Query class to loop through post categories" -->
                        <div class="container">
                            <div class="blog-items">
                            <?php 
                                if ( have_posts() ) : 
                                    while ( have_posts() ) : the_post();
                                    ?>
                                        <?php the_content(); ?>
                                    <?php
                                    endwhile;
                                else : 
                                    ?>
                                    <p>Nothing to display. Please add some posts.</p>
                                <?php endif; 
                            ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>