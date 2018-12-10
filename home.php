<?php get_header(); ?>
<?php

$header_background = cs_get_option('header_bakground');

?>
<div class="slider-naga"><?php //echo $header_background; ?>
  <div class="silder" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/2.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <div class="silder display-n" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/15.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <div class="silder display-n" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/3.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <div class="silder display-n" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/16.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <div class="silder display-n" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/11.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <div class="silder display-n" style="background-image:url(<?php echo get_template_directory_uri().'/assets/img/17.JPG'; ?>)" >
    <div class="slider-text">
      <h2>Welcome to</h2>
      <p>
        naga<strong>Thai Cuisine</strong>
      </p>
    </div>
  </div>
  <!--<img src="<?php echo $header_background; ?>"/>-->
  <script type="text/javascript">
  var myIndex = 0;
    carousel();

    	function carousel() {
        var i;
        var x = document.getElementsByClassName("silder");
        for (i = 0; i < x.length; i++) {
           x[i].classList.add("display-n");
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].classList.remove("display-n");
        setTimeout(carousel, 5000); // Change image every 2 seconds
      }
  </script>
</div>

  <?php
    $about = cs_get_option('about-us');
    $title_get = cs_get_option('title-about');
    $founder = cs_get_option('founder');
    $img_about = cs_get_option('img_about');
    $about_text = cs_get_option('about-us-text');
    if( $about == 1 ):
  ?>
  <section class="about-us about-us-r" style="background-image: url('');">
    <img class="back" src="<?php echo get_template_directory_uri() ?>/assets/img/Background.png"/>
    <!-- <div class="container about-us-t"> -->
      <!-- <div class="title_section">
        <span><?= $title_get != '' ? $title_get : 'About us' ; ?></span><br>
        <small>Our Founder <?= $founder; ?></small>
      </div> -->


        <div class="row about-us-te">
          <div class="row">
            <div class="col-md-2">
              <img class=" a-vi" src="<?php echo get_template_directory_uri() ?>/assets/img/about.png"/>
            </div>
            <div class=" col-md-5 about-para">
              <div class="about-par-s">
                <h1>NAGA <span>THAÏ</span></h1>
                <p><?= $about_text; ?></p>
              </div>
            </div>
            <div class="col-md-5 img-div">
              <img class="img-abou" src="<?= $img_about ?>" alt="">
            </div>
        </div>
        </div>
    <!-- </div> -->
  </section>
  <?php
    endif;
  ?>
  <section class="about-cr-section">
    <img class="back" src="<?php echo get_template_directory_uri() ?>/assets/img/Background3.png"/>
    <div class="row">
      <div class="col-md-8 about-cr">
        <h1>Vous y dégusterez une cuisine raffinée,</h1>
        <p><?= cs_get_option('title-about2'); ?></p>
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/lo-graph.png">
      </div>
    </div>
</section>
  <?php
    $eat_menu = cs_get_option('eat-menu');
    if( $eat_menu == 1 ):
  ?>
  <section class="menu">
    <img class="back" src="<?php echo get_template_directory_uri() ?>/assets/img/BackgroundMenu.png"/>
    <!-- <div class="container-fluid"> -->
    <div class="row">
      <div class="col-md-3">
        <img class="back" src="<?php echo get_template_directory_uri() ?>/assets/img/VisualMenu.png"/>
      </div>
      <div class="col-md-9 title_section">
        <!-- <h1>Chef <span>Menu</span></h1> -->
        <?php
        global $post;
        $args = array( 'post_type' => 'naga_menu','posts_per_page' => 3,'orderby' => 'rand', 'category_name' => 'entrees' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="col-md-6 menu-item">
            <div class="menu-img">
              <?php the_post_thumbnail(); ?>
            </div>
        		<p class="menu-title"><?php the_title(); ?></p>
            <p class="menu-prix"><?php $prix = get_post_meta( $post->ID, '_naga_prix_value_key', true );echo $prix;//the_content(); ?> MAD</p>
            <div class="menu-cat"><?php $cat = get_post_meta( $post->ID, '_naga_det_value_key', true );echo $cat;//the_content(); ?></div>
          </div>
        <?php
        endforeach;
        wp_reset_postdata();
?>
      </div>
    </div>
      <!-- <div class="row salades">
        <div class="col-md-6 t">
          <h1>Naga <span>Salades</span></h1>
          <?php
          global $post;
          $args = array( 'post_type' => 'naga_menu','posts_per_page' => 3,'orderby' => 'rand', 'category_name' => 'salades' );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<div class="col-md-9 menu-item">
              <div class="menu-img">
                <?php the_post_thumbnail(); ?>
              </div>
          		<p class="menu-title"><?php the_title(); ?></p>
              <p class="menu-prix"><?php $prix = get_post_meta( $post->ID, '_naga_prix_value_key', true );echo $prix;//the_content(); ?> MAD</p>
              <div class="menu-cat"><?php $det = get_post_meta( $post->ID, '_naga_det_value_key', true );echo $det;//the_content(); ?></div>
            </div>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </div>
        <div class="col-md-6">
          <h1>Naga <span>Soupes</span></h1>
          <?php
          global $post;
          $args = array( 'post_type' => 'naga_menu','posts_per_page' => 3,'orderby' => 'rand', 'category_name' => 'soupes' );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          	<div class="col-md-9 menu-item">
              <div class="menu-img">
                <?php the_post_thumbnail(); ?>
              </div>
          		<p class="menu-title"><?php the_title(); ?></p>
              <p class="menu-prix"><?php $prix = get_post_meta( $post->ID, '_naga_prix_value_key', true );echo $prix;//the_content(); ?> MAD</p>
              <div class="menu-cat"><?php $cat = get_post_meta( $post->ID, '_naga_det_value_key', true );echo $cat;//the_content(); ?></div>
            </div>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
        </div>
      </div> -->
    <!-- </div> -->
  </section>
<?php endif; ?>
  <?php
    $gallery = cs_get_option('gallery');
    if( $gallery == 1 ):
  ?>
      <section class="gallery">
        <div class="gallery-item">
          <div class="title_section">
            <span>Gallery</span>
          </div>

          <div class="gallery">
            <div class="row">
            <?php
            global $post;
            $args = array( 'post_type' => 'naga_gallery','posts_per_page' => 8,'orderby' => 'rand' );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            	<div class="col-md-3">
                <div class="gallery-img">
                  <?php the_post_thumbnail(); ?>
                  <div class="content_post">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
</div>
        </div>
        </div>
      </section>
  <?php
    endif;
  ?>
  <!-- <section  class="section-contact">
    <div class="title_section">
      <span>Contact</span>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="102" title="Contact form 1"]'); ?>
  </section> -->
<?php get_footer(); ?>
