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
					<div class="meta">
						Created By <?php (the_author()); ?> On <?php the_time("F j, Y g:i a"); //the_date("l jS \of F Y h:i:s A"); ?>
					</div>
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

			<?php
				comments_template();
			?>
	</div>



<?php
	get_footer();
?>