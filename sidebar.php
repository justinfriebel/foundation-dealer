<aside id="sidebar" class="small-12 large-4">
	<?php do_action('foundationPress_before_sidebar'); ?>
		
		<article class="popular-posts-container row widget widget_categories">
		<div class="small-12 columns">
		<h5 class="popular-posts-title">Popular posts</h5>
		<?php 
		
			$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			
			while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
				<h6 class="popular posts">
					<a href="
						<?php the_permalink(); ?>"><?php the_title(); ?>
					</a>
				</h6>
			<?php endwhile;
			
		?>
		</div>
		</article>
		
	<?php dynamic_sidebar("sidebar-widgets"); ?>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>