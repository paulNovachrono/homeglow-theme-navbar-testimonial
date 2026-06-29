<?php get_header(); ?>


<h1 class="text-3xl font-bold mb-8">
    <?php
    if (is_category()) {
        single_cat_title();
    } elseif (is_tag()) {
        single_tag_title();
    } elseif (is_author()) {
        the_archive_title();
    } else {
        the_archive_title();
    }
    ?>
</h1>

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

</main>
<?php get_footer(); ?>
