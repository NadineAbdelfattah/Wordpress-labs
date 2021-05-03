<?php
    function custom_excerpt ($post_excerpt){
        $newExcerpt = "Filter Hook applied".$post_excerpt;
        return $newExcerpt;
    }
    add_filter('the_excerpt','custom_excerpt');

    add_action('wp_head','custom_theme_favicon');
    function custom_theme_favicon(){
        echo '<meta name="author" content="john Doe">';
    }


    function wporg_custom_post_type() {
        register_post_type('wporg_product',
            array(
                'labels'      => array(
                    'name'          => __('Movies', 'textdomain'),
                    'add_new_item'          => __('Add new movie', 'textdomain'),
                    'singular_name' => __('movie', 'textdomain'),
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'supports'    => array('title', 'editor' , 'author', 'thumbnail'),
            )
        );
    }
    add_action('init', 'wporg_custom_post_type');

    add_action('init', 'create_custom_tax');
    function create_custom_tax(){
        $args = array(
            'label' => __('Genre'),
            'hierarchical' => true,
        );
        register_taxonomy('genre','wporg_product',$args);
    }

    if (!function_exists('envo_storefront_generate_construct_footer')) :
        /**
         * Build footer
         */
        add_action('envo_storefront_generate_footer', 'envo_storefront_generate_construct_footer');
    
        function envo_storefront_generate_construct_footer() {
            ?>
            <div class="footer-credits-text text-center">
                <?php
                /* translators: %s: WordPress name with wordpress.org URL */
                printf(esc_html__('Proudly powered by %s', 'envo-storefront'), '<a href="' . esc_url(__('https://wordpress.org/', 'envo-storefront')) . '">' . esc_html__('ITI Students', 'envo-storefront') . '</a>');
                ?>
                <span class="sep"> | </span>
                <?php
                /* translators: %1$s: Envo Storefront theme name (do not translate) with envothemes.com URL */
                printf(esc_html__('Theme: %1$s', 'envo-storefront'), '<a href="' . esc_url('https://envothemes.com/free-envo-storefront/') . '">' . esc_html_x('Envo Storefront', 'Theme name, do not translate', 'envo-storefront') . '</a>');
                ?>
            </div> 
            <?php
        }
    
    endif;
    
  
?> 