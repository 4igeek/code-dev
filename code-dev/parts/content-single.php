<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php esc_html_e('Posted in', 'code-dev');?> <?php echo esc_html( get_the_date() ); ?> by <?php the_author_posts_link(); ?></p>
            <?php if(has_category()):?>
                <p><?php esc_html_e('Categories', 'code-dev');?>: <?php the_category(' '); ?></p>
            <?php endif; ?>
            <?php if(has_tag()):?>
                <p><?php esc_html_e('Tags', 'code-dev');?>: <?php the_tags('', ', '); ?></p> 
            <?php endif; ?>   
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>