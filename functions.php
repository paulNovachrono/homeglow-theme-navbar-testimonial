<?php

function ishan_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('responsive-embeds');

    register_nav_menus([
        'primary' => __('Primary Menu', 'ishan'),
        'footer'  => __('Footer Menu', 'ishan'),
    ]);
}
add_action('after_setup_theme', 'ishan_setup');

function ishan_assets() {
    $theme = wp_get_theme();

    wp_enqueue_style('ishan-tailwind', get_template_directory_uri() . '/assets/css/output.css', [], $theme->get('Version'));
    wp_enqueue_style('lenis', get_template_directory_uri() . '/assets/css/lenis.css', [], '1.3.24');

    wp_enqueue_script('motion', get_template_directory_uri() . '/assets/js/motion.js', [], '12.41.0', true);
    wp_enqueue_script('lenis', get_template_directory_uri() . '/assets/js/lenis.min.js', [], '1.3.24', true);
    wp_enqueue_script('ishan-theme', get_template_directory_uri() . '/assets/js/theme.js', ['motion', 'lenis'], $theme->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'ishan_assets');

function ishan_nav_menu_link_attributes($atts, $item, $args, $depth) {
    if (!empty($args->theme_location) && $args->theme_location === 'primary') {
        $atts['class'] = isset($atts['class'])
            ? $atts['class'] . ' font-semibold text-gray-700 hover:text-accent transition duration-300'
            : 'font-semibold text-gray-700 hover:text-accent transition duration-300';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'ishan_nav_menu_link_attributes', 10, 4);

function ishan_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar', 'ishan'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'ishan_widgets_init');

function ishan_project_cpt() {
    register_post_type('project', [
        'labels' => [
            'name'               => __('Projects', 'ishan'),
            'singular_name'      => __('Project', 'ishan'),
            'add_new'            => __('Add New Project', 'ishan'),
            'add_new_item'       => __('Add New Project', 'ishan'),
            'edit_item'          => __('Edit Project', 'ishan'),
            'new_item'           => __('New Project', 'ishan'),
            'view_item'          => __('View Project', 'ishan'),
            'search_items'       => __('Search Projects', 'ishan'),
            'not_found'          => __('No projects found', 'ishan'),
            'not_found_in_trash' => __('No projects found in Trash', 'ishan'),
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'rewrite'            => ['slug' => 'projects'],
        'show_in_rest'       => true,
    ]);

    register_taxonomy('project_category', 'project', [
        'labels' => [
            'name'              => __('Project Categories', 'ishan'),
            'singular_name'     => __('Project Category', 'ishan'),
            'search_items'      => __('Search Categories', 'ishan'),
            'all_items'         => __('All Categories', 'ishan'),
            'parent_item'       => __('Parent Category', 'ishan'),
            'parent_item_colon' => __('Parent Category:', 'ishan'),
            'edit_item'         => __('Edit Category', 'ishan'),
            'update_item'       => __('Update Category', 'ishan'),
            'add_new_item'      => __('Add New Category', 'ishan'),
            'new_item_name'     => __('New Category Name', 'ishan'),
            'menu_name'         => __('Categories', 'ishan'),
        ],
        'hierarchical' => true,
        'rewrite'      => ['slug' => 'project-category'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'ishan_project_cpt');

function ishan_project_metabox() {
    add_meta_box('ishan_project_details', __('Project Details', 'ishan'), 'ishan_project_metabox_cb', 'project', 'normal', 'high');
}
add_action('add_meta_boxes', 'ishan_project_metabox');

function ishan_project_metabox_assets($hook) {
    global $post;
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        if (isset($post) && in_array($post->post_type, ['project', 'service'])) {
            wp_enqueue_media();
        }
    }
}
add_action('admin_enqueue_scripts', 'ishan_project_metabox_assets');

function ishan_project_metabox_cb($post) {
    wp_nonce_field('ishan_project_metabox', 'ishan_project_metabox_nonce');
    $overview      = get_post_meta($post->ID, '_project_overview', true);
    $problem       = get_post_meta($post->ID, '_project_problem', true);
    $solution      = get_post_meta($post->ID, '_project_solution', true);
    $steps         = get_post_meta($post->ID, '_project_steps', true);
    $before_img    = get_post_meta($post->ID, '_project_before_img', true);
    $after_img     = get_post_meta($post->ID, '_project_after_img', true);
    ?>
    <style>
        #ishan_project_details .inside { padding: 0; }
        .ishan-mb-row { display: flex; gap: 12px; }
        .ishan-mb-row .ishan-mb-field { flex: 1; border-bottom: none; }
        .ishan-mb-field { padding: 12px; border-bottom: 1px solid #e5e7eb; }
        .ishan-mb-field:last-child { border-bottom: none; }
        .ishan-mb-field label { display: block; font-weight: 600; margin-bottom: 6px; color: #111827; }
        .ishan-mb-field textarea,
        .ishan-mb-field input[type="text"] { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px; }
    </style>
    <div class="ishan-mb-row">
        <div class="ishan-mb-field">
            <label>Before Image</label>
            <div class="ishan-img-wrap">
                <div class="ishan-img-preview" id="before_img_preview"><?php if ($before_img) echo '<img src="' . esc_url($before_img) . '" style="max-width:100%;max-height:120px;border-radius:6px;">'; ?></div>
                <input type="hidden" id="project_before_img" name="project_before_img" value="<?php echo esc_url($before_img); ?>">
                <button type="button" class="button ishan-upload-btn" data-target="project_before_img" data-preview="before_img_preview">Choose Image</button>
                <button type="button" class="button ishan-remove-btn" data-target="project_before_img" data-preview="before_img_preview" <?php if (!$before_img) echo 'style="display:none"'; ?>>Remove</button>
            </div>
        </div>
        <div class="ishan-mb-field">
            <label>After Image</label>
            <div class="ishan-img-wrap">
                <div class="ishan-img-preview" id="after_img_preview"><?php if ($after_img) echo '<img src="' . esc_url($after_img) . '" style="max-width:100%;max-height:120px;border-radius:6px;">'; ?></div>
                <input type="hidden" id="project_after_img" name="project_after_img" value="<?php echo esc_url($after_img); ?>">
                <button type="button" class="button ishan-upload-btn" data-target="project_after_img" data-preview="after_img_preview">Choose Image</button>
                <button type="button" class="button ishan-remove-btn" data-target="project_after_img" data-preview="after_img_preview" <?php if (!$after_img) echo 'style="display:none"'; ?>>Remove</button>
            </div>
        </div>
    </div>
    <style>
        .ishan-img-wrap { display: flex; flex-direction: column; gap: 8px; }
        .ishan-img-preview { min-height: 40px; }
    </style>
    <script>
    jQuery(function($){
        $('.ishan-upload-btn').on('click', function(){
            var btn = $(this);
            var target = $('#' + btn.data('target'));
            var preview = $('#' + btn.data('preview'));
            var frame = wp.media({ title: 'Choose Image', button: { text: 'Use Image' }, multiple: false });
            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                target.val(attachment.url);
                preview.html('<img src="' + attachment.url + '" style="max-width:100%;max-height:120px;border-radius:6px;">');
                btn.siblings('.ishan-remove-btn').show();
            });
            frame.open();
        });
        $('.ishan-remove-btn').on('click', function(){
            var btn = $(this);
            $('#' + btn.data('target')).val('');
            $('#' + btn.data('preview')).empty();
            btn.hide();
        });
    });
    </script>
    <div class="ishan-mb-field">
        <label for="project_overview">Overview</label>
        <textarea id="project_overview" name="project_overview" rows="3"><?php echo esc_textarea($overview); ?></textarea>
    </div>
    <div class="ishan-mb-field">
        <label for="project_problem">Problem Statement</label>
        <textarea id="project_problem" name="project_problem" rows="3"><?php echo esc_textarea($problem); ?></textarea>
    </div>
    <div class="ishan-mb-field">
        <label for="project_solution">Solution</label>
        <textarea id="project_solution" name="project_solution" rows="3"><?php echo esc_textarea($solution); ?></textarea>
    </div>
    <div class="ishan-mb-field">
        <label for="project_steps">Steps to Follow (one per line)</label>
        <textarea id="project_steps" name="project_steps" rows="4" placeholder="Step 1&#10;Step 2&#10;Step 3"><?php echo esc_textarea($steps); ?></textarea>
    </div>
    <?php
}

function ishan_project_metabox_save($post_id) {
    if (!isset($_POST['ishan_project_metabox_nonce']) || !wp_verify_nonce($_POST['ishan_project_metabox_nonce'], 'ishan_project_metabox')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $textareas = ['project_overview', 'project_problem', 'project_solution', 'project_steps'];
    foreach ($textareas as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_textarea_field($_POST[$field]));
        }
    }
    $urls = ['project_before_img', 'project_after_img'];
    foreach ($urls as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, esc_url_raw($_POST[$field]));
        }
    }
}
add_action('save_post', 'ishan_project_metabox_save');

/* ─── Service CPT ─── */

function ishan_service_cpt() {
    register_post_type('service', [
        'labels' => [
            'name'               => __('Services', 'ishan'),
            'singular_name'      => __('Service', 'ishan'),
            'add_new'            => __('Add New Service', 'ishan'),
            'add_new_item'       => __('Add New Service', 'ishan'),
            'edit_item'          => __('Edit Service', 'ishan'),
            'new_item'           => __('New Service', 'ishan'),
            'view_item'          => __('View Service', 'ishan'),
            'search_items'       => __('Search Services', 'ishan'),
            'not_found'          => __('No services found', 'ishan'),
            'not_found_in_trash' => __('No services found in Trash', 'ishan'),
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite'            => ['slug' => 'services'],
        'show_in_rest'       => true,
    ]);
}
add_action('init', 'ishan_service_cpt');

function ishan_service_metabox() {
    add_meta_box('ishan_service_details', __('Service Details', 'ishan'), 'ishan_service_metabox_cb', 'service', 'normal', 'high');
}
add_action('add_meta_boxes', 'ishan_service_metabox');

function ishan_service_metabox_cb($post) {
    wp_nonce_field('ishan_service_metabox', 'ishan_service_metabox_nonce');
    $subtitle = get_post_meta($post->ID, '_service_subtitle', true);
    $icon     = get_post_meta($post->ID, '_service_icon', true);
    $features = get_post_meta($post->ID, '_service_features', true);
    ?>
    <style>
        #ishan_service_details .inside { padding: 0; }
        .ishan-sm-field { padding: 12px; border-bottom: 1px solid #e5e7eb; }
        .ishan-sm-field:last-child { border-bottom: none; }
        .ishan-sm-field label { display: block; font-weight: 600; margin-bottom: 6px; color: #111827; }
        .ishan-sm-field textarea,
        .ishan-sm-field input[type="text"] { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px; }
    </style>
    <div class="ishan-sm-field">
        <label for="service_subtitle">Subtitle (e.g. "Transform Your Kitchen")</label>
        <input type="text" id="service_subtitle" name="service_subtitle" value="<?php echo esc_attr($subtitle); ?>">
    </div>
    <div class="ishan-sm-field">
        <label>Icon Image (SVG recommended)</label>
        <div class="ishan-img-wrap">
            <div class="ishan-sm-icon-preview" id="service_icon_preview"><?php if ($icon) echo '<img src="' . esc_url($icon) . '" style="max-width:64px;max-height:64px;border-radius:6px;">'; ?></div>
            <input type="hidden" id="service_icon" name="service_icon" value="<?php echo esc_url($icon); ?>">
            <button type="button" class="button ishan-upload-btn" data-target="service_icon" data-preview="service_icon_preview">Choose Image</button>
            <button type="button" class="button ishan-remove-btn" data-target="service_icon" data-preview="service_icon_preview" <?php if (!$icon) echo 'style="display:none"'; ?>>Remove</button>
        </div>
        <p class="description" style="margin-top:4px;color:#6b7280;font-size:12px;">Upload an SVG or PNG icon for this service.</p>
    </div>
    <style>
        .ishan-sm-icon-preview { min-height: 40px; display: flex; align-items: center; }
    </style>
    <div class="ishan-sm-field">
        <label for="service_features">Key Features (one per line)</label>
        <textarea id="service_features" name="service_features" rows="5" placeholder="Custom cabinetry&#10;Quartz countertops&#10;..."><?php echo esc_textarea($features); ?></textarea>
    </div>
    <?php
}

function ishan_service_metabox_save($post_id) {
    if (!isset($_POST['ishan_service_metabox_nonce']) || !wp_verify_nonce($_POST['ishan_service_metabox_nonce'], 'ishan_service_metabox')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', esc_url_raw($_POST['service_icon']));
    }
    $textareas = ['service_subtitle', 'service_features'];
    foreach ($textareas as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_textarea_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'ishan_service_metabox_save');

/* ─── Testimonial CPT ─── */

function ishan_testimonial_cpt() {
    register_post_type('testimonial', [
        'labels' => [
            'name'               => __('Testimonials', 'ishan'),
            'singular_name'      => __('Testimonial', 'ishan'),
            'add_new'            => __('Add New Testimonial', 'ishan'),
            'add_new_item'       => __('Add New Testimonial', 'ishan'),
            'edit_item'          => __('Edit Testimonial', 'ishan'),
            'new_item'           => __('New Testimonial', 'ishan'),
            'view_item'          => __('View Testimonial', 'ishan'),
            'search_items'       => __('Search Testimonials', 'ishan'),
            'not_found'          => __('No testimonials found', 'ishan'),
            'not_found_in_trash' => __('No testimonials found in Trash', 'ishan'),
        ],
        'public'             => true,
        'has_archive'        => false,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => ['title'],
        'show_in_rest'       => true,
    ]);
}
add_action('init', 'ishan_testimonial_cpt');

function ishan_testimonial_metabox() {
    add_meta_box('ishan_testimonial_details', __('Testimonial Details', 'ishan'), 'ishan_testimonial_metabox_cb', 'testimonial', 'normal', 'high');
}
add_action('add_meta_boxes', 'ishan_testimonial_metabox');

function ishan_testimonial_metabox_cb($post) {
    wp_nonce_field('ishan_testimonial_metabox', 'ishan_testimonial_metabox_nonce');
    $name   = get_post_meta($post->ID, '_testimonial_name', true);
    $role   = get_post_meta($post->ID, '_testimonial_role', true);
    $text   = get_post_meta($post->ID, '_testimonial_text', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    $rating = $rating ?: 5;
    ?>
    <style>
        #ishan_testimonial_details .inside { padding: 0; }
        .ishan-tm-field { padding: 12px; border-bottom: 1px solid #e5e7eb; }
        .ishan-tm-field:last-child { border-bottom: none; }
        .ishan-tm-field label { display: block; font-weight: 600; margin-bottom: 6px; color: #111827; }
        .ishan-tm-field textarea,
        .ishan-tm-field input[type="text"],
        .ishan-tm-field input[type="number"] { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px; }
    </style>
    <div class="ishan-tm-field">
        <label for="testimonial_name">Client Name</label>
        <input type="text" id="testimonial_name" name="testimonial_name" value="<?php echo esc_attr($name); ?>">
    </div>
    <div class="ishan-tm-field">
        <label for="testimonial_role">Role / Location (e.g. "Homeowner, Springfield")</label>
        <input type="text" id="testimonial_role" name="testimonial_role" value="<?php echo esc_attr($role); ?>">
    </div>
    <div class="ishan-tm-field">
        <label for="testimonial_rating">Rating (1-5)</label>
        <input type="number" id="testimonial_rating" name="testimonial_rating" min="1" max="5" value="<?php echo esc_attr($rating); ?>">
    </div>
    <div class="ishan-tm-field">
        <label for="testimonial_text">Testimonial Text</label>
        <textarea id="testimonial_text" name="testimonial_text" rows="5"><?php echo esc_textarea($text); ?></textarea>
    </div>
    <?php
}

function ishan_testimonial_metabox_save($post_id) {
    if (!isset($_POST['ishan_testimonial_metabox_nonce']) || !wp_verify_nonce($_POST['ishan_testimonial_metabox_nonce'], 'ishan_testimonial_metabox')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['testimonial_name'])) {
        update_post_meta($post_id, '_testimonial_name', sanitize_text_field($_POST['testimonial_name']));
    }
    if (isset($_POST['testimonial_role'])) {
        update_post_meta($post_id, '_testimonial_role', sanitize_text_field($_POST['testimonial_role']));
    }
    if (isset($_POST['testimonial_rating'])) {
        update_post_meta($post_id, '_testimonial_rating', absint($_POST['testimonial_rating']));
    }
    if (isset($_POST['testimonial_text'])) {
        update_post_meta($post_id, '_testimonial_text', sanitize_textarea_field($_POST['testimonial_text']));
    }
}
add_action('save_post', 'ishan_testimonial_metabox_save');
