        <!-- -->
        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p><?php echo esc_html(get_theme_mod('set_copyright', __('Copyright © 2024 - All rights reserved', 'code-dev'))); ?></p>
                </div>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'code_dev_footer_menu', 'depth' => 1)); ?>
                </nav>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>