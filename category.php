<?php get_header(); ?>
<p>Category: <?php $cat = single_cat_title(); ?></p>


<!-- <?php
global $post;
$args = array( 'post_type' => 'naga_menu', 'category_name' => $cat );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  <div class="col-md-4 menu-item">
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
?> -->
<?php get_footer(); ?>
