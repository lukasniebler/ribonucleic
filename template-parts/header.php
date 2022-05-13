<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
        /*the_custom_logo();*/
        if (is_front_page() && is_home()) :
        ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
        <?php
        else :
        ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
        <?php
        endif;
        $ribonucleic_description = get_bloginfo('description', 'display');
        if ($ribonucleic_description || is_customize_preview()) :
        ?>
            <p class="site-description"><?php echo $ribonucleic_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                        ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->
    <div>
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </div>
</header><!-- #masthead -->