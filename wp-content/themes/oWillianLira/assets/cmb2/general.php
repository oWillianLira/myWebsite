<?php
add_action('cmb2_admin_init', 'cmb_general');
function cmb_general() {
    $cmb = new_cmb2_box([
        'id'    =>  'general_fields',
        'title' =>  'General infos',
        'object_types'  =>  ['page'],
        'show_on'   =>  [ 
            'key'   =>  'id',
            'value' =>  118 
        ],
    ]);

    $cmb->add_field([
        'name'  =>  'My age',
        'id'  =>  'age',
        'type'  =>  'text',
    ]);
    $cmb->add_field([
        'name'  =>  'My phone',
        'id'  =>  'phone',
        'type'  =>  'text',
    ]);
    $cmb->add_field([
        'name'  =>  'My E-mail',
        'id'  =>  'email',
        'type'  =>  'text',
    ]);
    $cmb->add_field([
        'name'  =>  'LinkedIn',
        'id'  =>  'linkedin',
        'type'  =>  'text',
    ]);
    $cmb->add_field([
        'name'  =>  'GitHub',
        'id'  =>  'git',
        'type'  =>  'text',
    ]);
    $cmb->add_field([
        'name'  =>  'Instagram',
        'id'  =>  'instagram',
        'type'  =>  'text',
    ]);
};
?>