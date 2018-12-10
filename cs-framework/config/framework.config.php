<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Naga Thai Cuisine',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'naga-theme',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Naga Thai Cuisine <small>by OPCURR</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => 'General',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'title',
      'type'    => 'text',
      'default' => get_bloginfo('title'),
      'title'   => 'Titre du site',
    ),
    // end: a field

    array(
      'id'      => 'slogan',
      'type'    => 'text',
      'default' => get_bloginfo('description'),
      'title'   => 'Slogan',
    ),

    array(
      'id'      => 'logo',
      'type'    => 'upload',
      'title'   => 'Logo',
      'default' => get_template_directory_uri() .'/assets/img/logo1.png',
      'after'   => '<div class="logo-theme" style="background-image:url('.cs_get_option('logo').');background-repeat: no-repeat;background-size: contain;background-position: center;"></div>',
    ),

    array(
      'id'      => 'favicon',
      'type'    => 'upload',
      'title'   => 'Favicon',
      'default' => get_template_directory_uri() .'/assets/img/logo1.png',
      'after'   => '<div class="favicon-theme" style="background-image:url('.cs_get_option('favicon').');background-repeat: no-repeat;background-size: contain;background-position: center;"></div>',
    ),

    array(
      'id'      => 'primary_color',
      'type'    => 'color_picker',
      'title'   => 'Primary Theme Color',
      'default' => '#274da5',
    ),

    array(
      'id'      => 'secondary_color',
      'type'    => 'color_picker',
      'title'   => 'Secondary Theme Color',
      'default' => '#3498db',
    ),

    array(
      'id'      => 'background_color',
      'type'    => 'color_picker',
      'title'   => 'Background Color',
      'default' => '#000',
    ),

    array(
      'id'      => 'background_img',
      'type'    => 'upload',
      'title'   => 'Background Image',
      'after'   => '<div class="logo-theme" style="background-image:url('.cs_get_option('background_img').');background-repeat: no-repeat;background-size: contain;background-position: center;"></div>',
    ),

  ), // end: fields
);

//Header Options

$options[] = array(
	'name' => 'header',
	'title' => 'Header',
	'icon'  => 'fa fa-bars',
	'fields' => array(
		array(
			'id' => 'textheadercolor',
			'type' => 'color_picker',
			'title' => 'Text Header Color',
			'default' => '#81d742',
		),
    array(
      'id' => 'header_bakground',
      'type' => 'upload',
      'title' => 'Background Header',
    ),
		array(
			'id' => 'reservation_btn',
			'type' => 'switcher',
			'title' => 'Reservation Button',
			'default' => 1,
		),
		array(
			'id'  => 'backgroundcolor',
			'type' => 'color_picker',
			'title' => 'Background Header Color',
			'default' => '#81d742',
		),
		array(
			'id'  =>  'hovercolor',
			'type' => 'color_picker',
			'title'  => 'Hover Color',
			'default' => '#81d742',
		),
		array(
			'id'  =>  'logo_settings',
			'type'  => 'radio',
			'title'  => 'Logo Settings',
			'options'  => array(
				'logo'  =>  'Custom Logo',
				'title'  =>  'Site Title',
			),
			'default' => 'title',
		),
		array(
			'id'  => 'logo_img',
			'type' => 'upload',
			'title'  => 'Logo Image',
			'settings' => array(
				'upload_type' => 'image',
				'button_title' => 'Upload Logo',
				'insert_title' => 'Selectioner cette Image',
			),
		),
    array(
			'id'  => 'logo_img_black',
			'type' => 'upload',
			'title'  => 'Logo Black Image',
			'settings' => array(
				'upload_type' => 'image',
				'button_title' => 'Upload Logo',
				'insert_title' => 'Selectioner cette Image',
			),
		),
		array(
			'id' => 'standarlogowidth',
			'type' => 'text',
			'title' => 'Standar Logo Width',
		),
		array(
			'id' => 'standarlogoheight',
			'type' => 'text',
			'title' => 'Standar logo heigt',
		),
		array(
			'id' => 'logomargintop',
			'type' => 'text',
			'title' => 'Logo Margin Top',
		),
		array(
			'id' => 'logomarginbottom',
			'type' => 'text',
			'title' => 'Logo Margin Bottom',
		),
		array(
			'id' => 'fulllogowidth',
			'type' => 'switcher',
			'title' => 'Full Logo width',
			'default' => 0,
		),
		array(
			'id' => 'centerlogo',
			'type' => 'switcher',
			'title' => 'Center Logo',
			'default' => 0,
		),
		array(
			'id' => 'socialicon',
			'type' => 'switcher',
			'title' => 'Social Icon',
			'default' => 1,
		),
		array(
			'id' => 'search',
			'type' => 'switcher',
			'title' => 'Search',
			'default' => 1,
		),
		array(
			'id' => 'top_menu',
			'type' => 'switcher',
			'title' => 'Top Menu',
			'default' => 0,
		),

	),
);

