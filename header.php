<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/png" href="<?php echo cs_get_option('favicon');  ?>" />
    <title><?php echo cs_get_option('title'); ?> | <?php echo cs_get_option('slogan'); ?></title>
    <?php wp_head(); ?>
  </head>
  <?php $back_img = cs_get_option('background_img'); ?>
  <body <?php body_class(); ?>>

	<?php
		$top_menu = cs_get_option('top_menu');
		$phone = cs_get_option('phone');
		$adress = cs_get_option('adress');
		$logo = cs_get_option('logo');

		$social_icon = cs_get_option('socialicon');
	?>
    <div class="header">
		<?php if($top_menu != 0){ ?>
      <div class="top_menu"  style="background-color:<?php echo cs_get_option('backgroundcolor'); ?>">
<div class="container">
		    <div class="row">
          <div class="col-sm-6">
      				<span class="contact contact-adresse"><?php if($adress!= ''){ echo '<i class="fas fa-map-marker-alt"></i> '.$adress; }?></span>
      				<span class="contact contact-phone"><?php if($phone != ''){ echo '<i class="fas fa-phone"></i> '.$phone; } ?></span>
      		</div>
      		<div class="col-sm-6 social-media">
      			<ul class="social-media">
      				<?php if($social_icon != 0){ ?>
      					<?php
      						$facebook = cs_get_option('facebook');
      						$twitter = cs_get_option('twitter');
                  $instagram = cs_get_option('instagram');
                  $linkedin = cs_get_option('linkedin');
      					?>
      					<?php if( $facebook != '' ){ ?>
      						<li class="social-media-li">
      							<a href="https://facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
      						</li>
      					<?php } ?>
      					<?php if( $twitter != '' ){ ?>
      						<li class="social-media-li">
      							<a href="https://twitter.com/<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
      						</li>
      					<?php } ?>
                <?php if( $instagram != '' ){ ?>
                  <li class="social-media-li">
      							<a href="https://instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      						</li>
                <?php } ?>
                <?php if( $linkedin != '' ){ ?>
                  <li class="social-media-li">
      							<a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
      						</li>
                <?php } ?>

      				<?php } ?>
      			</ul>
      		</div>
    </div>
  </div>
</div>
    <?php } ?>
<div class="menu-header">
    <div class="container">
      <?php
        $logo_settings = cs_get_option('logo_settings');
        $logo_img = cs_get_option('logo_img');
        $logo_black_img = cs_get_option('logo_img_black');
        $title = cs_get_option('title');


      ?>

  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="<?php echo esc_url( home_url( '' ) );?>" class="navbar-brand" href="#">
      <?php if( $logo_settings == 'logo' ){?>
        <img src="<?php echo $logo_img; ?>" class="img-logo">
        <img src="<?php echo $logo_black_img; ?>" class="img-logo-black display-n">
      <?php }
      else{
      echo '<h1>'.$title.'</h1>';}
       ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'header-menu',
        	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
        	'container'       => 'div',
        	'container_class' => 'collapse navbar-collapse',
        	'container_id'    => 'navbarSupportedContent',
        	'menu_class'      => 'navbar-nav ml-auto',
        	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        	'walker'          => new WP_Bootstrap_Navwalker(),
        )
      );
      ?>
  </nav>

    </div>
  </div>
  </div>
