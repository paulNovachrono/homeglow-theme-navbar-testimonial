<?php get_header(); ?>
<main id="main">

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="mb-6">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
            </div>
        <?php endif; ?>

        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>

</main>
<?php get_footer(); ?>
