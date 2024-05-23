<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">            
                <div class="container">
                    <div class="error-404">
                        <header>
                            <h1>Nothing to see here</h1>
                            <p>It seems as though you've strolled out into the wilderness. There's nothing useful here.</p>
                        </header>
                    </div>
                    <div class="error">
                        <?php get_search_form(); ?>
                        <?php the_widget('WP_Widget_Recent_Posts', array(
                            'title' => 'Latest Posts',
                            'number' => 3
                            )); ?>
                    </div>
                </div>
        </main>
    </div>
</div>                    
<?php get_footer(); ?>