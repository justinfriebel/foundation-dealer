<?php get_header(); ?>
	
	<div class="row">
		<div class="small-12 large-8 columns" role="main">
			<div class="featured-posts-container">
				<h3>Featured post</h3>
				<?php
				
					$featured_posts_query = new WP_Query('category_name=featured&posts_per_page=1');

					while ($featured_posts_query->have_posts()) : $featured_posts_query->the_post();
						echo '<a href="' . get_permalink($post->ID) . '" >';
						the_post_thumbnail( 'large' );
						echo '</a>';
						get_template_part( 'content', get_post_format() );
					endwhile;
					
				?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	
	<div class="recent-posts-container rpc-top small-12 medium-12 large-12 row">
    <h3 class="column">Recent posts</h3>
    <?php
      $args = array( 'posts_per_page' => 3 );

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
        if ( !in_category('7') ):
    ?>
        <div class="recent-single-post small-12 medium-4 large-4 columns">
          <?php
						echo '<a href="' . get_permalink($post->ID) . '" >';
						the_post_thumbnail( 'large' );
						echo '</a>';
						get_template_part( 'content', get_post_format() );
					?>
        </div>
    <?php
        endif;
      endforeach; 
      wp_reset_postdata();
    ?>
	</div>

  <div class="recent-posts-container small-12 medium-12 large-12 row">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array( 'posts_per_page' => 3, 'offset' => 3, 'paged' => $paged );

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
        if ( !in_category('7') ):
    ?>
        <div class="recent-single-post small-12 medium-4 large-4 columns">
          <?php
						echo '<a href="' . get_permalink($post->ID) . '" >';
						the_post_thumbnail( 'large' );
						echo '</a>';
						get_template_part( 'content', get_post_format() );
					?>
        </div>
    <?php
        endif;
      endforeach; 
      wp_reset_postdata();
    ?>
	</div>
	
  <div class="row">
    <div class="small-3 large-centered columns">
      <a href="<?php bloginfo('url'); ?>/posts/" class="button">View all posts</a>
    </div>
	</div>

	<?php do_action('foundationPress_after_content'); ?>
		
<?php get_footer(); ?>