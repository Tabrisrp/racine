        </div>
    </main>
    <footer role="contentinfo">
        <div class="mw1140p center">
            <nav role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'unstyled pln footer-menu' ) ); ?>
            </nav>
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>