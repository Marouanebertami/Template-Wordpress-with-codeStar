<?php get_header(); ?>
<?php
		        if(have_posts()):
		            while(have_posts()): the_post();
		    ?>
				<div class="title-page" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
				  <div class="page-title">
						<h1><?php the_title(); ?></h1>
						<small>Posted on <?php the_time('F j,Y'); ?> at <?php the_time('g:i a'); ?></small>
				  </div>
				</div>
		    <div class="container page-p">
					<div class="row">
						<div class="col-sm-8">
			      	<!--  <h1><?php the_title(); ?></h1>
			        <div class="thumbnail-img"> <?php the_post_thumbnail('large'); ?> </div>-->
		        <?php the_content(); ?>
						</div>
						<div class="col-sm-4 side-cat">
							<?php dynamic_sidebar('sidecat'); ?>
						</div>
					</div>
		    </div>
		    <?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>
