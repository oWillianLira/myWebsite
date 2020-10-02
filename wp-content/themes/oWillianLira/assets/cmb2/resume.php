<?php
add_action('cmb2_admin_init', 'cmb_resume');
function cmb_resume() {
    $cmb = new_cmb2_box([
        'id'    =>  'resume_fields',
        'title' =>  'Resume infos',
        'object_types'  =>  ['page'],
        'show_on'   =>  [
            'key'   =>  'page-template',
            'value' =>  'pages/curriculo.php',
        ],
    ]);

    $cmb->add_field([
        'name'  =>  'My Address',
        'id'  =>  'address',
        'type'  =>  'textarea_small',
    ]);

    $cmb->add_field([
        'name'  =>  'Abstract',
        'id'  =>  'abstract',
        'type'  =>  'textarea_small',
    ]);

    // Building a repeater field
    $techs = $cmb->add_field([
        'name'  =>  'Technologies',
        'id'  =>  'technologies',
        'type'  =>  'group',
        'repeatable'    => true,
        'options'   => [
            'group_title'   =>  'Tech {#}',
            'add_button'    =>  'Add',
            'remove_button'    =>  'Remove',
            'sortable'  =>  true,
        ],
    ]);
    //  Adding the sub fields
    $cmb->add_group_field($techs, [
        'name'  =>  'Name',
        'id'  =>  'name',
        'type'  =>  'text',
    ]);
    $cmb->add_group_field($techs, [
        'name'  =>  'Years of experience',
        'id'  =>  'xp',
        'type'  =>  'text',
    ]);

};
?>