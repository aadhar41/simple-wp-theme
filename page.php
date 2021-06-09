<?php
	get_header();
?>
<div class="container">
	<div class="main">
		
			<?php if(have_posts()) : ?>
			<?php while (have_posts()): the_post(); ?>
				<article class="post">
					<h3>
						<?php the_title(); ?>
					</h3>
					<?php if(has_post_thumbnail()) : ?> 
						<div class="post-thumbnail">
							<?php 
								the_post_thumbnail();
							?>
						</div>
					<?php endif; ?>
					<p><?php the_content(); ?></p>
				
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