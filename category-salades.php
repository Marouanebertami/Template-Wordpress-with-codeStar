<?php get_header(); ?>
<div class="title-page">
  <div class="cat-title">
    <h1><span>Salades</span></h1>
  </div>
</div>
<div class="container-fluid div-row">
<div class="row">
  <div class="col-md-9">
    <div class="row">
<?php
global $post;
$args = array( 'post_type' => 'naga_menu', 'category_name' => 'salades' );
$myposts = get_posts( $args );
if(count($myposts) != 0){
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  <div class="col-md-9 menu-item">
    <div class="menu-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <p class="menu-title"><?php the_title(); ?><span class="menu-prix"><?php $prix = get_post_meta( $post->ID, '_naga_prix_value_key', true );echo $prix;//the_content(); ?> MAD</span></p>

    <div class="menu-cat"><?php $cat = get_post_meta( $post->ID, '_naga_det_value_key', true );echo $cat;//the_content(); ?></div>
  </div>
<?php
endforeach;
wp_reset_postdata();
}else{
  echo '<div class="col-md-9 menu-item text-center">';
  echo '<p>Don\'t have any Menu for this Category <a class="link-add" href="http://localhost/wordpress/wp-admin/post-new.php?post_type=naga_menu" target="_blank">Add Menu In This Categorie</a></p>';
  echo '</div>';
}
?>
</div>
</div>
<div class="col-md-3 side-cat">
  <?php dynamic_sidebar('sidecat'); ?>
</div>
</div>
</div>

<?php get_footer(); ?>
