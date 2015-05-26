<!--CONTENT-->
      
	   <?php 
	   $i=0;
	   if(have_posts()): ?><?php while(have_posts()): $i++;?><?php the_post(); ?>
		
		<?php
			if($i%3==1)	{
				echo '<div class="row"><div class="container col-sm-12 homepage-gallery-thumb-row">';			
			}
		?>
		<div class="col-sm-4">
			 <!--CALL TO POST IMAGE-->
			<?php 
			if ( has_post_thumbnail() ) {
			?>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a>
			<?php
			}
			else if($photo = trt_get_images('numberposts=1', true)) {
			?>
					
				<a href="<?php the_permalink();?>"><?php echo wp_get_attachment_image($photo[0]->ID ,'medium'); ?></a>
			<?php
			}
			else { ?>			
				<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/blank_img.png" alt="<?php the_title_attribute(); ?>" class="trt_thumbnail"/></a>
			<?php 
			} 
			?>

			<h5 class="homepage-gallery-thumb-caption"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
			
		</div>
		<?php 
		if($i%3==0)	{
			echo '</div></div>';
		}
		endwhile; 
		if($i%3>0)	{
			echo '</div></div>';
		}
		?> 

		<?php endif ?>
