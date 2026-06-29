document.addEventListener('DOMContentLoaded', function () {
    // --- Lenis Smooth Scroll ---
    var lenis = new Lenis({ duration: 1.2, easing: function (t) { return Math.min(1, 1 - Math.pow(2, -10 * t)); } });
    function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
    requestAnimationFrame(raf);

    // --- Counter Animation ---
    var counters = document.querySelectorAll('.counter-value');
    if (counters.length) {
        var counterBar = counters[0].closest('.bg-green');
        Motion.inView(counterBar, function () {
            counters.forEach(function (el) {
                var target = parseInt(el.dataset.target);
                var suffix = el.dataset.suffix || (target < 100 ? '+' : '%');
                Motion.animate(0, target, {
                    duration: 2,
                    ease: 'easeOut',
                    onUpdate: function (latest) {
                        el.textContent = Math.round(latest) + suffix;
                    },
                });
            });
        }, { amount: 0.5 });
    }

    // --- Before/After Slider ---
    var sliderContainers = document.querySelectorAll('.slider-container');
    sliderContainers.forEach(function (container) {
        var handle = container.querySelector('.slider-handle');
        var line = container.querySelector('.slider-line');
        var beforeImage = container.querySelector('.before-image');
        var afterImage = container.querySelector('.after-image');
        var isDragging = false;

        function initSlider() {
            handle.style.left = '50%';
            line.style.left = '50%';
            beforeImage.style.clipPath = 'inset(0 50% 0 0)';
            afterImage.style.clipPath = 'inset(0 0 0 50%)';
        }

        function moveSlider(clientX) {
            var rect = container.getBoundingClientRect();
            var offsetX = clientX - rect.left;
            if (offsetX < 0) offsetX = 0;
            if (offsetX > rect.width) offsetX = rect.width;
            var pct = Math.round((offsetX / rect.width) * 100);
            handle.style.left = pct + '%';
            line.style.left = pct + '%';
            beforeImage.style.clipPath = 'inset(0 ' + (100 - pct) + '% 0 0)';
            afterImage.style.clipPath = 'inset(0 0 0 ' + pct + '%)';
        }

        function startDrag() {
            isDragging = true;
            handle.style.transition = 'none';
            line.style.transition = 'none';
        }

        function stopDrag() {
            isDragging = false;
            handle.style.transition = 'left 0.3s ease';
            line.style.transition = 'left 0.3s ease';
        }

        handle.addEventListener('mousedown', startDrag);
        line.addEventListener('mousedown', startDrag);
        window.addEventListener('mousemove', function (e) {
            if (isDragging) moveSlider(e.clientX);
        });
        window.addEventListener('mouseup', stopDrag);

        handle.addEventListener('touchstart', startDrag);
        line.addEventListener('touchstart', startDrag);
        window.addEventListener('touchmove', function (e) {
            if (isDragging) moveSlider(e.touches[0].clientX);
        });
        window.addEventListener('touchend', stopDrag);

        initSlider();
    });

    // --- Project Tabs ---
    var tabBtns = document.querySelectorAll('.tab-btn');
    var projectCards = document.querySelectorAll('.project-card');

    if (tabBtns.length) {
        tabBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                tabBtns.forEach(function (b) {
                    b.classList.remove('bg-green', 'text-white');
                    b.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('bg-green', 'text-white');

                var tab = this.dataset.tab;
                projectCards.forEach(function (card) {
                    var cats = (card.dataset.category || '').split(' ');
                    if (tab === 'all' || cats.indexOf(tab) !== -1) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // --- Testimonial Auto-Scroll ---
    var slider = document.getElementById('testimonialSlider');
    var track = document.getElementById('testimonialTrack');
    if (slider && track) {
        var cards = slider.querySelectorAll('.testimonial-card');
        if (cards.length > 1) {
            // Clone cards for seamless infinite loop
            cards.forEach(function (c) { slider.appendChild(c.cloneNode(true)); });

            var cardWidth = cards[0].offsetWidth + 20; // w-80 + gap-5
            var totalOrig = cards.length * cardWidth;
            var ticking = false;
            var interval;

            function scrollNext() {
                if (ticking) return;
                var next = slider.scrollLeft + cardWidth;
                slider.scrollTo({ left: next, behavior: 'smooth' });
                // Reset when past original set
                if (next >= totalOrig) {
                    setTimeout(function () { slider.scrollTo({ left: 0, behavior: 'instant' }); }, 400);
                }
            }

            function startScroll() { interval = setInterval(scrollNext, 2500); }
            function stopScroll() { clearInterval(interval); }

            track.addEventListener('mouseenter', stopScroll);
            track.addEventListener('mouseleave', startScroll);
            track.addEventListener('touchstart', stopScroll);
            track.addEventListener('touchend', startScroll);

            startScroll();
        }
    }

    // --- Header Glass Scroll Effect ---
    var header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 100);
        });
    }

    // --- Mobile Drawer ---
    var menuBtn = document.getElementById('mobileMenuBtn');
    var drawer = document.getElementById('mobileDrawer');
    var overlay = document.getElementById('mobileOverlay');
    if (menuBtn && drawer && overlay) {
        function openDrawer() {
            menuBtn.classList.add('active');
            drawer.classList.remove('translate-x-full');
            overlay.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
        }
        function closeDrawer() {
            menuBtn.classList.remove('active');
            drawer.classList.add('translate-x-full');
            overlay.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = '';
        }
        menuBtn.addEventListener('click', function () {
            if (menuBtn.classList.contains('active')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });
        overlay.addEventListener('click', closeDrawer);
    }
});
