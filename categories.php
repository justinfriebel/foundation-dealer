<?php
/*
Template Name: categories
*/

get_header(); ?>

<div class="single-post-container">
	<div class="small-12 large-8 single-post-content" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	

		<h1 class="entry-title"><?php the_title(); ?></h1>

    <?php
      $custom_cat_args = array(
        'orderby' => 'count',
        'parent' => 0
        );
      $categories = get_categories( $custom_cat_args );
      foreach ( $categories as $category ) {
        echo '<h2><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></h2>';
        echo '<p>' . $category->description . '</p>';
      }
    ?>
	
	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>