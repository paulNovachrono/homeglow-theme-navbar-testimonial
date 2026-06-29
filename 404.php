<?php get_header(); ?>
<main id="main">

<div class="text-center py-20">
    <h1 class="text-6xl font-bold text-gray-300 mb-4">404</h1>
    <p class="text-xl text-gray-600 mb-8"><?php esc_html_e('Page not found.', 'ishan'); ?></p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
        &larr; Back to Home
    </a>
</div>

</main>
<?php get_footer(); ?>
