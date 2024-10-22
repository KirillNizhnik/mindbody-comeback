<?php

function delete_all_posts_by_type($post_type): void
{
    $args = array(
        'post_type'      => $post_type,
        'post_status'    => 'any',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    );

    $posts = get_posts($args);

    foreach ($posts as $post_id) {
        wp_delete_post($post_id, true);  // True to force delete without sending to Trash
    }

    error_log(count($posts) . " posts deleted from the '$post_type' post type.");
}