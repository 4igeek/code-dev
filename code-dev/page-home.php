<?php get_header(); ?>
        <!-- -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php 
                        $hero_title = get_theme_mod('set_hero_title', 'Welcome to my site');
                        $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Add a subtitle in the theme customizer');
                        $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
                        $hero_button_link = get_theme_mod('set_hero_button_link', '#');
                        $hero_height = get_theme_mod('set_hero_height', 800);
                        $hero_background = wp_get_attachment_url( get_theme_mod('set_hero_background') )
                    ?>
                    <section class="hero" style="background-image: url('<?php echo $hero_background;?>')">
                        <div class="overlay" style="min-height: <?php echo $hero_height; ?>px;">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo $hero_title; ?></h1>
                                    <p><?php echo nl2br ($hero_subtitle); ?></p>
                                    <a href="<?php echo $hero_button_link; ?>"><?php echo $hero_button_text; ?></a>
                                </div>
                            </div>
                        </div>
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