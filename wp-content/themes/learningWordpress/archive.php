<?php  
get_header();

if(have_posts()):


?>

	<h2>
		<?php  
			if(is_category()){
				echo 'This is a category';
			} else if(is_tag()) {
				echo 'Tag';
			} else if(is_author()) {
				the_post();
				echo 'Author Archives: '.get_the_author();
				rewind_posts();
			} else if(is_day()) {
				echo 'Daily Archives: '.get_date();
			} else if(is_month()) {
				echo 'Monthly Archives: '.get_the_date('F Y');
			} else if(is_year()) {
				echo 'Yearly Archives: '.get_the_date('Y');
			} else {
				echo 'Archives: ';
			}
		?>		
	</h2>

<?php	
	while(have_posts()):the_post();
?>
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<p class="post-info">
			<?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in <?php 
					$categories = get_the_category();
					$separator = ", ";
					$output = ''; 

					if($categories){
						foreach ($categories as $category) {
								
								$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;

							}	 

							echo trim($output,$separator);
					}
				?>
				
		</p>

		<?php the_content(); ?>
	</article>
<?php  
endwhile;

else:
	echo '<p>No content found</p>';
endif;

get_footer();
?>