$options[] = array(
	'name' => 'footer',
	'title' => 'Footer',
	'icon' => 'fa fa-crosshairs',

	'fields' => array(

		array(
			'id' => 'to_top_button',
			'type' => 'switcher',
			'title' => 'To Top button',
			'default' => 1,
		),

		array(
			'id' => 'footer_background_color',
			'type' => 'color_picker',
			'title' => 'Background Color',
		),
		array(
			'id' => 'footer_background_img',
			'type' => 'upload',
			'title' => 'Background Image',
		),
		array(
			'id' => 'footer_columns',
			'type' => 'radio',
			'title' => 'Footer Columns',
			'options' => array(
				'1' => '1 Column',
				'2' => '2 Column',
				'3' => '3 Columns',
				'4' => '4 Columns',
			),
			'default' => 1,
		),
		array(
			'id' => 'footer_text_color',
			'type' => 'color_picker',
			'title' => 'Color Text',
		),
		array(
			'id' => 'footer_hover_color',
			'type' => 'color_picker',
			'title' => 'Hover Color',
		),
		array(
			'id' => 'footer_hyperlien_color',
			'type' => 'color_picker',
			'title' => 'Hyperliens Color',
		),
		array(
			'id' => 'footer_border_color',
			'type' => 'color_picker',
			'title' => 'Border Color',
		),
		array(
			'id' => 'copyright',
			'type' => 'textarea',
			'title' => 'Copyright',
		),
	),

);

$options[] = array(
	'name'  => 'social_media',
	'title' => 'Social Media',
	'icon'  => 'fa fa-share-square',

	'fields' => array(

		array(
			'id' => 'facebook',
			'type' => 'text',
			'title' => 'Facebook',
			'attributes' => array(
				'placeholder' => 'Facabook',
			),
		),
		array(
			'id' => 'twitter',
      			'type' => 'text',
			'title' => 'Twitter',
			'attributes' => array(
				'placeholder' => 'Twitter',
			),
		),
		array(
			'id' => 'instagram',
			'type' => 'text',
			'title' => 'Instagram',
			'attributes' => array(
				'placeholder' => 'Instagram',
			),
		),
		array(
			'id' => 'linkedin',
			'type' => 'text',
			'title' => 'Linkedin',
			'attributes' => array(
				'placeholder' => 'Linkedin',
			),
      'after' => '<p>Merci d\'ajoute votre URL linkedin. exemple: https://linkedin.com/naga.</p>',
		),
		array(
			'id' => 'tumblr',
			'type' => 'text',
			'title' => 'Tumblr',
			'attributes' => array(
				'placeholder' => 'Tumblr',
			),
		),
		array(
			'id' => 'vero',
			'type' => 'text',
			'title' => 'Vero',
			'attributes' => array(
				'placeholder' => 'Vero',
			),
		),
		array(
			'id' => 'quora',
			'type' => 'text',
			'title' => 'Quora',
			'attributes' => array(
				'placeholder' => 'Quora',
			),
		),
		array(
			'id' => 'viadeo',
			'type' => 'text',
			'title' => 'Viadeo',
			'attributes' => array(
				'placeholder' => 'Viadeo',
			),
		),
		array(
			'id' => 'pinterest',
			'type' => 'text',
			'title' => 'Pinterest',
			'attributes' => array(
				'placeholder' => 'Pinterest',
			),
		),
		array(
			'id' => 'medium',
			'type' => 'text',
			'title' => 'Medium',
			'attributes' => array(
				'placeholder' => 'Medium',
			),
		),


	),
);


