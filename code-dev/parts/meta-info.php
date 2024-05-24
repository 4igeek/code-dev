<div class="meta-info">
    <p>
        <?php esc_html_e('Posted in', 'code-dev');?> <?php echo esc_html( get_the_date() ); ?> <?php _e('by', 'code-dev');?> <?php the_author_posts_link(); ?> 
        <?php if(has_category()):?>
            <?php esc_html_e('Categories', 'code-dev');?>: <?php the_category(' '); ?>
        <?php endif; ?>
        <?php if(has_tag()):?>
            <?php esc_html_e('Tags', 'code-dev');?>: <?php the_tags('', ', '); ?> 
        <?php endif; ?>
    </p>     
</div>