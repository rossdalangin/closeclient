<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></div>
            <nav class="nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '<ul>%3$s</ul>',
                ) );
                ?>
            </nav>
            <a href="<?php echo esc_url( get_theme_mod( 'header_button_url', home_url( '/contact' ) ) ); ?>" class="btn btn-primary">
                <?php echo esc_html( get_theme_mod( 'header_button_text', 'Book a Free Call' ) ); ?>
            </a>
            <div class="mobile-menu-toggle">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-nav">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '<ul>%3$s</ul>',
        ) );
        ?>
    </div>
