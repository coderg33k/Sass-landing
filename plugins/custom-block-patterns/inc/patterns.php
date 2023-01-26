<?php

/**
     * CUSTOM BLOCK PATTERN for Custom Cat
     * - Register Pattern Cat/Label
     * - Register Block Pattern
*/

register_block_pattern_category(
    'Saas Landing Patterns',
    array(
        'label'     => __( 'Saas Landing Patterns', 'sass-landing' )
    )
);

function custom_block_pattern() {

    register_block_pattern(
        'sass-landing/custom-block-name',
        array(
            'title'       => __( 'Pattern 1', 'sass-landing' ),
           
            'description' => _x( 'First Pattern', 'sass-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Saas Landing Patterns' ),
        )
    );
    register_block_pattern(
        'sass-landing/custom-block-name',
        array(
            'title'       => __( 'Pattern 2', 'sass-landing' ),
           
            'description' => _x( 'Second Pattern', 'sass-landing' ),
           
            'content'     => "",
           
            'categories'  => array( 'Saas Landing Patterns' ),
        )
    );

}    

add_action( 'init', 'custom_block_pattern' );