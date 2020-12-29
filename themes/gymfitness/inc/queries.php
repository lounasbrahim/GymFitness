<?php 
	function gymfintess_classes_list(){ ?>
		<ul class="classes-list">
			<?php 
				$args = array( 
					"post_type"     => "gymfitness_classes", 
					"post__not_in"  =>  array($post->ID)
				);

				$classes = new WP_Query($args); 	

				while( $classes->have_posts() ): $classes->the_post(); ?>
				<li class="gym-class" onclick="window.location.href='<?php the_permalink(); ?>'">
					<?php 
					the_post_thumbnail("blog-single-box") ?>
					<div class="gym-class-content gradient">
						<a href="<?php the_permalink(); ?>">	
							<H3 class=""><?php the_title(); ?></H3>
						</a>	
						<?php   get_template_part("template_parts/class" , "time" ); ?>
					</div>
					
				</li>
			<?php endwhile; wp_reset_postdata(); ?>

		</ul>

	<?php }

