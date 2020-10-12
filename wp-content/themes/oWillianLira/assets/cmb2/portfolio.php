<?php
add_action('cmb2_admin_init', 'cmb_portfolio');
function cmb_portfolio() {
    $cmb = new_cmb2_box([
        'id'    =>  'portfolio_fields',
        'title' =>  'Portfolio',
        'object_types'  =>  ['page'],
        'show_on'   =>  [
            'key'   =>  'page-template',
            'value' =>  'pages/portfolio.php',
        ],
    ]);

    $group_portfolio = $cmb->add_field( array(
        'id'          => 'Item',
        'type'        => 'group',
        // 'description' => __( 'Project', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Project {#}', 'cmb2' ),
            'add_button'        => __( 'Add Another Item', 'cmb2' ),
            'remove_button'     => __( 'Remove Item', 'cmb2' ),
            'sortable'          => true,
            // 'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ),
        ),
    ) );

    $cmb->add_group_field( $group_portfolio, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_portfolio, array(
        'name' => 'Website URL',
        'id'   => 'url',
        'type' => 'text_url',
    ) );

    $cmb->add_group_field( $group_portfolio, array(
        'name' => 'Thumbnail',
        'id'   => 'thumbnail',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
    ) );

};
?>