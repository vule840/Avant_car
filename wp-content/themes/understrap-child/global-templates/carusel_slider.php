<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators progressbar">

			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">BUSINESS car</li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1">PREMIUM car</li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2">COMFORT van</li>
			     <li data-target="#carouselExampleIndicators" data-slide-to="3">VIP van</li>
			      <li data-target="#carouselExampleIndicators" data-slide-to="4">TESLA model S</li>
			      <li data-target="#carouselExampleIndicators" data-slide-to="5">TESLA model X</li>
			  </ul>
			  <div class="carousel-inner">

			  
			   <!-- PRVI -->

				  <div class="carousel-item active">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
				
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

			    </div>	




<!--   <div class="carousel-item active ">
			     	
			    

			    	<div class="d-none d-md-block">
					 <div class="row no-gutters ">
 

				     	<div class="col-md-3 text-center">
							
						<p><svg class="avantour_covac"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-covac" /></p>
						<p class="tx_field_bold"><strong class="text-center">1-3</strong></p>	
								
						</div>

							<div class="col-md-6">
							<img  src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/Bussines_car.jpg" alt="Karta Hrvatske">
							
						</div>


						
						<div class="col-md-3 text-center">
							<p><svg class="avantour_taska"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-taska" /></p>
							<p class="tx_field_bold"><strong class="text-center">1-3</strong></p>
							
						</div>
						<div class="col-md-12 text-center"><h2 class="text-center">BUSINESS CAR</h2></div>
						

			     	</div>
				</div>	


			 

					<div class="d-block d-lg-none">
						 <div class="row">

						<div class="col-md-12 text-center"><h2 class="text-center">BUSINESS CAR</h2></div>
				     	<div class="col-sm-12">
							<img  src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/Bussines_car.jpg" alt="Karta Hrvatske">
							
						</div>

						
							<div class="col-sm-6 text-right w-50">
							
								<p><svg class="avantour_covac"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-covac" /></p>
								<p class="tx_field_bold"><strong class="text-center">1-3</strong></p>	
									
							</div>

						

							<div class="col-sm-6 text-left w-50">
								<p><svg class="avantour_taska"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-taska" /></p>
								<p class="tx_field_bold"><strong class="text-center">1-3</strong></p>
								
							</div>
					
				     	
			     	</div>  
					</div>
					 
			     	 
			     	


			    </div>
 -->


			  
			<!-- DRUGI -->

			  <div class="carousel-item ">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									'offset' => 1
				
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

			    </div>	


				<!-- TRECI -->

			     <div class="carousel-item ">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									'offset' => 2
				
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

			    </div>

				<!-- ČETVRTI -->

			      <div class="carousel-item ">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									'offset' => 3
				
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

			    </div>

			    <!-- PETI -->

			   <div class="carousel-item ">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									'offset' => 4
				
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

			    </div>
			     <!-- ŠESTI -->

			      <div class="carousel-item ">
			     
					
							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> 1,
									'post_type'			=> 'transferi',
									'offset' => 5
				
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

			    </div>

			  </div>
			<!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a> -->  

			  <p class="transferi_link_rezervirajte text-center">> Rezervirajte unaprijed i putuj bezbrižno do odredišta</p>
			</div>

