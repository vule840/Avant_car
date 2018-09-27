	<!-- ****************************
				POČETNA__5. DRUŠTVA ZA UPRAVLJANJE
		*******************************-->
		



<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
			  <ul class="carousel-indicators progressbar">
			  
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">CITY / COMPACT</li>

			    <li data-target="#carouselExampleIndicators" data-slide-to="1">ECONOMY</li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2">BUSINESS</li>
			     <li data-target="#carouselExampleIndicators" data-slide-to="3">PREMIUM TESLA</li>
			      <li data-target="#carouselExampleIndicators" data-slide-to="4">ELECTRIC BUSINESS</li>
			      <li data-target="#carouselExampleIndicators" data-slide-to="5">VAN</li>
			     <!-- <li data-target="#carouselExampleIndicators" data-slide-to="6">VOZILA PO NARUDŽBI</li> --> 
			  </ul>
			  <div class="carousel-inner">


			  	<!-- 1. -->
			    <div class="carousel-item active">
			     
					<h2 class="text-center text-uppercase">City/Compact</h2>
					 


							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
									'post_type'			=> 'city_compact',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center popmake-dugorocni-najam">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	

			    </div>



		<!-- 2. -->
			 <div class="carousel-item">

					<h2 class="text-center text-uppercase">Economy</h2>

			    		<?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'economy',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	
				
			    </div>

		<!-- 3. -->
			    <div class="carousel-item">

					<h2 class="text-center text-uppercase">Bussines</h2>

			       <?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'bussines',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	


			    </div>
		<!-- 4. -->
			
			    <div class="carousel-item">

			    	<h2 class="text-center text-uppercase">Premium Tesla</h2>

			       <?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'premium_tesla',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	

			    </div>

			  <!-- 5. -->
			    <div class="carousel-item">
						<h2 class="text-center text-uppercase">Electric Compact/Bussines</h2>

			       <?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'Electric_compact_bussines',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>

										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	

			    </div>

				 <!-- 6. -->
			    <div class="carousel-item">
			    		<h2 class="text-center text-uppercase">Van</h2>
			        <?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'Van',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	

			    </div>
			<!-- 7. -->
			    <div class="carousel-item">
			    		<h2 class="text-center text-uppercase">Vozila po narudžbi</h2>
			        <?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'	=> 'Vozila_po_naruzbi',
				
				));
				if( $posts ): ?>
				<div class="row">
				<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );
						
						?>
						<div id="" class="col-md-4 text-center">
							<!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>	-->
									<!-- NASLOV -->	
									<h2><a class="popmake-kratkorocni-najam" href="#"><?php the_title(); ?></a></h2>

								<!-- SLIKA -->
									<?php if( get_field('flota_slika') ): ?>

										<img src="<?php the_field('flota_slika'); ?>" />

									<?php endif; ?>	
								
							 		<!-- TABLICA -->
							 		<table class="table w-50 table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										      	<td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-mjenjac" /></svg></td>
										    </tr>
										    <tr>
										      <td><?php the_field('Flota_broj_sjedala') ?></td>
										      <td><?php the_field('Flota_prtljaga') ?></td>
										      <td><?php the_field('Flota_vrata') ?></td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	


			    </div>



			  </div>
			
			</div> 