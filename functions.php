<?php 

	function current_location()
	{
	    if (isset($_SERVER['HTTPS']) &&
	        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
	        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
	        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
	        $protocol = 'https://';
	    } else {
	        $protocol = 'http://';
	    }
	    return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	}
	function load_styles(){
		$slug = current_location();
		if(!strpos($slug,'wp-admin'))
			wp_enqueue_style( 'style' , get_template_directory_uri() . '/style.css' , array() , null  );

		wp_deregister_script('jquery');
		wp_deregister_script('slick');

		wp_enqueue_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' , array() , null ,true );

		wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' ,array('jquery'), null );

		wp_enqueue_script( 'libs', get_template_directory_uri() . '/js/libs.min.js' ,array( 'jquery' , 'slick'), null, true );

		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' ,array( 'jquery' , 'slick'), null, true);
	}

	add_action('wp_enqueue_scripts', load_styles());

	add_theme_support('menus');

	register_nav_menus(
		array(
			'top-menu' => __('top', 'tech'),
		)
	);

	
?>