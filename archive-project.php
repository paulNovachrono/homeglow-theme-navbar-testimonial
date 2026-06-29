<?php
/*
Template Name: Projects
*/
get_header(); ?>

    <!-- Hero -->
    <section class="relative w-full min-h-[60vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="Our Projects">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Work</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3">Our Projects</h1>
                <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl">Explore our portfolio of completed projects, from kitchen remodels to custom home builds.</p>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <!-- Heading -->
            <div class="text-center mb-4">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Work</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Recent Projects</h2>
                <p class="text-lg text-gray-600 mt-3 max-w-2xl mx-auto">Take a look at some of our recent transformations.</p>
            </div>

            <!-- Category Tabs -->
            <?php
            $tabs = [
                'all' => 'All',
                'kitchen' => 'Kitchen',
                'bathroom' => 'Bathroom',
                'flooring' => 'Flooring',
                'painting' => 'Painting',
                'custom-homes' => 'Custom Homes',
            ];
            ?>
            <div class="flex flex-wrap justify-center gap-2 mb-12">
                <?php $first = true; foreach ($tabs as $slug => $label) : ?>
                    <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 <?php echo $first ? 'bg-green text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300'; ?>" data-tab="<?php echo esc_attr($slug); ?>"><?php echo esc_html($label); ?></button>
                <?php $first = false; endforeach; ?>
            </div>

            <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="projectGrid">
                <?php while (have_posts()) : the_post();
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    $term_slugs = '';
                    if ($terms && !is_wp_error($terms)) {
                        $slugs = wp_list_pluck($terms, 'slug');
                        $term_slugs = implode(' ', $slugs);
                    }
                    $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/images/heroBg.jpg';
                ?>
                <a href="<?php the_permalink(); ?>" class="block project-card" data-category="<?php echo esc_attr($term_slugs); ?>">
                    <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1 h-full">
                        <div class="flex w-full flex-col rounded-3xl bg-white overflow-hidden h-full">
                            <div class="w-full aspect-[4/3] overflow-hidden bg-gray-200 rounded-2xl">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover rounded-2xl transition duration-300 hover:scale-105">
                            </div>
                            <div class="p-5 flex items-center justify-center flex-1">
                                <h3 class="text-xl font-bold text-gray-900 text-center"><?php the_title(); ?></h3>
                            </div>
                        </div>
                        <p class="py-2 text-center text-sm italic font-semibold text-white/90">View Project →</p>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>

            <div class="mt-12 flex justify-center">
                <?php
                the_posts_pagination([
                    'mid_size' => 2,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'class' => 'flex gap-2',
                ]);
                ?>
            </div>

            <?php else : ?>
                <div class="text-center py-20">
                    <p class="text-gray-500 text-lg">No projects found.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Start Your Project</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Ready to Transform Your Home?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Let's bring your vision to life. Get a free estimate and consultation today.</p>
            <a href="/contact" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                Get a Free Estimate <span>→</span>
            </a>
        </div>
    </section>

</main>
<?php get_footer(); ?>
