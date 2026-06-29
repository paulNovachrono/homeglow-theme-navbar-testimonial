<?php get_header(); ?>
<main id="main">

<h1 class="text-3xl font-bold mb-8">
    <?php printf(esc_html__('Search Results for: %s', 'ishan'), get_search_query()); ?>
</h1>

<?php if (have_posts()) : ?>
    <div class="space-y-6">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('border rounded-lg p-6'); ?>>
                <h2 class="text-xl font-semibold mb-2">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="text-gray-600"><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    </div>

    <div class="mt-8">
        <?php
        the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
        ]);
        ?>
    </div>
<?php else : ?>
    <p><?php esc_html_e('No results found.', 'ishan'); ?></p>
    <?php get_search_form(); ?>
<?php endif; ?>

</main>
<?php get_footer(); ?>
