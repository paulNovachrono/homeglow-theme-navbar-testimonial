<?php get_header(); ?>
<main id="main">

    <section class="relative w-full min-h-[calc(100vh-5rem)] overflow-hidden flex flex-col pt-20">
        <!-- Hero Image -->
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="Hero Image">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <!-- texts and buttons -->
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white flex flex-col gap-4">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold">Transforming Houses <br> <span class="text-accent">into
                        <strong class="italic">Dream Homes</strong></span></h1>
                <p class="text-lg sm:text-xl lg:text-2xl italic">Expert remodeling, renovations, flooring, painting, <br class="hidden sm:block">
                    and custom home builds tailored to your lifestyle.</p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-accent hover:bg-accent/90 text-white font-bold py-3 px-6 rounded-lg transition duration-300 cursor-pointer">
                        REQUEST A FREE ESTIMATE →
                    </button>
                    <button class="bg-transparent hover:bg-white/20 text-accent font-bold py-3 px-6 rounded-lg border-2 border-accent transition duration-300 cursor-pointer">
                        VIEW OUR PROJECTS <span class="">→</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Counters -->
        <div class="relative z-10 bg-green text-white py-6 rounded-tr-2xl w-fit max-w-full">
            <div class="px-4 md:px-8 flex flex-wrap justify-between gap-8">
                <div class="flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/reputation.png" alt="" class="w-10 h-10 flex-shrink-0">
                    <div>
                        <div class="counter-value text-4xl font-bold text-accent" data-target="15">0</div>
                        <div class="text-lg">Years of Experience</div>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/check.png" alt="" class="w-10 h-10 flex-shrink-0">
                    <div>
                        <div class="counter-value text-4xl font-bold text-accent" data-target="500">0</div>
                        <div class="text-lg">Projects Completed</div>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/rating.png" alt="" class="w-10 h-10 flex-shrink-0">
                    <div>
                        <div class="counter-value text-4xl font-bold text-accent" data-target="100">0</div>
                        <div class="text-lg">Satisfaction Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Work -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Before/After Slider -->
            <?php get_template_part('parts/before-after-slider', null, [
                'before' => get_template_directory_uri() . '/assets/images/before.avif',
                'after'  => get_template_directory_uri() . '/assets/images/after.avif',
            ]); ?>

            <!-- Right: Content -->
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Kitchen Remodeling</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 leading-tight">Beautiful Kitchen <br>Built for Living</h2>
                <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                    We transformed this outdated kitchen into a modern, functional space with premium finishes, custom cabinetry, and thoughtful details throughout.
                </p>

                <ul class="mt-6 space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Custom shaker-style cabinetry with soft-close hinges</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Quartz countertops with waterfall island</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Under-cabinet LED lighting & pendant fixtures</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Herringbone backsplash tile & hardwood flooring</span>
                    </li>
                </ul>

                <a href="#" class="inline-flex items-center gap-2 mt-8 bg-accent hover:bg-accent/90 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Explore Kitchen Projects <span>→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Work: Bathroom -->
    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Content -->
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Bathroom Remodeling</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 leading-tight">Spa-Like Bathroom <br>Designed for Relaxation</h2>
                <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                    This dated bathroom was reimagined into a luxurious retreat with modern fixtures, elegant tile work, and a spa-inspired layout.
                </p>

                <ul class="mt-6 space-y-3">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Floating double vanity with quartz top & LED mirror</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Frameless glass walk-in shower with bench</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Heated flooring & rainfall showerhead</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 mt-0.5 flex-shrink-0 text-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Porcelain slab walls & recessed storage niches</span>
                    </li>
                </ul>

                <a href="#" class="inline-flex items-center gap-2 mt-8 bg-accent hover:bg-accent/90 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Explore Bathroom Projects <span>→</span>
                </a>
            </div>

            <!-- Right: Before/After Slider -->
            <?php get_template_part('parts/before-after-slider', null, [
                'before' => get_template_directory_uri() . '/assets/images/bathroom-before.avif',
                'after'  => get_template_directory_uri() . '/assets/images/bathroom-after.avif',
            ]); ?>
        </div>
    </section>

    <!-- Flooring Process -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left: Process Steps -->
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Flooring Solutions</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 mb-10">How Our Flooring<br>Process Works</h2>

                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">1</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Consultation</h3>
                            <p class="text-gray-600 mt-1">We understand your needs &amp; space.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">2</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Material Selection</h3>
                            <p class="text-gray-600 mt-1">Choose from premium flooring options.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">3</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Professional Installation</h3>
                            <p class="text-gray-600 mt-1">Expert installation with attention to detail.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">4</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Final Inspection</h3>
                            <p class="text-gray-600 mt-1">Quality check to ensure perfect results.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Images & Flooring Types -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="bg-neutral-200 rounded-2xl p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hardwood.jpg" alt="" class="w-full h-48 object-cover rounded-xl">
                    <span class="block text-center text-green font-semibold mt-2 text-2xl">Hardwood</span>
                </div>
                <div class="bg-neutral-200 rounded-2xl p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vinyl.avif" alt="" class="w-full h-48 object-cover rounded-xl">
                    <span class="block text-center text-green font-semibold mt-2 text-2xl">Vinyl</span>
                </div>
                <div class="bg-neutral-200 rounded-2xl p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Tile.avif" alt="" class="w-full h-48 object-cover rounded-xl">
                    <span class="block text-center text-green font-semibold mt-2 text-2xl">Tile</span>
                </div>
                <div class="bg-neutral-200 rounded-2xl p-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Laminate.avif" alt="" class="w-full h-48 object-cover rounded-xl">
                    <span class="block text-center text-green font-semibold mt-2 text-2xl ">Laminate</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Before/After Slider -->
            <?php get_template_part('parts/before-after-slider', null, [
                'before' => get_template_directory_uri() . '/assets/images/paint-before.png',
                'after'  => get_template_directory_uri() . '/assets/images/paint-after.png',
            ]); ?>

            <!-- Right: Content -->
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Paint &amp; Drywalls</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 leading-tight">Flawless Finishes<br>for Every Room</h2>
                <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                    From smooth drywall installation to precision painting, we deliver flawless finishes that transform your space.
                </p>

                <div class="grid grid-cols-2 gap-6 mt-8">
                    <div class="text-center">
                        <svg class="w-10 h-10 text-green mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                        <span class="block text-gray-800 font-semibold mt-2">Interior Painting</span>
                    </div>
                    <div class="text-center">
                        <svg class="w-10 h-10 text-green mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        <span class="block text-gray-800 font-semibold mt-2">Exterior Painting</span>
                    </div>
                    <div class="text-center">
                        <svg class="w-10 h-10 text-green mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                        <span class="block text-gray-800 font-semibold mt-2">Drywall Repair</span>
                    </div>
                    <div class="text-center">
                        <svg class="w-10 h-10 text-green mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                        <span class="block text-gray-800 font-semibold mt-2">Texture Finishing</span>
                    </div>
                </div>

                <a href="#" class="inline-flex items-center gap-2 mt-8 bg-accent hover:bg-accent/90 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Explore Painting Services <span>→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-white">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-14">
                <div class="text-center">
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                    <h4 class="text-lg font-bold mt-3">Planning</h4>
                    <p class="text-sm opacity-80 mt-1">We plan based on your needs &amp; budget.</p>
                </div>
                <div class="text-center">
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7M4 7a2 2 0 012-2h12a2 2 0 012 2M4 7h16"/>
                    </svg>
                    <h4 class="text-lg font-bold mt-3">Design</h4>
                    <p class="text-sm opacity-80 mt-1">Custom designs tailored to your lifestyle.</p>
                </div>
                <div class="text-center">
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                    <h4 class="text-lg font-bold mt-3">Construction</h4>
                    <p class="text-sm opacity-80 mt-1">Quality construction with consistent updates.</p>
                </div>
                <div class="text-center">
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h4 class="text-lg font-bold mt-3">Final Handover</h4>
                    <p class="text-sm opacity-80 mt-1">On-time delivery with complete satisfaction.</p>
                </div>
            </div>

            <div class="text-center">
                <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Priorities</span>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight">Ready to Transform Your Home?</h2>
                <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto opacity-90">Let's bring your vision to life. Get a free estimate and consultation today.</p>
                <a href="#" class="inline-flex items-center gap-2 mt-8 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                    Get a Free Estimate <span>→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Projects -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Work</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Recent Projects</h2>
            </div>

            <!-- Tabs -->
            <div class="flex flex-wrap justify-center gap-2 mb-10" id="projectTabs">
                <button class="tab-btn active px-6 py-2 rounded-full font-semibold transition duration-300 bg-green text-white" data-tab="all">All</button>
                <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="kitchen">Kitchen</button>
                <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="bathroom">Bathroom</button>
                <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="flooring">Flooring</button>
                <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="painting">Painting</button>
                <button class="tab-btn px-6 py-2 rounded-full font-semibold transition duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-tab="custom">Custom Homes</button>
            </div>

            <!-- Project Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="projectGrid">
                <!-- Kitchen -->
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="kitchen">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/before.avif" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Modern Kitchen Makeover</h3>
                    <p class="text-gray-600 mt-1 text-sm">Complete kitchen renovation with custom cabinetry and quartz countertops.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="kitchen">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/after.avif" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Open Concept Kitchen</h3>
                    <p class="text-gray-600 mt-1 text-sm">Opened up walls and installed a large waterfall island.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>

                <!-- Bathroom -->
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="bathroom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bathroom-before.avif" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Spa Bathroom Retreat</h3>
                    <p class="text-gray-600 mt-1 text-sm">Luxurious bathroom with frameless shower and floating vanity.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="bathroom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bathroom-after.avif" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Guest Bathroom Update</h3>
                    <p class="text-gray-600 mt-1 text-sm">Complete refresh with new tile, vanity, and lighting.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>

                <!-- Flooring -->
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="flooring">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hardwood.jpg" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Hardwood Flooring Installation</h3>
                    <p class="text-gray-600 mt-1 text-sm">White oak hardwood throughout the main level.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="flooring">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vinyl.avif" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Luxury Vinyl Plank Flooring</h3>
                    <p class="text-gray-600 mt-1 text-sm">Waterproof vinyl plank installation in basement.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>

                <!-- Painting -->
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="painting">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paint-before.png" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Interior Painting Refresh</h3>
                    <p class="text-gray-600 mt-1 text-sm">Full interior painting with premium matte finish.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="painting">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/paint-after.png" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Exterior Painting Project</h3>
                    <p class="text-gray-600 mt-1 text-sm">Two-story home exterior painting with durable paint.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>

                <!-- Custom Homes -->
                <div class="project-card bg-gray-50 border border-gray-200 rounded-2xl p-4 shadow-sm" data-category="custom">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="" class="w-full h-56 object-cover rounded-xl">
                    <h3 class="text-xl font-bold text-gray-900 mt-4">Custom Home Build</h3>
                    <p class="text-gray-600 mt-1 text-sm">New construction custom home with modern open layout.</p>
                    <a href="#" class="inline-flex items-center gap-1 text-accent font-semibold mt-3 text-sm hover:underline">Visit Project →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 md:py-24 bg-gray-100 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Testimonials</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">What Our Clients Say</h2>
            </div>

            <div class="relative" id="testimonialTrack">
                <div class="flex gap-5 overflow-x-auto" id="testimonialSlider">
                    <?php
                    $reviews = [
                        ['name' => 'Sarah M.', 'project' => 'Kitchen Renovation', 'img' => 'https://i.pravatar.cc/150?u=sarah', 'text' => 'Ishan transformed our outdated kitchen into a stunning modern space. The team was professional, communicative, and completed the project ahead of schedule. We couldn\'t be happier with the results!'],
                        ['name' => 'James D.', 'project' => 'Bathroom Remodel', 'img' => 'https://i.pravatar.cc/150?u=james', 'text' => 'We hired Ishan for a full bathroom remodel and they exceeded our expectations. Attention to detail was impeccable and the craftsmanship is top-notch. Highly recommend!'],
                        ['name' => 'Michael K.', 'project' => 'Flooring Installation', 'img' => 'https://i.pravatar.cc/150?u=michael', 'text' => 'The flooring installation was flawless. Ishan\'s team was punctual, respectful of our home, and the quality of work is outstanding. Our new hardwood floors look amazing.'],
                        ['name' => 'Emily R.', 'project' => 'Custom Home Build', 'img' => 'https://i.pravatar.cc/150?u=emily', 'text' => 'Our custom home build was a dream come true thanks to Ishan. From foundation to finishing touches, every detail was handled with care and professionalism. Truly a 5-star experience!'],
                        ['name' => 'Robert L.', 'project' => 'Interior Painting', 'img' => 'https://i.pravatar.cc/150?u=robert', 'text' => 'Ishan painted our entire home interior and the transformation is incredible. The team was clean, efficient, and the finish is flawless. We\'ve already recommended them to all our neighbors!'],
                    ];
                    foreach ($reviews as $r) : ?>
                        <div class="testimonial-card flex-shrink-0 w-[85vw] md:w-80 bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                            <div class="flex items-center gap-1.5 mb-3">
                                <div class="flex gap-0.5">
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-xs font-medium text-gray-400 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M21.35 11.1H12.18V13.83H18.69C18.36 15.68 16.95 17.21 14.94 18L15.27 19.9L17.08 20.15C19.7 18.27 21.35 15.13 21.35 11.1Z"/><path d="M12 21C15.24 21 18.01 19.85 20.04 17.79L17.08 20.15C15.47 21.81 13.21 22.5 11.05 22C7.64 21.35 4.96 18.56 4.38 15.14L4.69 15.19L6.55 14.3C6.96 16.41 8.8 18.01 11.05 18.25C12.39 18.43 13.7 18.13 14.94 17.45L17.08 20.15C15.81 22.05 13.97 23 12 23C8.13 23 4.96 20.54 3.5 17.27L4.38 15.14C3.08 12.05 4.04 8.47 6.96 6.55C8.25 5.66 9.79 5.11 11.5 5.11C13.81 5.11 15.87 6.04 17.41 7.54L20.04 4.91C17.49 2.55 14.16 1 11.05 1C6.03 1 1.75 4.5 1 9.72L4.38 15.14C5.53 11.89 8.87 9.55 12 9.55C13.34 9.55 14.61 9.92 15.7 10.55L18.69 7.87C16.62 6.18 13.96 5.11 11.07 5.11Z"/></svg>
                                    Google Review
                                </span>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed line-clamp-4">"<?php echo $r['text']; ?>"</p>
                            <div class="mt-4 flex items-center gap-3 pt-3 border-t border-gray-100">
                                <img src="<?php echo $r['img']; ?>" alt="" class="w-9 h-9 rounded-full object-cover flex-shrink-0">
                                <div class="min-w-0">
                                    <p class="font-semibold text-gray-900 text-sm truncate"><?php echo $r['name']; ?></p>
                                    <p class="text-xs text-gray-500 truncate"><?php echo $r['project']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Map + Contact -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Get in Touch</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Visit Us or Send a Message</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Map -->
                <div class="rounded-2xl overflow-hidden shadow-sm h-[450px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.5!2d-73.9!3d40.7!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzAwLjAiTiA3M8KwNTQnMDAuMCJX!5e0!3m2!1sen!2sus!4v1" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Contact Form -->
                <div class="bg-gray-50 rounded-2xl p-8 md:p-10 shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h3>
                    <form action="#" method="post" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="you@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="(555) 123-4567">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green text-white font-bold py-3 px-8 rounded-lg hover:bg-green/90 transition duration-300 text-lg">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>