<?php get_header(); ?>
<main id="main">

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>

        <div class="text-gray-500 text-sm mb-6">
            <span><?php echo get_the_date(); ?></span>
            <span class="mx-2">|</span>
            <span><?php the_category(', '); ?></span>
        </div>

        <?php if (has_post_thumbnail()) : ?>
            <div class="mb-6">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
            </div>
        <?php endif; ?>

        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>

        <div class="mt-8 pt-6 border-t">
            <?php
            the_post_navigation([
                'prev_text' => '&larr; %title',
                'next_text' => '%title &rarr;',
            ]);
            ?>
        </div>
    </article>
<?php endwhile; ?>

</main>
<?php get_footer(); ?>
