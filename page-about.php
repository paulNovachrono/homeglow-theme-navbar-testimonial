<?php
/*
Template Name: About Us
*/
get_header(); ?>


    <!-- Hero -->
    <section class="relative w-full min-h-[70vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="About HomeGlow Builders">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">About Us</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3">Crafting Dreams<br><span class="text-accent">Building Trust</span></h1>
                <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl">For 15 years, HomeGlow Builders has been transforming houses into dream homes with quality craftsmanship and unwavering dedication.</p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Story</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 leading-tight">A Legacy of<br>Quality Craftsmanship</h2>
                <p class="text-gray-600 mt-6 text-lg leading-relaxed">HomeGlow Builders was founded with a simple mission: to provide exceptional remodeling and construction services that exceed expectations. What started as a small team of passionate craftsmen has grown into a trusted name in home renovation.</p>
                <p class="text-gray-600 mt-4 text-lg leading-relaxed">We believe every home has a story, and we're honored to help write the next chapter. From kitchen remodels to custom home builds, our team brings expertise, integrity, and a personal touch to every project.</p>
                <div class="flex items-center gap-5 mt-8">
                    <div class="w-20 h-20 rounded-full bg-green flex items-center justify-center text-white">
                        <span class="counter-value text-3xl font-bold p-4" data-target="15">0</span>
                        <span class="text-3xl font-bold"></span>
                    </div>
                    <div>
                        <span class="text-green font-bold text-xl">Years Experience</span>
                        <p class="text-gray-500">Serving the community</p>
                    </div>
                </div>
            </div>
            <div class="aspect-square grid grid-cols-2 grid-rows-3 gap-3">
                <div class="row-span-2 rounded-2xl overflow-hidden bg-gray-100 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden bg-gray-100 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/after.avif" alt="" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden bg-gray-100 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hardwood.jpg" alt="" class="w-full h-full object-cover">
                </div>
                <div class="col-span-2 rounded-2xl overflow-hidden bg-gray-100 shadow-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vinyl.avif" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-16 md:py-20 bg-green">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-5">
                <div class="bg-white rounded-2xl p-4 md:p-10 text-center shadow-md">
                    <div class="flex items-baseline justify-center">
                        <span class="counter-value text-3xl sm:text-6xl font-bold text-accent" data-target="15">0</span>
                        <span class="text-3xl sm:text-6xl font-bold text-accent"></span>
                    </div>
                    <div class="text-gray-700 text-sm sm:text-xl font-semibold mt-1 md:mt-3">Years Experience</div>
                </div>
                <div class="bg-white rounded-2xl p-4 md:p-10 text-center shadow-md">
                    <div class="flex items-baseline justify-center">
                        <span class="counter-value text-3xl sm:text-6xl font-bold text-accent" data-target="500">0</span>
                        <span class="text-3xl sm:text-6xl font-bold text-accent"></span>
                    </div>
                    <div class="text-gray-700 text-sm sm:text-xl font-semibold mt-1 md:mt-3">Projects Completed</div>
                </div>
                <div class="bg-white rounded-2xl p-4 md:p-10 text-center shadow-md">
                    <div class="flex items-baseline justify-center">
                        <span class="counter-value text-3xl sm:text-6xl font-bold text-accent" data-target="50">0</span>
                        <span class="text-3xl sm:text-6xl font-bold text-accent"></span>
                    </div>
                    <div class="text-gray-700 text-sm sm:text-xl font-semibold mt-1 md:mt-3">Expert Team Members</div>
                </div>
                <div class="bg-white rounded-2xl p-4 md:p-10 text-center shadow-md">
                    <div class="flex items-baseline justify-center">
                        <span class="counter-value text-3xl sm:text-6xl font-bold text-accent" data-target="100">0</span>
                        <span class="text-3xl sm:text-6xl font-bold text-accent"></span>
                    </div>
                    <div class="text-gray-700 text-sm sm:text-xl font-semibold mt-1 md:mt-3">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-14">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Why Choose Us</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">What Sets Us Apart</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: Quality -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Quality</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">Quality Guaranteed</h3>
                            <p class="text-gray-600 leading-relaxed">We stand behind every project with a satisfaction guarantee, using only premium materials and proven techniques.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">Quality First</p>
                </div>
                <!-- Card 2: Team -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Team</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">Expert Team</h3>
                            <p class="text-gray-600 leading-relaxed">Our skilled craftsmen bring years of experience and continuous training to deliver exceptional results every time.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">Skilled Craftsmanship</p>
                </div>
                <!-- Card 3: Schedule -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Schedule</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">On-Time Delivery</h3>
                            <p class="text-gray-600 leading-relaxed">We respect your time and schedule, completing projects on time with clear communication throughout the process.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">Reliable Service</p>
                </div>
                <!-- Card 4: Design -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Design</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">Custom Solutions</h3>
                            <p class="text-gray-600 leading-relaxed">Every home is unique. We tailor our approach to match your style, needs, and budget with personalized designs.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">Tailored Design</p>
                </div>
                <!-- Card 5: Safety -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Safety</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">Licensed & Insured</h3>
                            <p class="text-gray-600 leading-relaxed">Full licensing and insurance coverage gives you peace of mind knowing your project is in safe, professional hands.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">Fully Protected</p>
                </div>
                <!-- Card 6: Clients -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex h-72 w-full flex-col rounded-3xl bg-white p-6">
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-2 rounded-xl text-lg w-fit">Clients</p>
                        <div class="flex flex-col gap-2 mt-4">
                            <h3 class="text-3xl font-bold text-gray-900">Client-First Approach</h3>
                            <p class="text-gray-600 leading-relaxed">Your satisfaction is our priority. We listen, communicate, and collaborate to bring your vision to life.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-base italic font-semibold text-white/90">You Come First</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values / Process -->
    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Values</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3 mb-10">The Principles That<br>Guide Our Work</h2>
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">1</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Integrity</h3>
                            <p class="text-gray-600 mt-1">Honest communication, transparent pricing, and ethical practices in every project.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">2</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Craftsmanship</h3>
                            <p class="text-gray-600 mt-1">Uncompromising attention to detail and pride in every cut, nail, and finish.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">3</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Innovation</h3>
                            <p class="text-gray-600 mt-1">Embracing modern techniques, materials, and design trends to deliver fresh results.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-green text-white text-xl font-bold flex items-center justify-center flex-shrink-0 mt-1">4</div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Community</h3>
                            <p class="text-gray-600 mt-1">Supporting local suppliers and giving back to the communities we serve.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <!-- Mission Card -->
                <div class="rounded-2xl bg-white border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-6 flex flex-col gap-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/after.avif" alt="" class="pointer-events-none aspect-square w-16 rounded-2xl object-cover select-none">
                        <div>
                            <span class="text-accent font-semibold uppercase tracking-widest text-xs">Our Mission</span>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">To Transform Houses into Dream Homes</h3>
                            <p class="text-gray-600 text-sm mt-2 leading-relaxed">Delivering exceptional craftsmanship, personalized service, and innovative design solutions that exceed our clients' expectations.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 border-t border-gray-200 px-6 py-3 bg-gray-50">
                        <div class="w-6 h-6 rounded-full bg-green flex items-center justify-center text-white text-[10px] font-bold">HG</div>
                        <span class="text-xs text-gray-500">HomeGlow Builders</span>
                    </div>
                </div>
                <!-- Vision Card -->
                <div class="rounded-2xl bg-white border border-gray-200 shadow-sm overflow-hidden">
                    <div class="p-6 flex flex-col gap-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Hardwood.jpg" alt="" class="pointer-events-none aspect-square w-16 rounded-2xl object-cover select-none">
                        <div>
                            <span class="text-accent font-semibold uppercase tracking-widest text-xs">Our Vision</span>
                            <h3 class="text-xl font-bold text-gray-900 mt-1">To Be the Most Trusted Name in Remodeling</h3>
                            <p class="text-gray-600 text-sm mt-2 leading-relaxed">To be the most trusted and respected home remodeling company, known for quality, integrity, and transforming the way people experience their homes.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 border-t border-gray-200 px-6 py-3 bg-gray-50">
                        <div class="w-6 h-6 rounded-full bg-accent flex items-center justify-center text-white text-[10px] font-bold">HG</div>
                        <span class="text-xs text-gray-500">HomeGlow Builders</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-14">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Our Team</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">Meet the Experts</h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Dedicated professionals committed to bringing your vision to life with skill and passion.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Card 1: Founder -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6">
                        <div class="w-full aspect-square rounded-2xl overflow-hidden bg-gray-200 mb-4">
                            <img src="https://i.pravatar.cc/400?u=founder" alt="" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-1.5 rounded-xl text-sm w-fit">CEO</p>
                        <div class="flex flex-col gap-1 mt-3">
                            <h3 class="text-2xl font-bold text-gray-900">John Anderson</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">15+ years leading home renovation excellence.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-sm italic font-semibold text-white/90">Founder &amp; CEO</p>
                </div>
                <!-- Team Card 2: Designer -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6">
                        <div class="w-full aspect-square rounded-2xl overflow-hidden bg-gray-200 mb-4">
                            <img src="https://i.pravatar.cc/400?u=designer" alt="" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-1.5 rounded-xl text-sm w-fit">Design</p>
                        <div class="flex flex-col gap-1 mt-3">
                            <h3 class="text-2xl font-bold text-gray-900">Sarah Mitchell</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">10 years of innovative kitchen &amp; bath design.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-sm italic font-semibold text-white/90">Lead Designer</p>
                </div>
                <!-- Team Card 3: PM -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6">
                        <div class="w-full aspect-square rounded-2xl overflow-hidden bg-gray-200 mb-4">
                            <img src="https://i.pravatar.cc/400?u=projectmgr" alt="" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-1.5 rounded-xl text-sm w-fit">PM</p>
                        <div class="flex flex-col gap-1 mt-3">
                            <h3 class="text-2xl font-bold text-gray-900">Mike Rodriguez</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">12 years ensuring on-time, on-budget delivery.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-sm italic font-semibold text-white/90">Project Manager</p>
                </div>
                <!-- Team Card 4: Craftsman -->
                <!-- <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6">
                        <div class="w-full aspect-square rounded-2xl overflow-hidden bg-gray-200 mb-4">
                            <img src="https://i.pravatar.cc/400?u=craftsman" alt="" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold italic bg-accent/20 text-accent px-3 py-1.5 rounded-xl text-sm w-fit">Craftsman</p>
                        <div class="flex flex-col gap-1 mt-3">
                            <h3 class="text-2xl font-bold text-gray-900">David Chen</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">20+ years of precision carpentry &amp; finishing.</p>
                        </div>
                    </div>
                    <p class="py-2 text-center text-sm italic font-semibold text-white/90">Master Craftsman</p>
                </div> -->
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

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Let's Work Together</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Ready to Start Your Project?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Get in touch with us today for a free consultation and estimate. Let's bring your vision to life.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="/contact" class="inline-flex items-center gap-2 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                    Get a Free Estimate <span>→</span>
                </a>
                <a href="tel:+15551234567" class="inline-flex items-center gap-2 bg-transparent text-white font-bold py-3 px-8 rounded-lg border-2 border-white hover:bg-white/10 transition duration-300 text-lg">
                    Call (555) 123-4567
                </a>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
