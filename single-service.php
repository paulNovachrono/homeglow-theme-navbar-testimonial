<?php get_header(); ?>

<?php while (have_posts()) : the_post();
    $subtitle = get_post_meta(get_the_ID(), '_service_subtitle', true);
    $features = get_post_meta(get_the_ID(), '_service_features', true);
    $features_arr = $features ? array_filter(array_map('trim', explode("\n", $features))) : [];
    $hero_img  = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/images/heroBg.jpg';
    $content_img = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '';
?>

    <!-- Hero -->
    <section class="relative w-full min-h-[50vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover" src="<?php echo esc_url($hero_img); ?>" alt="<?php the_title_attribute(); ?>">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Service</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3"><?php the_title(); ?></h1>
                <?php if ($subtitle) : ?>
                    <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl text-white/90"><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- What We Do / How We Do — Image + Text -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <?php if ($content_img) : ?>
                <div class="rounded-4xl overflow-hidden">
                    <img src="<?php echo esc_url($content_img); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                </div>
                <?php endif; ?>
                <div>
                    <span class="text-accent font-semibold uppercase tracking-widest text-sm">What We Do</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6"><?php the_title(); ?></h2>
                    <div class="text-gray-600 leading-relaxed space-y-4">
                        <?php the_content(); ?>
                    </div>
                    <?php if ($features_arr) : ?>
                    <div class="mt-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Key Features</h3>
                        <ul class="space-y-2">
                            <?php foreach ($features_arr as $f) : ?>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-green flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span class="text-gray-700"><?php echo esc_html($f); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <?php
    $related = new WP_Query([
        'post_type' => 'project',
        'posts_per_page' => 3,
        'post__not_in' => [get_the_ID()],
    ]);
    if ($related->have_posts()) : ?>
    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Work</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Related Projects</h2>
                <p class="text-lg text-gray-600 mt-3 max-w-2xl mx-auto">See examples of our work in this category.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($related->have_posts()) : $related->the_post();
                    $r_thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/images/heroBg.jpg';
                ?>
                <a href="<?php the_permalink(); ?>" class="block">
                    <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1 h-full">
                        <div class="flex w-full flex-col rounded-3xl bg-white overflow-hidden h-full">
                            <div class="w-full aspect-[4/3] overflow-hidden bg-gray-200 rounded-2xl">
                                <img src="<?php echo esc_url($r_thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 flex items-center justify-center flex-1">
                                <h3 class="text-xl font-bold text-gray-900 text-center"><?php the_title(); ?></h3>
                            </div>
                        </div>
                        <p class="py-2 text-center text-sm italic font-semibold text-white/90">View Project →</p>
                    </div>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Get Started</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Ready to Get Started?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Contact us today for a free consultation and estimate tailored to your needs.</p>
            <a href="/contact" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                Get a Free Estimate <span>→</span>
            </a>
        </div>
    </section>

<?php endwhile; ?>

</main>
<?php get_footer(); ?>
