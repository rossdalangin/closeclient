<?php
/**
 * The footer for our theme
 */
?>
    <footer class="footer">
        <div class="container">
            <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright_text', '&copy; ' . date('Y') . ' CloseClient.com | We Build Websites That Close Clients.' ) ); ?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
