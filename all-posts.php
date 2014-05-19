<?php
/*
Template Name: all posts
*/

get_header(); ?>

<div class="single-post-container">
	<div class="small-12 large-8 single-post-content" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	

		<h1 class="entry-title"><?php the_title(); ?></h1>

    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 'post_type' => 'post', 'posts_per_page' => 6, 'paged' => $paged );
    $wp_query = new WP_Query($args);
    while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?= get_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php endwhile; ?>

    <?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	 <?php } ?>
	
	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>