//End Header Options
//

$options[] = array(
  'name' => 'options',
  'title' => 'Options',
  'icon' => 'fa fa-filter',
  'fields' => array(
    array(
      'id' => 'eat-menu',
      'type' => 'switcher',
      'title' => 'Chef Menu',
      'default' => 1,
    ),
    array(
      'id' => 'gallery',
      'type' => 'switcher',
      'title' => 'Gallery',
      'default' => 1,
    ),
    array(
      'id' => 'sidebarcat',
      'type' => 'switcher',
      'title' => 'Category Sidebar',
      'default' => 1,
    ),
  ),
);

$options[] = array(
  'name' => 'chef-menu',
  'title' => 'Chef Menu',
  'icon' => 'fa fa-ellipsis-v',
  'fields' => array(
    array(
      'id'         => 'category',
      'type'       => 'checkbox',
      'title'      => 'Menu Categories',
      'options'    => array(
        'signature'      => 'Signature',
        'dejeuners' => 'Déjeuners',
        'boissons'     => 'Boissons',
      ),
    ),
  ),
);

$options[] = array(
  'name' => 'about_us',
  'title' => 'About Us',
  'icon' => 'fa fa-user-tag',
  'fields' => array(
    array(
      'id' => 'about-us',
      'type' => 'switcher',
      'title' => 'Active About Us',
      'default' => 1
    ),
    array(
      'id' => 'founder',
      'type' => 'text',
      'title' => 'Founder',
    ),
    array(
      'id' => 'title-about',
      'type' => 'text',
      'title' => 'Title About Us',
    ),
    array(
      'id' => 'title-about2',
      'type' => 'textarea',
      'title' => 'Vous y dégusterez une cuisine raffinée',
    ),
    array(
      'id' => 'about-us-text',
      'type' => 'textarea',
      'title' => 'About us',
    ),
    array(
      'id' => 'img_about',
      'type' => 'upload',
      'title' => 'Image thumbnail',
    ),
  ),
);
//Contact Options
$options[]  = array(
  'name'   => 'contact',
  'title'  => 'Contact',
  'icon'   => 'fa fa-envelope-o',

  'fields' => array(

    array(
      'id'      => 'email',
      'type'    => 'text',
      'title'   => 'Email',
      'default' => 'info@exemple.com',
      'validate' => 'email',
    ),

    array(
      'id'       => 'phone',
      'type'     => 'text',
      'title'    => 'Phone',
      'default'  => '+212666666666',
    ),

    array(
      'id'       => 'fax',
      'type'     => 'text',
      'title'    => 'Fax',
      'default'  => '+212566666666',
    ),

    array(
      'id'    => 'adress',
      'type'  => 'textarea',
      'title' => 'Adress',
      'default'  => 'Casablanca Grand Casablanca Maroc',
    ),

    array(
      'id'      => 'mapshow',
      'type'    => 'switcher',
      'default' => 1,
      'title'   => 'Show Map',
    ),

    array(
      'id'      => 'latitude',
      'title'   => 'Latitude',
      'type'    => 'text',
      'default' => '48.862725',
      'help'    => 'to get this variable go to google map',
    ),

    array(
      'id'      => 'longitude',
      'title'   => 'Longitude',
      'type'    => 'text',
      'default' => '2.287592000000018',
      'help'    => 'to get this variable go to google map',
    ),
  ),
);

// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
