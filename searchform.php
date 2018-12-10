<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package Naga
 * @since 1.0
 * @version 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) );?>">
  <input type="search" class="input-search" name="s" placeholder="Search">
  <input type="submit" class="btn-search" value="Search">
</form>
