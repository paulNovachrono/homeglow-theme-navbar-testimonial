<?php
/*
Template Name: Contact Us
*/
get_header(); ?>


    <!-- Hero -->
    <section class="relative w-full min-h-[60vh] overflow-hidden flex flex-col pt-20">
        <img class="absolute inset-0 w-full h-full object-cover"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/heroBg.jpg" alt="Contact HomeGlow Builders">
        <div class="absolute inset-0 bg-black/50 sm:bg-black/70"></div>
        <div class="relative z-10 flex-1 flex items-center px-4 md:px-8 py-8">
            <div class="max-w-7xl w-full text-white">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Contact Us</span>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[68px] leading-[110%] font-bold mt-3">Let's Build<br><span class="text-accent">Something Great</span></h1>
                <p class="text-lg sm:text-xl lg:text-2xl mt-4 max-w-2xl">Ready to start your project? Get in touch with us today for a free consultation and estimate.</p>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="text-center mb-14">
                <span class="text-accent font-semibold uppercase tracking-widest text-sm">Get in Touch</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-3">We'd Love to Hear From You</h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">Whether you're planning a remodel, need a free estimate, or just have a question — we're here to help.</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1: Address -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6 items-center text-center">
                        <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Visit Us</h3>
                        <p class="text-gray-600 text-sm mt-2">123 Main Street<br>Brooklyn, NY 11201</p>
                    </div>
                    <p class="py-2 text-center text-xs italic font-semibold text-white/90">Our Office</p>
                </div>
                <!-- Card 2: Phone -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6 items-center text-center">
                        <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Call Us</h3>
                        <a href="tel:+15551234567" class="text-gray-600 text-sm mt-2 hover:text-accent transition">(555) 123-4567</a>
                    </div>
                    <p class="py-2 text-center text-xs italic font-semibold text-white/90">Mon–Fri 8AM–6PM</p>
                </div>
                <!-- Card 3: Email -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6 items-center text-center">
                        <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Email Us</h3>
                        <a href="mailto:info@homeglowbuilders.com" class="text-gray-600 text-sm mt-2 hover:text-accent transition">info@homeglowbuilders.com</a>
                    </div>
                    <p class="py-2 text-center text-xs italic font-semibold text-white/90">We Reply Fast</p>
                </div>
                <!-- Card 4: Hours -->
                <div class="flex flex-col items-center justify-center rounded-4xl bg-linear-to-bl from-green to-green/70 p-2 transition duration-300 hover:-translate-y-1">
                    <div class="flex w-full flex-col rounded-3xl bg-white p-6 items-center text-center">
                        <div class="w-12 h-12 rounded-full bg-accent/20 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Hours</h3>
                        <p class="text-gray-600 text-sm mt-2">Mon–Fri: 8AM–6PM<br>Sat: 9AM–3PM</p>
                    </div>
                    <p class="py-2 text-center text-xs italic font-semibold text-white/90">Sun: Closed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map + Form -->
    <section class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Map -->
                <div class="rounded-2xl overflow-hidden shadow-sm h-[450px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654.5!2d-73.9!3d40.7!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzAwLjAiTiA3M8KwNTQnMDAuMCJX!5e0!3m2!1sen!2sus!4v1" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Form -->
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-sm border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Send Us a Message</h3>
                    <p class="text-gray-600 mb-6">Fill out the form and we'll get back to you within 24 hours.</p>
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
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" placeholder="(555) 123-4567">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-semibold text-gray-700 mb-1">Service Needed</label>
                                <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent text-gray-600">
                                    <option value="">Select a service...</option>
                                    <option value="kitchen">Kitchen Remodeling</option>
                                    <option value="bathroom">Bathroom Remodeling</option>
                                    <option value="flooring">Flooring Installation</option>
                                    <option value="painting">Paint & Drywalls</option>
                                    <option value="custom">Custom Home Build</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
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

    <!-- CTA Banner -->
    <section class="bg-green py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">
            <span class="inline-block bg-white/20 text-white text-sm font-semibold uppercase tracking-widest px-4 py-1 rounded-full mb-4">Free Estimate</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">Prefer a Phone Call?</h2>
            <p class="text-lg md:text-xl mt-4 max-w-2xl mx-auto text-white/80">Give us a call and speak directly with our team. We're happy to answer your questions and schedule a free consultation.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="tel:+15551234567" class="inline-flex items-center gap-2 bg-white text-green font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300 text-lg">
                    Call (555) 123-4567
                </a>
                <a href="mailto:info@homeglowbuilders.com" class="inline-flex items-center gap-2 bg-transparent text-white font-bold py-3 px-8 rounded-lg border-2 border-white hover:bg-white/10 transition duration-300 text-lg">
                    Email Us
                </a>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
