<?php

/*
 * This Class Holds Postype Code For MJA Theme.
 */

class Products_PostType
{


    function __construct()
    {
        $this->actions();
    }

    function actions()
    {

        add_action('init', array($this, 'init'));
        add_action('save_post', array($this, 'save_post_meta'));
        // add_action('pre_get_posts', array($this, 'force_pagination'));
    }

    function init()
    {

        $this->register_post_types();

    }


    /**
     * Saves The Post Meta
     */

    function save_post_meta($post_id) {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }
    }


    function register_post_types()
    {


        /**
         * Sets Up The Args And Initialises Products Post Type
         */

        register_taxonomy('product_category', 'products', array(
            'hierarchical' => true,
            'labels' => array(
                'name' => __('Categories'),
                'singular_name' => __('Categories'),
                'search_items' => __('Search Categories'),
                'popular_items' => __('Popular Categories'),
                'all_items' => __('All Categories'),
                'parent_item' => __('Parent Categories'),
                'parent_item_colon' => __('Parent Categories:'),
                'edit_item' => __('Edit Category'),
                'update_item' => __('Update Category'),
                'add_new_item' => __('Add New Category'),
                'new_item_name' => __('New Category Name'),
                'separate_items_with_commas' => __('Separate Categories with commas'),
                'add_or_remove_items' => __('Add or remove Category'),
                'choose_from_most_used' => __('Choose from the most used Categories'),
                'menu_name' => __('Categories'),
            ),
            'show_ui' => true,
            'query_var' => true,
        ));


        $productsargs = array(
            'labels' => array(
                'name' => 'Products',
                'singular_name' => 'product',
                'add_new' => 'New Product',
                'add_new_item' => 'Add New product',
                'edit_item' => 'Edit product Details',
                'new_item' => 'New product',
                'view_item' => 'View product',
                'search_items' => 'Search Products',
                'not_found' => 'No Products Found',
                'not_found_in_trash' => 'No Products In The Trash'
            ),
            'has_archive' => true,
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'menu_position' => 7,
            'taxonomies' => array('product_category')
        );
        register_post_type('products', $productsargs);

    }

}

new Products_PostType();

