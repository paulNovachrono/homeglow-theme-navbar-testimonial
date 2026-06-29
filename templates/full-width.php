<?php
/*
Template Name: Full Width
*/
get_header();
?>
<main id="main">

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>

</main>
<?php get_footer(); ?>
