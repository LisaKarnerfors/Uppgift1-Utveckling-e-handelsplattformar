<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
            
            	    <artical> 
					<!-- Loop letar efter posts och skriver ut det på sidan -->
					<?php
    					while (have_posts()) {
        	        		the_post();?>
                	    <?php the_post_thumbnail();?>    
						<h1><?php the_title(); ?></h1></a>

					<!-- Skriver ut datum, författare och kategorier -->
					<div class="meta">
						<i class="fa fa-calendar"><?php the_time( 'j F, Y' ); ?></i> 
						<i class="fa fa-user"><?php the_author_posts_link(); ?></i>
						<i class="fa fa-tag"><?php the_category( ', ' ); ?></i>
					</div>
						<p><?php the_content(); ?></p>
					<?php } ?>	
					</artikel>
            	     	 
                </div>
            </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>