<?php


function naga_load_scripts(){

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'construction_css', get_template_directory_uri() . '/assets/css/naga.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fontawsome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1', 'all' );

	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true );
  wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array('jquery'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'naga_load_scripts' );


function footer_widget_setup(){
  register_sidebar(
    array(
      'name'          => 'Footer Left',
      'id'            => 'footer',
      'class'         => 'footer',
      'dscription'    => 'Footer Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>'
    )
  );

  register_sidebar(
    array(
      'name'          => 'Footer Center',
      'id'            => 'footer_1',
      'class'         => 'footer',
      'dscription'    => 'Footer Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>'
    )
  );

  register_sidebar(
    array(
      'name'          => 'Footer right',
      'id'            => 'footer_2',
      'class'         => 'footer',
      'dscription'    => 'Footer Sidebar',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>'
    )
  );

  register_sidebar(
    array(
      'name'          => 'Category Sidebar',
      'id'            => 'sidecat',
      'class'         => 'cat-side',
      'dscription'    => 'Category Sidebar',
      'before_widget' => '<aside id="%1$s" class="sidecat %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="sidecat-title">',
      'after_title'   => '</h3>'
    )
  );
}

add_action('widgets_init', 'footer_widget_setup');


function naga_gallery(){
  $labels = array(
    'name'           => 'Gallery',
    'singular_name'  => 'Gallery',
    'menu_name'      => 'Gallery',
    'name_admin_bar' => 'Gallery'
  );

  $args = array(
    'labels'  => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type'  => 'post',
    'hierarchical'     => false,
    'menu_position' => 26,
    'menu_icon'        => 'dashicons-format-image',
    'supports'         => array('title', 'editor', 'author','thumbnail' )
  );

  register_post_type('naga_gallery', $args);
}

$gallery = cs_get_option('gallery');

if( $gallery == 1):
  add_action( 'init', 'naga_gallery' );
endif;


function naga_menu(){
  $labels = array(
    'name'           => 'Menu',
    'singular_name'  => 'Menu',
    'menu_name'      => 'Menu',
    'name_admin_bar' => 'Menu'
  );

  $args = array(
    'labels'  => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type'  => 'post',
    'hierarchical'     => false,
    'menu_position' => 16,
    'menu_icon'        => 'dashicons-menu',
    'supports'         => array('title', 'author','thumbnail'),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type('naga_menu', $args);
}
$eat_menu = cs_get_option('eat-menu');
if( $eat_menu == 1 ):
  add_action( 'init', 'naga_menu' );

  add_filter( 'manage_naga_menu_posts_columns', 'naga_set_naga_menu_columns' );
  add_action( 'manage_naga_menu_posts_custom_column', 'naga_menu_custom_column', 10, 2 );
  add_action( 'add_meta_boxes', 'naga_menu_box' );

  add_action( 'save_post', 'naga_save_menu_det_data' );
  add_action( 'save_post', 'naga_save_menu_prix_data' );

endif;


function naga_set_naga_menu_columns( $columns ){
  $newColumns = array();
  $newColumns['title'] = 'Titre';
  $newColumns['prix'] = 'Prix';
  $newColumns['details'] = 'Details';
  return $newColumns;
}


function naga_menu_custom_column( $column, $post_id ){

  switch( $column ){

    case 'prix':
        //echo get_the_exerpt();
        $prix = get_post_meta( $post_id, '_naga_prix_value_key', true );
        echo $prix;
        //echo 'test';
      break;
    case 'details':
        $details = get_post_meta( $post_id, '_naga_det_value_key', true );
        echo $details;
      break;

  }

}



/* Menu Meta Box */

function naga_menu_box(){

  add_meta_box( 'naga_det', 'Details', 'naga_det_menu_callback', 'naga_menu', 'normal' );
  add_meta_box( 'naga_prix', 'Prix', 'naga_prix_menu_callback', 'naga_menu', 'advanced' );

}

function naga_det_menu_callback( $post ){
  wp_nonce_field( 'naga_save_menu_det_data', 'naga_det_box_nonce' );

  $value = get_post_meta( $post->ID, '_naga_det_value_key', true );

  echo '<label for="naga_menu_det_field">Details</label>';
  echo '<input type="text" id="naga_menu_det_field" name="naga_menu_det_field" value="'.esc_attr($value).'"/>';
}

function naga_prix_menu_callback( $post ){
  wp_nonce_field( 'naga_save_menu_prix_data', 'naga_prix_box_nonce' );

  $value = get_post_meta( $post->ID, '_naga_prix_value_key', true );

  echo '<label for="naga_menu_prix_field">Prix</label>';
  echo '<input type="text" id="naga_menu_prix_field" name="naga_menu_prix_field" value="'.esc_attr($value).'"/>';
}



function naga_save_menu_det_data( $post_id ){
  if( !isset( $_POST['naga_det_box_nonce'] ) ){
    return;
  }

  if( !wp_verify_nonce( $_POST['naga_det_box_nonce'], 'naga_save_menu_det_data' ) ){
    return;
  }

  if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
    return;
  }

  if( !current_user_can( 'edit_post', $post_id ) ){
    return;
  }

  if( !isset( $_POST['naga_menu_det_field'] ) ){
    return;
  }

  $my_data = sanitize_text_field( $_POST['naga_menu_det_field'] );

  update_post_meta( $post_id, '_naga_det_value_key', $my_data );


}

function naga_save_menu_prix_data( $post_id ){
  if( !isset( $_POST['naga_prix_box_nonce'] ) ){
    return;
  }

  if( !wp_verify_nonce( $_POST['naga_prix_box_nonce'], 'naga_save_menu_prix_data' ) ){
    return;
  }

  if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
    return;
  }

  if( !current_user_can( 'edit_post', $post_id ) ){
    return;
  }

  if( !isset( $_POST['naga_menu_prix_field'] ) ){
    return;
  }

  $my_data = sanitize_text_field( $_POST['naga_menu_prix_field'] );

  update_post_meta( $post_id, '_naga_prix_value_key', $my_data );


}

add_theme_support('html5',array('search-form'));

function register_naga_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }

 add_action('init', 'register_naga_menus');

function add_classes_to_page_menu( $ulclass ) {
  return preg_replace( '/<ul>/', '<ul class="navbar-nav ml-auto">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'add_classes_to_page_menu' );
