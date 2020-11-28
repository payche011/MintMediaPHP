<?php 
	// Title Tag
	// Featured img on post
	
	function mint_theme_setup() {
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		
		//register nawwalker
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'MintMedia' )
		) );
			
	}
	add_action('after_setup_theme','mint_theme_setup');


	// Linking Internal&External Resources JS/BOOSTRAP/FAWESOME..

	function add_styles() {
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
		wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
		wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css' );
	}
	add_action('wp_enqueue_scripts','add_styles');

	function add_script(){
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js',['jquery'],'', true );
		wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['jquery'],'',true);
		wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', ['jquery'], '',true);
		wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], '1.0.1', true );
		
		
	}
add_action('wp_enqueue_scripts', 'add_script');

// Register sidebar & widgets

function widgets(){
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<article class="widget p-3 mb-4">',
		'after_widget' => '</article>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
	
}
add_action('widgets_init', 'widgets');

	