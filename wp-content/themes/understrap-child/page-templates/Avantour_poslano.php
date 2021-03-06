<?php
/**
 * Template Name: Avantour_poslano
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
	
<!-- 

HERO SECTION__HEADER

 -->
<?php get_template_part( 'global-templates/carusel_avantour' ); ?>


<div class="wrapper popmake-kontakt_sucess" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		
	<!--**************.

		1. AVANTOUR__KONTAKT 

		 *************** -->


		<div id="avantour_1_kontakt" class="row">

			<div class="col-md-12 content-area" id="primary">

					<?php gravity_form( 13, false, false, false, '', false ); ?>

			</div><!-- #primary -->

		</div><!-- .row end -->



	<!--**************.

		2. AVANTOUR__AV_USLUGE

		 *************** -->

		 	<div id="avantour_2_usluge" class="row">

			<div class="col-md-12 content-area text-center" id="primary">

					<h2>AVANTOUR USLUGE</h2>

					<div class="card-group">

					
						  <div class="card">
						    
						    <div class="card-body">
						    	<svg class="avantour_avion"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-avion" /></svg>
						      <h5 class="card-title text-white">ZRAČNA LUKA</h5>
						      <p class="card-text font-weight-bold">Povezujemo zračne luke i gradove.</p>
						      <p class="card-text">Za Vas i vaše poslovne partnere organiziramo
		bezbrižan transfer iz i do zračnih luka u Hrvatskoj i
		Sloveniji. Za razliku od taksi usluge, nema čekanja
		te se transfer rezervira unaprijed po fiksnoj cijeni.</p>
						      
						    </div>
						  </div>

						   <div class="card">
						   
						    <div class="card-body">
						    	<svg class="avantour_grad"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-grad" />
						      <h5 class="card-title text-white">INTER CITY</h5>
						      <p class="card-text font-weight-bold">Povezujemo destinacije.</p>
						      <p class="card-text">Avantour omogućava vaš prijevoz od vrata do
		vrata - door-to-door. Ukoliko završavate sastanak
		u jednom gradu i morate odmah krenuti na
		poslovni angažman u drugi grad, INTER CITY
		transfer je rješenje za Vas!</p>
						      
						    </div>
						  </div>
						   <div class="card">
						   
						    <div class="card-body">
						    	<svg class="avantour_lik"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-lik" />
						      <h5 class="card-title text-white">CHAUFFEUR SERVICE</h5>
						      <p class="card-text font-weight-bold">Stvaramo VIP doživljaj.</p>
						      <p class="card-text">Usluga prijevoza Chauffeur service, vodi Vas do
		odredišta sa stilom. Profesionalni i educirani
		vozači preuzet će brigu oko prtljage i biti Vam
		cijelo vrijeme na usluzi. Bez obzira na prigodu,
		poslovno putovanje, event, prijevoz poslovnih
		partnera, pojavite se sa stilom!</p>
						      
						    </div>
				  </div>
				 
				</div>

			</div><!-- #primary -->

		</div><!-- .row end -->


<!--**************.

		3. AVANTOUR__AV_VOZILA

		 *************** -->

		<div  id="avantour_3_vozila" class="row">
			<div class="col-md-12">
				<h2 class="text-center">AVANTOUR VOZILA</h2>
			</div>
			
			<div class="col-md-12">
				<?php get_template_part( 'global-templates/carusel_slider' ); ?>
			</div>
			
		<!-- <div class="col-md-12 content-area" id="primary">
					<h2>AVANTOUR VOZILA</h2>
					<h2>AVANTOUR__AV_VOZILA SLIDER</h2>

			</div> -->	

		</div><!-- .row end -->


		<!--**************.

		4. AVANTOUR__VOZITE_OVERLAY

		 *************** -->
		<div id="Chauffeur-service" class="row traka_logo"><img class="p-2" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/Avantour_logo_2.png" alt="Karta Hrvatske"></div>
		
				

		<div id="avantour_4_vozite" style="background-image:url('<?php the_field('avantour_sekcija'); ?>');" class="row">
			

            <div class="my-auto mx-auto text-center">
                <h2 class="card-title">VOZITE SE SA STILOM. U SVIM PRILIKAMA.</h2>
                <h4 class="text">Osjetite budućnost.</h4>
                <button type="button" class="btn btn-outline-secondary popmake-sastanak">POŠALJI UPIT</button>
            </div>
        
  

		</div><!-- .row end -->


		<!--**************.

		5. AVANTOUR__DESTINACIJE_DUPLIKAT

		 *************** -->

		<div id="avantour_5_destinacije"  class="row text-center">

			<div class="col-md-12 content-area zelena" id="primary">

					<h2>AVANTOUR DESTINACIJE</h2>

					<div class="card-deck">
				  <div class="card">
				    
				    <div class="card-body">
				    	<svg class="Pula"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#pula" /></svg>
				      <h5 class="card-title">PULA</h5>
				      <p class="card-text"><small>Pulska arena - amfiteatar</small></p>
				      
				      
				    </div>
				  </div>
				   <div class="card">
				   
				    <div class="card-body">
				    	<svg class="Rijeka"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#rijeka" /></svg>
				      <h5 class="card-title">RIJEKA</h5>
				      <p class="card-text"><small >Grad koji teče</small></p>
				      
				      
				    </div>
				  </div>
				   <div class="card">
				   
				    <div class="card-body">
				    	<svg class="Zadar"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#zadar" /></svg>
				      <h5 class="card-title">ZADAR</h5>
				      <p class="card-text"><small >Srce Dalmacije</small></p>
				      
				       
				    </div>
				  </div><div class="card">
				   
				    <div class="card-body">
				    	<svg class="Split align-self-end"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#split" /></svg>
				      <h5 class="card-title">SPLIT</h5>
				      <p class="card-text"><small >Dioklecijanov grad</small></p>
				      
				      
				    </div>
				  </div><div class="card">
				   
				    <div class="card-body">
				    	<svg class="Dubrovnik align-self-end"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#dubrovnik" /></svg>
				      <h5 class="card-title">DUBROVNIK</h5>
				      <p class="card-text"><small >Dubrovačke zidine i
"Igre prijestolja"</small></p>
				      
				      
				    </div>
				  </div>
				 
				</div>

				<button type="button" class="btn btn-outline-dark font-weight-bold"><a href="#">ZAPOČNITE AVANTOUR</a></button>

			</div><!-- #primary -->

		</div>

		<!--**************.

		6. POCETNA__MOBILNOST_ZA

		 *************** -->
		<?php get_template_part( 'global-templates/mobilnost_prije_footer' ); ?>	


	</div><!-- Container end -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<?php get_template_part( 'global-templates/modal' ); ?>

	<!-- SIDEBAR_STICKY -->
	<?php get_template_part( 'global-templates/gumb_sticky' ); ?>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
