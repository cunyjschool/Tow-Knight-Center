<?php get_header(); ?>

<div class="main">
	
	<div class="wrap">
		
	<?php get_sidebar(); ?>
		
	<div class="content">	
		
	<?php if ( have_posts() ) : ?>
		
	<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post" id="post-<?php the_id(); ?>">
			
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