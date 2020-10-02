<?php
// Simplifying the 'call the field' functions
function get_field2($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
}
function the_field2($key, $page_id = 0) {
    echo get_field2($key, $page_id);
}

// Requiring the files
require_once get_template_directory() . '/assets/cmb2/general.php';
require_once get_template_directory() . '/assets/cmb2/resume.php';
?>