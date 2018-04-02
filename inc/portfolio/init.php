<?php
/**
 *
 * CPT Portfolio
 *
 * @since 1.0.1
 * @version 1.0.1
 *
 */
function iam_portfolio_init() {

    $labels = array(
        "name"                  => _x( "Portfolio", "post type general name", "iamleigh" ),
        "singular_name"         => _x( "Project", "post type singular name", "iamleigh" ),
        "menu_name"             => _x( "Project", "admin menu", "iamleigh" ),
        "name_admin_bar"        => _x( "Project", "add new on admin bar", "iamleigh" ),
        "add_new"               => _x( "Add new", "decimo", "iamleigh" ),
        "add_new_item"          => __( "Add new project", "iamleigh" ),
        "new_item"              => __( "New Project", "iamleigh" ),
        "edit_item"             => __( "Edit Project", "iamleigh" ),
        "view_item"             => __( "View Project", "iamleigh" ),
        "all_items"             => __( "All Projects", "iamleigh" ),
        "search_items"          => __( "Search Projects", "iamleigh" ),
        "parent_item_colon"     => __( "Parent Project:", "iamleigh" ),
        "not_found"             => __( "No projects were found.", "iamleigh" ),
        "not_found_in_trash"    => __( "No projects were found in the trash.", "iamleigh" )
    );

    $args = array(
        "labels"                => $labels,
        "description"           => __( "Description", "iamleigh" ),
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_menu"          => true,
        "query_var"             => true,
        "rewrite"               => array( "slug" => "project" ),
        "capability_type"       => "page",
        "has_archive"           => false,
        "hierarchical"          => false,
        "menu_position"         => 6,
        "supports"              => array( "title", "editor", "thumbnail", "revisions" )
    );

    register_post_type( "project", $args );

}

add_action( "init", "iam_portfolio_init" );