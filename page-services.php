<?php
/*
Template Name: Services
*/
get_header();

$services = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
]);
?>


    <!-- Hero -->
    <section class="relative w-full min-h-[60vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="Our Services">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">What We Do</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <?php if ($services->have_posts()) : ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($services->have_posts()) : $services->the_post();
                    $subtitle = get_post_meta(get_the_ID(), '_service_subtitle', true);
                    $features = get_post_meta(get_the_ID(), '_service_features', true);
                    $features_arr = $features ? array_filter(array_map('trim', explode("\n", $features))) : [];
                    $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/images/heroBg.jpg';
                ?>
                <a href="<?php the_permalink(); ?>" class="block">
                    <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1 h-full">
                        <div class="flex w-full flex-col rounded-3xl bg-white overflow-hidden h-full">
                            <div class="w-full aspect-[4/3] overflow-hidden bg-gray-200 rounded-2xl">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 flex flex-col gap-3 flex-1">
                                <h3 class="text-xl font-bold text-gray-900"><?php the_title(); ?></h3>
                                <?php if ($subtitle) : ?>
                                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo esc_html($subtitle); ?></p>
                                <?php endif; ?>
                                <?php if ($features_arr) : ?>
                                    <ul class="space-y-1.5 mt-auto">
                                        <?php foreach (array_slice($features_arr, 0, 3) as $f) : ?>
                                        <li class="flex items-center gap-2 text-sm text-gray-600">
                                            <svg class="w-4 h-4 text-green flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                            <?php echo esc_html($f); ?>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php if (count($features_arr) > 3) : ?>
                                        <li class="text-sm text-accent font-semibold">+<?php echo count($features_arr) - 3; ?> more</li>
                                        <?php endif; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <p class="py-2 text-center text-sm italic font-semibold text-white/90">Learn More →</p>
                    </div>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-gray-500 text-lg">No services found.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Get Started</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Need a Different Service?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Contact us to discuss your specific needs. We offer custom solutions for every project.</p>
            <a href="/contact" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                Get a Free Estimate <span>→</span>
            </a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
