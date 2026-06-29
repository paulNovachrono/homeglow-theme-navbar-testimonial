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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post();
                    $name   = get_post_meta(get_the_ID(), '_testimonial_name', true);
                    $role   = get_post_meta(get_the_ID(), '_testimonial_role', true);
                    $text   = get_post_meta(get_the_ID(), '_testimonial_text', true);
                    $rating = (int) get_post_meta(get_the_ID(), '_testimonial_rating', true);
                    $rating = $rating ?: 5;
                    $avatar = get_avatar_url($name ?: '', ['size' => 64]);
                ?>
                <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 h-full flex flex-col">
                    <div class="flex items-center gap-1.5 mb-3">
                        <div class="flex gap-0.5">
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <svg class="w-4 h-4 <?php echo $i < $rating ? 'text-accent' : 'text-gray-200'; ?>" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                        <span class="text-xs font-medium text-gray-400 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M21.35 11.1H12.18V13.83H18.69C18.36 15.68 16.95 17.21 14.94 18L15.27 19.9L17.08 20.15C19.7 18.27 21.35 15.13 21.35 11.1Z"/><path d="M12 21C15.24 21 18.01 19.85 20.04 17.79L17.08 20.15C15.47 21.81 13.21 22.5 11.05 22C7.64 21.35 4.96 18.56 4.38 15.14L4.69 15.19L6.55 14.3C6.96 16.41 8.8 18.01 11.05 18.25C12.39 18.43 13.7 18.13 14.94 17.45L17.08 20.15C15.81 22.05 13.97 23 12 23C8.13 23 4.96 20.54 3.5 17.27L4.38 15.14C3.08 12.05 4.04 8.47 6.96 6.55C8.25 5.66 9.79 5.11 11.5 5.11C13.81 5.11 15.87 6.04 17.41 7.54L20.04 4.91C17.49 2.55 14.16 1 11.05 1C6.03 1 1.75 4.5 1 9.72L4.38 15.14C5.53 11.89 8.87 9.55 12 9.55C13.34 9.55 14.61 9.92 15.7 10.55L18.69 7.87C16.62 6.18 13.96 5.11 11.07 5.11Z"/></svg>
                            Google Review
                        </span>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm text-gray-600 leading-relaxed">"<?php echo esc_html($text); ?>"</p>
                    </div>
                    <div class="mt-4 flex items-center gap-3 pt-3 border-t border-gray-100">
                        <img src="<?php echo esc_url($avatar); ?>" alt="<?php echo esc_attr($name); ?>" class="w-9 h-9 rounded-full object-cover flex-shrink-0 bg-gray-200">
                        <div class="min-w-0">
                            <p class="font-semibold text-gray-900 text-sm truncate"><?php echo esc_html($name ?: get_the_title()); ?></p>
                            <?php if ($role) : ?>
                                <p class="text-xs text-gray-500 truncate"><?php echo esc_html($role); ?></p>
                            <?php endif; ?>
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
