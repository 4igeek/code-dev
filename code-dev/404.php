<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">            
                <div class="container">
                    <div class="error-404">
                        <header>
                            <h1><?php _e('Nothing to see here', 'code-dev'); ?></h1>
                            <p><?php _e('It seems as though you\'ve strolled out into the wilderness. There\'s nothing useful here.', 'code-dev'); ?></p>
                            <p><?php _e('Perhaps you\'d like to search for something that is here.', 'code-dev'); ?></p>
                        </header>
                    </div>
                    <div class="error">
                        <?php get_search_form(); ?>
                        <?php the_widget('WP_Widget_Recent_Posts', array(
                            'title' => __('Latest Posts', 'code-dev'),
                            'number' => 3
                            )); ?>
                    </div>
                </div>
        </main>
    </div>
</div>                    
<?php get_footer(); ?>