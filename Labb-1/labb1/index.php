<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">	
					<div class="hero">
						<?php
							while (have_posts()) { 
								the_post();?>			
								<div class="img">
									 <?php the_post_thumbnail(null, ['class'=> 'img-responsive responsive--full', 'title'=> 'Feature image']);?> 	
								<div class="text">
									<p><?php the_content(); ?></p>
								</div>
						<?php } ?>							
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
