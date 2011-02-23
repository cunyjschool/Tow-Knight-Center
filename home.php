<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
	<?php get_sidebar(); ?>
		
	<div class="content">	
		
	<?php if ( have_posts() ) : ?>
		
	<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post" id="post-<?php the_id(); ?>">
			
			<img class="towknight-logo" src="<?php bloginfo('template_directory'); ?>/img/towknight2_h500.png" width="500px" height="86px" />
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		</div>
		
	<?php endwhile; ?>
	
	<?php endif; ?>
	
	</div><!-- END .content -->

	</div><!-- END .wrap -->
	
</div><!-- END .main -->

<?php get_footer(); ?>