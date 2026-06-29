<?php get_header(); ?>
<main id="main">

<?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('border rounded-lg p-6'); ?>>
                <h2 class="text-xl font-semibold mb-2">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="text-gray-600 mb-4">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline">
                    Read more &rarr;
                </a>
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
    <p><?php esc_html_e('No posts found.', 'ishan'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
