<?php
	get_header();
?>
<div class="container">
	<div class="main">
		
			<?php if(have_posts()) : ?>
			<?php while (have_posts()): the_post(); ?>
				<article class="post">
					<h3>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h3>
					<div class="meta">
						Created By <a href="<?php get_author_posts_url(get_the_author_meta("id")); ?>"><?php (the_author()); ?></a>  
						On <?php the_time("F j, Y g:i a"); //the_date("l jS \of F Y h:i:s A"); ?>
					</div>
					<?php if(has_post_thumbnail()) : ?> 
						<div class="post-thumbnail">
							<?php 
								the_post_thumbnail();
							?>
						</div>
					<?php endif; ?>
					<p><?php the_excerpt(); ?></p>
					<br>
					<a class="button" href="<?php the_permalink(); ?>">
						Read More
					</a>
				</article>
				
			<?php endwhile; ?>
			<?php else : ?>
				<?php  
					echo wpautop("Sorry no post were found.");
				?>
			<?php endif; ?>
		
	</div>

	
<?php
	get_footer();
?>