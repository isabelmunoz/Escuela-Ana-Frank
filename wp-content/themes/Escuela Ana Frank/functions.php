<<<<<<< HEAD
<?php
//Registro de styles

function register_enqueue_style() {
    $theme_data = wp_get_theme();

 /* Registrando estilos */
  wp_register_style('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', null, '4.1.1', 'screen');
  wp_register_style('fontawesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '5.1.0', 'screen');
  wp_register_style( 'mystyle', get_theme_file_uri( '/assets/css/styles.css'), null, $theme_data->get( 'Version' ), 'screen' );

  /* Estilos en cola */
  wp_enqueue_style('bootstrapcdn');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('mystyle');
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

//Registro de scripts
function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

 /* Registrando scripts */
 wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.min.js',null, '3.3.1', true);
 wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/jquery-migrate.js'), array('jquery'), null, true);
wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null,'1.14.3', true);
wp_register_script('bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', null, null, true);
 wp_register_script('modal', get_theme_file_uri('/assets/js/modal.js'), null, null, true);
 wp_register_script('bsPhotoGallery', get_theme_file_uri('/assets/js/jquery.bsPhotoGallery.min.js'), null, null, true);
wp_register_script('scripts', get_theme_file_uri('/assets/js/scripts.js'), null, null, true);

 /* Estilos en cola */
 wp_enqueue_script('jquery');
 wp_enqueue_script('jquery-migrate');
 wp_enqueue_script('popper');
 wp_enqueue_script('bootstrapcdn');
 wp_enqueue_script('modal');
 wp_enqueue_script('bsPhotoGallery');
 wp_enqueue_script('scripts');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


//logo personalizable

    function config_custom_logo() {
        add_theme_support( 'custom-logo', array(
          'height'      => 100,
          'width'       => 400,
          'flex-height' => true,
          'flex-width'  => true,
          'header-text' => array( 'site-title', 'site-description' ),
        ));
      }
      add_action( 'after_setup_theme', 'config_custom_logo' );

// menu personalizable
    function menus_setup() {
    	register_nav_menus(
    		array(
    			'header-menu'	=> __( 'Header Menu' ),
    			'footer-menu'	=> __( 'Footer Menu' ),
    		)
    	);
    }

    add_action( 'after_setup_theme', 'menus_setup' );


//activando las imagenes destacadas
    if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

//desactivar error functions.php Notice: ob_end_flush(): failed to send buffer of zlib output compression (1) in

    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
    ?>
=======
<?php
//Registro de styles

function register_enqueue_style() {
    $theme_data = wp_get_theme();

 /* Registrando estilos */
  wp_register_style('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', null, '4.1.1', 'screen');
  wp_register_style('fontawesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '5.1.0', 'screen');
  wp_register_style( 'mystyle', get_theme_file_uri( '/assets/css/styles.css'), null, $theme_data->get( 'Version' ), 'screen' );

  /* Estilos en cola */
  wp_enqueue_style('bootstrapcdn');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('mystyle');
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

//Registro de scripts
function register_enqueue_scripts() {
  $theme_data = wp_get_theme();

  //wp_deregister_script('jquery');
  //wp_deregister_script('jquery-migrate');

 /* Registrando scripts */
//wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.min.js',null, '3.3.1', true);
//wp_register_script('jquery-migrate', get_theme_file_uri('/assets/js/jquery-migrate.js'), array('jquery'), null, true);
wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null,'1.14.3', true);
wp_register_script('bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', null, null, true);
wp_register_script('bsPhotoGallery', get_theme_file_uri('/assets/js/jquery.bsPhotoGallery.min.js'), null, null, true);
wp_register_script('scripts', get_theme_file_uri('/assets/js/scripts.js'), null, null, true);
wp_register_script('modal', get_theme_file_uri('/assets/js/modal.js'), null, null, true);

 /* Estilos en cola */
 wp_enqueue_script('bootstrapcdn');
 wp_enqueue_script('popper');
 wp_enqueue_script('bsPhotoGallery');
 wp_enqueue_script('modal');
 wp_enqueue_script('scripts');


}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


//logo personalizable

    function config_custom_logo() {
        add_theme_support( 'custom-logo', array(
          'height'      => 100,
          'width'       => 400,
          'flex-height' => true,
          'flex-width'  => true,
          'header-text' => array( 'site-title', 'site-description' ),
        ));
      }
      add_action( 'after_setup_theme', 'config_custom_logo' );

// menu personalizable
    function menus_setup() {
    	register_nav_menus(
    		array(
    			'header-menu'	=> __( 'Header Menu' ),
    			'footer-menu'	=> __( 'Footer Menu' ),
    		)
    	);
    }

    add_action( 'after_setup_theme', 'menus_setup' );


//activando las imagenes destacadas
    if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

//activando widgets
        function widgets_anafrank() {

        // Nueva Zona Agregada
        register_sidebar( array(
        'name'          => __( 'Header', 'anafrank' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Sidebar', 'anafrank' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Footer 1', 'anafrank' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Footer 2', 'anafrank' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );
        }
        add_action( 'widgets_init', 'widgets_anafrank' );


//desactivar error functions.php Notice: ob_end_flush(): failed to send buffer of zlib output compression (1) in

    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

// Register Custom Post Type Actividades
    function actividades_post_type() {

    	$labels = array(
    		'name'                  => _x( 'actividades', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'actividad', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Actividades', 'text_domain' ),
    		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'All Items', 'text_domain' ),
    		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    		'add_new'               => __( 'Add New', 'text_domain' ),
    		'new_item'              => __( 'New Item', 'text_domain' ),
    		'edit_item'             => __( 'Edit Item', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'actividad', 'text_domain' ),
    		'description'           => __( 'personalización de las actividades', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-format-gallery',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'actividades', $args );

    }
    add_action( 'init', 'actividades_post_type', 0 );

// Register Custom Post Type temas
    function temas_post_type() {

    	$labels = array(
    		'name'                  => _x( 'temas', 'Post Type General Name', 'text_domain' ),
    		'singular_name'         => _x( 'tema', 'Post Type Singular Name', 'text_domain' ),
    		'menu_name'             => __( 'Temas de interés', 'text_domain' ),
    		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    		'archives'              => __( 'Item Archives', 'text_domain' ),
    		'attributes'            => __( 'Item Attributes', 'text_domain' ),
    		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    		'all_items'             => __( 'All Items', 'text_domain' ),
    		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    		'add_new'               => __( 'Add New', 'text_domain' ),
    		'new_item'              => __( 'New Item', 'text_domain' ),
    		'edit_item'             => __( 'Edit Item', 'text_domain' ),
    		'update_item'           => __( 'Update Item', 'text_domain' ),
    		'view_item'             => __( 'View Item', 'text_domain' ),
    		'view_items'            => __( 'View Items', 'text_domain' ),
    		'search_items'          => __( 'Search Item', 'text_domain' ),
    		'not_found'             => __( 'Not found', 'text_domain' ),
    		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    		'featured_image'        => __( 'Featured Image', 'text_domain' ),
    		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    		'items_list'            => __( 'Items list', 'text_domain' ),
    		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    	);
    	$args = array(
    		'label'                 => __( 'tema', 'text_domain' ),
    		'description'           => __( 'personalización de los temas de interés', 'text_domain' ),
    		'labels'                => $labels,
    		'supports'              => array( 'title', 'editor', 'thumbnail' ),
    		'taxonomies'            => array( 'category', 'post_tag' ),
    		'hierarchical'          => false,
    		'public'                => true,
    		'show_ui'               => true,
    		'show_in_menu'          => true,
    		'menu_position'         => 5,
    		'menu_icon'             => 'dashicons-format-aside',
    		'show_in_admin_bar'     => true,
    		'show_in_nav_menus'     => true,
    		'can_export'            => true,
    		'has_archive'           => true,
    		'exclude_from_search'   => false,
    		'publicly_queryable'    => true,
    		'capability_type'       => 'page',
    	);
    	register_post_type( 'temas de interés', $args );

    }
    add_action( 'init', 'temas_post_type', 0 );

    ?>
>>>>>>> avance proyecto
