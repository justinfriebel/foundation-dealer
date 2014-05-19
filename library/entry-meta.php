<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<p class="byline author"><time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s', 'FoundationPress'), get_the_time('l, F jS, Y')) .'</time> '. __('and written by', 'FoundationPress') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a> in '. the_category(', ') .'</p>';
    }
endif;

		function entry_meta_2() {
			
			$entry_machine_time = get_the_time('c');
			$entry_human_time = get_the_time('l, F jS, Y');
			$entry_posts_url = get_author_posts_url(get_the_author_meta('ID'));
			$entry_author = get_the_author();
			$entry_category = get_the_category_list(', ');
			$entry_meta = '<p class="byline author"><time class="updated" datetime="'
															. $entry_machine_time
															. '" pubdate=""> Posted on '
															. $entry_human_time
															. '</time> and written by <a href="'
															. $entry_posts_url
															. '" rel="author" class="fn">'
															. $entry_author
															. '</a> in '
															. $entry_category
															. ".</p>";
			
			return $entry_meta;
			
		}

?>
