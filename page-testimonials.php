<?php
/*
Template Name: Testimonials
*/
get_header();

$testimonials = new WP_Query([
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
]);
?>


    <!-- Hero -->
    <section class="relative w-full min-h-[60vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="Testimonials">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">What They Say</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Grid -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <?php if ($testimonials->have_posts()) : ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post();
                    $name   = get_post_meta(get_the_ID(), '_testimonial_name', true);
                    $role   = get_post_meta(get_the_ID(), '_testimonial_role', true);
                    $text   = get_post_meta(get_the_ID(), '_testimonial_text', true);
                    $rating = (int) get_post_meta(get_the_ID(), '_testimonial_rating', true);
                    $rating = $rating ?: 5;
                    $avatar = get_avatar_url($name ?: '', ['size' => 64]);
                ?>
                <div class="flex flex-col rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 h-full">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6 h-full">
                        <!-- Stars -->
                        <div class="flex gap-1 mb-3">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <svg class="w-5 h-5 <?php echo $i < $rating ? 'text-accent' : 'text-gray-300'; ?>" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <!-- Quote -->
                        <div class="flex-1">
                            <svg class="w-8 h-8 text-green/20 mb-2" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            <p class="text-gray-600 leading-relaxed italic"><?php echo esc_html($text); ?></p>
                        </div>
                        <!-- Author -->
                        <div class="flex items-center gap-3 mt-4 pt-4 border-t border-gray-100">
                            <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>" class="w-10 h-10 rounded-full object-cover bg-gray-200">
                            <div>
                                <p class="font-bold text-gray-900 text-sm"><?php echo esc_html($name ?: get_the_title()); ?></p>
                                <?php if ($role) : ?>
                                    <p class="text-gray-500 text-xs"><?php echo esc_html($role); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-gray-500 text-lg">No testimonials yet.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Get Started</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Ready to Be Our Next Happy Client?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Contact us today for a free consultation and estimate. We'd love to work with you.</p>
            <a href="/contact" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                Get a Free Estimate <span>→</span>
            </a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
