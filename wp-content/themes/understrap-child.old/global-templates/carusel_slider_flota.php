	<!-- ****************************
				POČETNA__5. DRUŠTVA ZA UPRAVLJANJE
		*******************************-->
		



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			  
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			  </ol>
			  <div class="carousel-inner">


			  	<!-- 1. -->
			    <div class="carousel-item active">
			     
		
					 


							<?php
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
									'post_type'			=> 'business_car',
				
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
							 		<table class="table  table-light ikonice">
										 
										  <tbody>
										    <tr>
										      <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-sjedalo" /></svg></td>
										      <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-torba" /></svg></td>
										      <td><svg class="flota_vrata"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-vrata" /></svg></td>
										      <td><svg class="flota_snjeg"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#flota-snjeg" /></svg></td>
										    </tr>
										    <tr>
										      <td>4</td>
										      <td>2</td>
										      <td>4</td>
										      <td></td>
										    </tr>
										    
										  </tbody>
										</table>
						
						</div>
					<?php endforeach; ?>
					</div>
					
					
					<?php wp_reset_postdata(); ?>
					
					<?php endif; ?>	








<!-- <div class="card-group">
					  <div class="card">
					  	<h5 class="card-title">Card title</h5>
					    <img class="card-img-top" src="..." alt="Card image cap">
					    <div class="card-body">
					      
					      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					    </div>
					  </div>
					  <div class="card">
					  	<h5 class="card-title">Card title</h5>
					    <img class="card-img-top" src="..." alt="Card image cap">
					    <div class="card-body">
					     
					      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					    </div>
					  </div>
					  <div class="card">
					  	<h5 class="card-title">Card title</h5>
					    <img class="card-img-top" src="..." alt="Card image cap">
					    <div class="card-body">
					    
					      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					    </div>
					  </div>
					</div> -->
					 	
			     	
								     

			     	


			    </div>



		<!-- 2. -->
			 <div class="carousel-item">
			    <div class="card-group">
				  <div class="card">
				    <img class="card-img-top" src="..." alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="..." alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="..." alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>

				
			    </div>


			    <div class="carousel-item">
			       <div class="row">
			     	<div class="col-md-4">
						<img src="https://via.placeholder.com/300x300" alt="">
						<p>dfsddsf dsfsdf</p>
						<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			     	</div>


			    </div>

			

			    <div class="carousel-item">
			       <div class="row">
			     	<div class="col-md-4">
						<img src="https://via.placeholder.com/300x300" alt="">
						<p>dfsddsf dsfsdf</p>
						<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			     	</div>


			    </div>

			  
			    <div class="carousel-item">
			       <div class="row">
			     	<div class="col-md-4">
			     		<h2>VW Up!</h2>
						<img src="https://via.placeholder.com/300x300" alt="">
						<p>dfsddsf dsfsdf</p>
						<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			     	</div>
					
					<div class="row">
			     	<div class="col-md-4">
						<img src="https://via.placeholder.com/300x300" alt="">
						<p>dfsddsf dsfsdf</p>
						<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			     	</div>
			     	<div class="row">
			     	<div class="col-md-4">
						<img src="https://via.placeholder.com/300x300" alt="">
						<p>dfsddsf dsfsdf</p>
						<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			<div class="col-md-4">
				<img src="https://via.placeholder.com/300x300" alt="">
				<p>dfsddsf dsfsdf</p>
				<p>dfsddsf dsfsdf</p>
			</div>
			     	</div>

			    </div>

			  </div>
			
			</div> 