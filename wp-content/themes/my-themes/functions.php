<?php
// ==========================
// THEME SETUP
// ==========================
function mytheme_setup() {
    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
}
add_action('after_setup_theme', 'mytheme_setup');
// ==========================
// ENQUEUE STYLES
// ==========================
function mytheme_assets() {
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'mytheme_assets');


// ==========================
// PRODUCT POST TYPE
// ==========================
function mytheme_register_products() {
    register_post_type('product', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'mytheme_register_products');


// ==========================
// PRODUCT CATEGORY TAXONOMY
// ==========================
function mytheme_register_product_category() {
    register_taxonomy('product_category', 'product', array(
        'label' => 'Product Categories',
        'hierarchical' => true,
    ));
}
add_action('init', 'mytheme_register_product_category');


// ==========================
// PRODUCT META BOX
// ==========================
function mytheme_product_meta() {
    add_meta_box(
        'product_details',
        'Product Details',
        'mytheme_product_meta_callback',
        'product'
    );
}
add_action('add_meta_boxes', 'mytheme_product_meta');

function mytheme_product_meta_callback($post) {
    $price = get_post_meta($post->ID, '_price', true);
    $stock = get_post_meta($post->ID, '_stock', true);
    ?>
    <p>
        <label>Price ($)</label><br>
        <input type="number" name="price" value="<?php echo esc_attr($price); ?>">
    </p>
    <p>
        <label>Stock</label><br>
        <input type="number" name="stock" value="<?php echo esc_attr($stock); ?>">
    </p>
    <?php
}

function mytheme_save_product_meta($post_id) {
    if (isset($_POST['price'])) {
        update_post_meta($post_id, '_price', sanitize_text_field($_POST['price']));
    }
    if (isset($_POST['stock'])) {
        update_post_meta($post_id, '_stock', sanitize_text_field($_POST['stock']));
    }
}
add_action('save_post', 'mytheme_save_product_meta');
