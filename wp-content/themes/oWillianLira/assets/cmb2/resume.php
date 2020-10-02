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

    // Technologies repeater field
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

    // Academics repeater field
    $techs = $cmb->add_field([
        'name'  =>  'Academics',
        'id'  =>  'academics',
        'type'  =>  'group',
        'repeatable'    => true,
        'options'   => [
            'group_title'   =>  'Course {#}',
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
        'name'  =>  'Conclusion',
        'id'  =>  'conclusion',
        'type'  =>  'text',
    ]);

    // Idioms repeater field
    $techs = $cmb->add_field([
        'name'  =>  'Idioms',
        'id'  =>  'idioms',
        'type'  =>  'group',
        'repeatable'    => true,
        'options'   => [
            'group_title'   =>  'Idiom {#}',
            'add_button'    =>  'Add',
            'remove_button'    =>  'Remove',
            'sortable'  =>  true,
        ],
    ]);
    //  Adding the sub fields
    $cmb->add_group_field($techs, [
        'name'  =>  'Idiom',
        'id'  =>  'idiom',
        'type'  =>  'textarea_small',
    ]);

    // Experience repeater field
    $techs = $cmb->add_field([
        'name'  =>  'Experience',
        'id'  =>  'experience',
        'type'  =>  'group',
        'repeatable'    => true,
        'options'   => [
            'group_title'   =>  'Experience {#}',
            'add_button'    =>  'Add',
            'remove_button'    =>  'Remove',
            'sortable'  =>  true,
        ],
    ]);
    //  Adding the sub fields
    $cmb->add_group_field($techs, [
        'name'  =>  'Company + date + occupation',
        'id'  =>  'company',
        'type'  =>  'textarea_small',
    ]);
    $cmb->add_group_field($techs, [
        'name'  =>  'Description',
        'id'  =>  'desc',
        'type'  =>  'textarea_small',
    ]);

};
?>