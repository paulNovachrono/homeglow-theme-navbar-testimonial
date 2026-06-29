<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="fixed inset-x-0 top-0 z-50 flex justify-center pt-4" id="site-header">
    <div id="navBody" class="hidden lg:flex items-center justify-between bg-transparent rounded-full px-6 py-3 transition-all duration-500">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 shrink-0">
            <span class="text-xl font-bold text-green tracking-tight"><?php bloginfo('name'); ?></span>
        </a>

        <nav class="flex items-center" id="desktopNav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex items-center gap-3 list-none m-0 p-0',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
                'depth' => 1,
            ]);
            ?>
        </nav>

        <div class="flex items-center gap-3 shrink-0">
            <a href="/contact" class="bg-accent text-white font-semibold px-5 py-2 rounded-full hover:bg-accent/90 transition-all duration-300 text-sm">Request a Free Estimate</a>
        </div>
    </div>

    <div id="mobileNavBody" class="lg:hidden flex w-full flex-col bg-transparent rounded-2xl px-4 py-3 transition-all duration-500">
        <div class="flex items-center justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2">
                <span class="text-xl font-bold text-green tracking-tight"><?php bloginfo('name'); ?></span>
            </a>

            <button class="relative z-50 w-8 h-8 flex flex-col items-center justify-center gap-1.5" id="mobileMenuBtn" aria-label="Toggle menu">
                <span class="nav-bar block w-6 h-0.5 bg-green rounded transition-all duration-300 origin-center"></span>
                <span class="nav-bar block w-6 h-0.5 bg-green rounded transition-all duration-300 origin-center"></span>
                <span class="nav-bar block w-6 h-0.5 bg-green rounded transition-all duration-300 origin-center"></span>
            </button>
        </div>
    </div>
</header>

<div class="fixed inset-0 z-40 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300" id="mobileOverlay"></div>

<div class="fixed top-0 right-0 z-40 h-full w-72 bg-white shadow-2xl translate-x-full transition-transform duration-300 ease-in-out" id="mobileDrawer">
    <div class="pt-24 px-6">
        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'space-y-1 list-none m-0 p-0',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
                'depth' => 1,
            ]);
            ?>
            <a href="/contact" class="mt-6 block text-center bg-accent text-white font-semibold px-6 py-3 rounded-full hover:bg-accent/90 transition-all duration-300 text-sm">Request a Free Estimate</a>
        </nav>
    </div>
</div>
