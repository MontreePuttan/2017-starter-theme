<?php  

/*
 * Template Name: Special Layout
 */
get_header();

if(have_posts()):
	while(have_posts()):the_post();
?>
	<article class="post page">
		<h2><?php the_title(); ?></h2>

			<!-- info-box -->
			<div class="info-box">
				<h4>Disclaimer Title</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa doloremque alias ab obcaecati animi nemo, maiores reiciendis temporibus ad officia nisi cupiditate voluptas hic sapiente adipisci facere recusandae facilis vero!</p>
			</div><!-- /info-box -->

		<?php the_content(); ?>
	</article>
<?php  
endwhile;

else:
	echo '<p>No content found</p>';
endif;

get_footer();
?>