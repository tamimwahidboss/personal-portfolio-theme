<?php

/* Start a portfolio page meta box */
if (class_exists('CSF')) {

    // Set a unique slug-like ID
    $prefix = 'tw_portfolio_metabox';

    // Create a metabox
    CSF::createMetabox($prefix, array(
        'title'     => 'Portfolio Options',
        'post_type' => 'portfolio',
    ));

    // Create a portfolio showcase section
    // CSF::createSection($prefix, array(
    //     'title'  => 'Single Page Settings',
    //     'fields' => array(
    //         'id' => 'portfolio-single',
    //         'title' => 'Portfolio Details',
    //     ),
    // ));

    // Create a portfolio slider section
    CSF::createSection($prefix, array(
        'title'  => 'Slider Settings',
        'icon'   => 'dashicons-portfolio',
        'fields' => array(
            array(
                'id'    => 'portfolio-label',
                'type'  => 'repeater',
                'title' => 'Add Popup Labels',
                'fields' => array(
                    array(
                        'id'    => 'portfolio-label-name',
                        'type'  => 'text',
                        'title' => 'Label Name',
                        'default' => 'Label Name',
                    ),
                    array(
                        'id'    => 'portfolio-label-value',
                        'type'  => 'text',
                        'title' => 'Label Value',
                        'default' => 'Label Value',
                    ),
                ),
            ),
        ),
    ));
}
