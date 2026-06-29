<?php get_header(); ?>


<?php while (have_posts()) : the_post();
    $terms = get_the_terms(get_the_ID(), 'project_category');
    $term_name = '';
    if ($terms && !is_wp_error($terms)) {
        $term_name = $terms[0]->name;
    }
    $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/assets/images/heroBg.jpg';

    $overview   = get_post_meta(get_the_ID(), '_project_overview', true);
    $problem    = get_post_meta(get_the_ID(), '_project_problem', true);
    $solution   = get_post_meta(get_the_ID(), '_project_solution', true);
    $steps      = get_post_meta(get_the_ID(), '_project_steps', true);
    $steps_arr  = $steps ? array_filter(array_map('trim', explode("\n", $steps))) : [];
    $before_img = get_post_meta(get_the_ID(), '_project_before_img', true);
    $after_img  = get_post_meta(get_the_ID(), '_project_after_img', true);
    $before_img = $before_img ?: get_template_directory_uri() . '/assets/images/before.avif';
    $after_img  = $after_img ?: get_template_directory_uri() . '/assets/images/after.avif';
?>

    <!-- Hero -->
    <section class="relative w-full min-h-[50vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover" src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <?php if ($term_name) : ?>
                    <span class="text-accent font-semibold uppercase tracking-widest text-sm"><?php echo esc_html($term_name); ?></span>
                <?php endif; ?>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <!-- Project Details + Before/After -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left: Before/After Slider (sticky) -->
                <div class="lg:sticky lg:top-28 lg:self-start">
                    <span class="text-accent font-semibold uppercase tracking-widest text-sm">Transformation</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Before & After</h2>
                    <?php get_template_part('parts/before-after-slider', null, [
                        'before' => esc_url($before_img),
                        'after'  => esc_url($after_img),
                    ]); ?>
                </div>
                <!-- Right: Project Details -->
                <div class="flex flex-col rounded-4xl bg-linear-to-bl from-green to-green/70 p-2">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-8 gap-6">
                        <?php if ($term_name) : ?>
                            <p class="font-semibold italic bg-accent/20 text-accent px-3 py-1.5 rounded-xl text-sm w-fit"><?php echo esc_html($term_name); ?></p>
                        <?php endif; ?>
                        <h2 class="text-3xl font-bold text-gray-900"><?php the_title(); ?></h2>

                        <?php if ($overview) : ?>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Overview
                            </h3>
                            <p class="text-gray-600 mt-2 leading-relaxed"><?php echo nl2br(esc_html($overview)); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if ($problem) : ?>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4.5c-.77-.833-2.694-.833-3.464 0L3.34 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
                                Problem Statement
                            </h3>
                            <p class="text-gray-600 mt-2 leading-relaxed"><?php echo nl2br(esc_html($problem)); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if ($solution) : ?>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Solution
                            </h3>
                            <p class="text-gray-600 mt-2 leading-relaxed"><?php echo nl2br(esc_html($solution)); ?></p>
                        </div>
                        <?php endif; ?>

                        <?php if ($steps_arr) : ?>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 flex items-center gap-2">
                                <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                Steps We Followed
                            </h3>
                            <ol class="mt-2 space-y-2">
                                <?php $i = 1; foreach ($steps_arr as $step) : ?>
                                <li class="flex items-start gap-3">
                                    <span class="w-6 h-6 rounded-full bg-green text-white text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5"><?php echo $i++; ?></span>
                                    <span class="text-gray-600 leading-relaxed"><?php echo esc_html($step); ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                        <?php endif; ?>
                    </div>
                    <a href="/contact" class="py-3 text-center text-base italic font-semibold text-white/90 hover:text-white transition">Get a Free Estimate →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <?php
    $related = get_posts([
        'post_type' => 'project',
        'posts_per_page' => 3,
        'post__not_in' => [get_the_ID()],
        'tax_query' => $terms ? [[
            'taxonomy' => 'project_category',
            'field' => 'term_id',
            'terms' => wp_list_pluck($terms, 'term_id'),
        ]] : [],
    ]);
    if ($related) : ?>
    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">More Projects</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Related Projects</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($related as $post) : setup_postdata($post);
                    $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_template_directory_uri() . '/assets/images/heroBg.jpg';
                    $r_terms = get_the_terms(get_the_ID(), 'project_category');
                ?>
                <a href="<?php the_permalink(); ?>" class="block">
                    <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1 h-full">
                        <div class="flex w-full flex-col rounded-3xl bg-white overflow-hidden h-full">
                            <div class="w-full aspect-[4/3] overflow-hidden bg-gray-200 rounded-2xl">
                                <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                            </div>
                            <div class="p-5 flex items-center justify-center flex-1">
                                <h3 class="text-xl font-bold text-gray-900 text-center"><?php the_title(); ?></h3>
                            </div>
                        </div>
                        <p class="py-2 text-center text-sm italic font-semibold text-white/90">View Project →</p>
                    </div>
                </a>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Get Started</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Interested in a Similar Project?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Contact us today for a free consultation and estimate tailored to your needs.</p>
            <a href="/contact" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                Get a Free Estimate <span>→</span>
            </a>
        </div>
    </section>

<?php endwhile; ?>

</main>
<?php get_footer(); ?>
