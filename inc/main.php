<?php 
    function template_array(){
        $temps = array();
        $temps['food-plugin.php']='Food product';
        return $temps;
    }

    function template_register($page_templates, $theme, $post){
        $templates = template_array();
        foreach ( $templates as $key => $template){
            $page_templates[$key] = $template;
        }
        return $page_templates;
    }

add_filter('theme_page_templates', 'template_register', 10 , 3); 

    function template_select($template){
        global $post, $wp_query, $wpdb;
        $page_template_slug = get_page_template_slug($post->ID);
        $templates = template_array();

        if (isset($templates[$page_template_slug])){
            $template = FOOD_PATH . 'template-parts/' . $page_template_slug;
        }
        error_log(print_r($template));
        return $template;
    }

add_filter('template_include', 'template_select', 99, 1);

// add_filter( 'template_include', 'custom_single_product_template_include', 50, 1 );
// function custom_single_product_template_include( $template ) {
//     if ( is_singular('product') && (has_term( 'custom', 'product_cat')) ) {
//         $template = FOOD_PATH . '/template-parts/single-template.php';
//     } 
//     return $template;
// }
