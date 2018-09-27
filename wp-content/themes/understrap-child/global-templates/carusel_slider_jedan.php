
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									  'offset'     =>  1
				
				));
				if( $posts ): ?>
				
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>

		<div>
			<div class="d-none d-md-block">
					 <div class="row no-gutters ">
 

				     	<div class="col-md-3 text-center">
							
						<p><svg class="avantour_covac"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-covac" /></p>
						<p class="tx_field_bold"><strong class="text-center"><?php the_field('avantour_prtljaga') ?></strong></p>	
								
						</div>

							<div class="col-md-6">
							<img  src="<?php the_field('avantour_auto_slika'); ?>" alt="Karta Hrvatske">
							
						</div>


						
						<div class="col-md-3 text-center">
							<p><svg class="avantour_taska"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-taska" /></p>
							<p class="tx_field_bold"><strong class="text-center"><?php the_field('avantour_ljudi') ?></strong></p>
							
						</div>
						<div class="col-md-12 text-center"><h2 class="text-center"><?php the_field('avantour_auto') ?></h2></div>
						

			     	</div>
				</div>	


			     	<!-- MOB -->

					<div class="d-block d-lg-none">
						 <div class="row">

						<div class="col-md-12 text-center"><h2 class="text-center"><?php the_field('avantour_auto') ?></h2></div>
				     	<div class="col-sm-12">
							<img  src="<?php the_field('avantour_auto_slika'); ?>" alt="Karta Hrvatske">
							
						</div>

						
							<div class="col-sm-6 text-right w-50">
							
								<p><svg class="avantour_covac"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-covac" /></p>
								<p class="tx_field_bold"><strong class="text-center"><?php the_field('avantour_prtljaga') ?></strong></p>	
									
							</div>

						

							<div class="col-sm-6 text-left w-50">
								<p><svg class="avantour_taska"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-taska" /></p>
								<p class="tx_field_bold"><strong class="text-center"><?php the_field('avantour_ljudi') ?><</strong></p>
								
							</div>
					
				     	
			     	</div>  
					</div>

			</div>
					 
					<?php endforeach; ?>
					
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	
