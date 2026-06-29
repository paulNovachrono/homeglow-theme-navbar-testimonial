<div class="slider-container relative w-full h-[400px] rounded-xl overflow-hidden select-none" data-lenis-prevent>
    <div class="before-image absolute inset-0 flex items-center justify-center overflow-hidden">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($args['before'] ?? ''); ?>" alt="Before">
        <span class="absolute left-5 top-5 z-10 text-sm font-semibold text-gray-700 px-5 py-2 bg-white/60 rounded letter-spacing-2">Before</span>
    </div>
    <div class="after-image absolute inset-0 flex items-center justify-center overflow-hidden" style="clip-path: inset(0 50% 0 0);">
        <img class="w-full h-full object-cover" src="<?php echo esc_url($args['after'] ?? ''); ?>" alt="After">
        <span class="absolute right-5 top-5 z-10 text-sm font-semibold text-gray-700 px-5 py-2 bg-white/60 rounded letter-spacing-2">After</span>
    </div>
    <div class="slider-handle absolute top-0 left-1/2 w-0 h-full bg-white cursor-pointer z-10"></div>
    <div class="slider-line absolute top-0 left-1/2 w-0 h-full flex items-center justify-center bg-transparent z-10">
        <div class="relative inline-block">
            <div class="absolute top-1/2 left-1/2 w-[70px] h-[70px] rounded-full bg-white -translate-x-1/2 -translate-y-1/2 opacity-0 animate-ping"></div>
            <svg role="presentation" focusable="false" fill="none" width="50" height="50" viewBox="0 0 50 50" class="relative z-10 cursor-pointer">
                <rect width="50" height="50" rx="25" fill="#ffffff"></rect>
                <path d="m19.25 19-6 6 6 6m11.5 0 6-6-6-6" stroke="#000000" stroke-width=".75" stroke-linecap="square"></path>
            </svg>
        </div>
    </div>
</div>
