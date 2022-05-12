<?php

/**
 * Registers block patterns and categories.
 */
function wpzoom_fbp_register_block_patterns() {

        $block_pattern_categories = array(
            'wpz-featured'      => array( 'label' => __( 'WPZOOM Food Blog Patterns', 'wpzoom-food-blog-patterns' ) ),
        );

        $block_pattern_categories = apply_filters( 'wpzoom_block_pattern_categories', $block_pattern_categories );

        foreach ( $block_pattern_categories as $name => $properties ) {
            register_block_pattern_category( $name, $properties );
        }

            $block_patterns = array(
                'free/featured/featured-categories',
                'free/featured/featured-categories2',
                'free/featured/hero',
                'free/featured/hero2',
                'free/featured/hero3',
                'free/featured/newsletter',
                'free/featured/instagram',
                'free/featured/about',
            );

        $block_patterns = apply_filters( 'wpzoom_block_patterns', $block_patterns );

    foreach ( $block_patterns as $block_pattern ) {
        register_block_pattern(
            'wpzoom/' . $block_pattern,
            require __DIR__ . '/patterns/' . $block_pattern . '.php'
        );
    }
}
add_action( 'init', 'wpzoom_fbp_register_block_patterns', 9 );