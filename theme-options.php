<?php
// Add Theme Options Page to the Admin Menu
function custom_theme_options_page() {
    add_menu_page(
        'Theme Options', 
        'Theme Options', 
        'manage_options', 
        'theme-options', 
        'theme_options_page_html', 
        'dashicons-admin-generic', 
        61
    );
}
add_action('admin_menu', 'custom_theme_options_page');

// HTML for the Theme Options Page with Tabs
function theme_options_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }

    // Check for settings update
    if (isset($_GET['settings-updated'])) {
        add_settings_error('theme_options_messages', 'theme_options_message', __('Settings Saved', 'textdomain'), 'updated');
    }

    settings_errors('theme_options_messages');
    
    // Output tabs structure
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

        <!-- Tabs for different sections -->
        <h2 class="nav-tab-wrapper">
            <a href="?page=theme-options&tab=general" class="nav-tab <?php echo isset($_GET['tab']) && $_GET['tab'] === 'general' ? 'nav-tab-active' : ''; ?>">General Settings</a>
            <a href="?page=theme-options&tab=slide" class="nav-tab <?php echo isset($_GET['tab']) && $_GET['tab'] === 'slide' ? 'nav-tab-active' : ''; ?>">Slide Content</a>
            <a href="?page=theme-options&tab=about" class="nav-tab <?php echo isset($_GET['tab']) && $_GET['tab'] === 'about' ? 'nav-tab-active' : ''; ?>">About Section</a>
        </h2>

        <form action="options.php" method="post">
            <?php
            // Get the current tab
            $tab = $_GET['tab'] ?? 'general';

            // Display the form based on the active tab
            if ($tab === 'general') {
                settings_fields('theme_options_general_group');
                do_settings_sections('theme-options-general');
            } elseif ($tab === 'slide') {
                settings_fields('theme_options_slide_group');
                do_settings_sections('theme-options-slide');
            } elseif ($tab === 'about') {
                settings_fields('theme_options_about_group');
                do_settings_sections('theme-options-about');
            }

            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}


// Register General Settings
function theme_general_settings_init() {
    register_setting('theme_options_general_group', 'theme_options_general');

    add_settings_section(
        'theme_general_section', 
        'General Settings', 
        'theme_general_section_callback', 
        'theme-options-general'
    );

    add_settings_field(
        'theme_options_color', 
        'Primary Color', 
        'theme_options_color_callback', 
        'theme-options-general', 
        'theme_general_section'
    );
}
add_action('admin_init', 'theme_general_settings_init');

function theme_general_section_callback() {
    echo '<p>General settings for the theme.</p>';
}

function theme_options_color_callback() {
    $options = get_option('theme_options_general');
    ?>
    <input type="text" name="theme_options_general[theme_options_color]" value="<?php echo esc_attr($options['theme_options_color'] ?? ''); ?>" placeholder="#FFFFFF">
    <?php
}

// Register Slide Settings
function theme_slide_settings_init() {
    register_setting('theme_options_slide_group', 'theme_options_slide');

    add_settings_section(
        'theme_slide_section', 
        'Slide Content', 
        'theme_slide_section_callback', 
        'theme-options-slide'
    );

    add_settings_field(
        'theme_options_slide_text', 
        'Slide Text', 
        'theme_options_slide_text_callback', 
        'theme-options-slide', 
        'theme_slide_section'
    );
}
add_action('admin_init', 'theme_slide_settings_init');

function theme_slide_section_callback() {
    echo '<p>Manage content for the slide section.</p>';
}

function theme_options_slide_text_callback() {
    $options = get_option('theme_options_slide');
    ?>
    <textarea name="theme_options_slide[theme_options_slide_text]" rows="5" cols="50"><?php echo esc_textarea($options['theme_options_slide_text'] ?? ''); ?></textarea>
    <?php
}

// Register About Section Settings
function theme_about_settings_init() {
    register_setting('theme_options_about_group', 'theme_options_about');

    add_settings_section(
        'theme_about_section', 
        'About Section', 
        'theme_about_section_callback', 
        'theme-options-about'
    );

    add_settings_field(
        'theme_options_about_text', 
        'About Text', 
        'theme_options_about_text_callback', 
        'theme-options-about', 
        'theme_about_section'
    );
}
add_action('admin_init', 'theme_about_settings_init');

function theme_about_section_callback() {
    echo '<p>Manage content for the about section.</p>';
}

function theme_options_about_text_callback() {
    $options = get_option('theme_options_about');
    ?>
    <textarea name="theme_options_about[theme_options_about_text]" rows="5" cols="50"><?php echo esc_textarea($options['theme_options_about_text'] ?? ''); ?></textarea>
    <?php
}
