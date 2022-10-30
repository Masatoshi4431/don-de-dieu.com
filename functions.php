<?php
/* ============================================================
	News
============================================================ */

    function create_news_type() {
    	register_post_type( 'news',
    		array(
    			'labels' => array(
    				'name' => __('News'),
    				'singular_name' => __( 'News' )
    			),
    			'public' => true,
    			'menu_position' =>5,
    		)
    	);
    }
    add_action( 'init', 'create_news_type' );
?>