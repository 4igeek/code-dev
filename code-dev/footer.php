        <!-- -->
        <footer class="site-footer">
            <div class="container">
                <div class="copyright">
                    <p>Copyright © <?php echo date("Y"); ?> - All rights reserved</p>
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