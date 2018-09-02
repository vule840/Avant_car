<?php
/**
 * Template Name: Hr_Slov
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

<?php get_template_part( 'global-templates/header_slika' ); ?>


<div  class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<!--**************.

		1. HRV_SLO_USLUGE_SLIKICE

		 *************** -->

		<div id="hrv_slo_1_usluge" class="row">

			<div class="col-md-8 content-area text-center mx-auto" id="primary">
				<P>Naše usluge pružamo na području Hrvatske i Slovenije, sa logističknom i korisničkom podrškom
u međunarodnim zračnim lukama i u više od 15 gradova.</P>

			</div><!-- #primary -->
			<div class="col-md-6 text-center">
				<h2>Avant car Hrvatska</h2>
				<img src="https://via.placeholder.com/300x300" alt="">
			</div>
			<div class="col-md-6 text-center">
					<h2>Avant car Slovenija</h2>
				<img src="https://via.placeholder.com/300x300" alt="">
			</div>

		</div><!-- .row end -->


		<!--**************.

		2. HRV_SLO_LOKACIJA

		 *************** -->

		 <div id="hrv_slo_2_lokacije" class="row">
		 	

		 	<div class="col-md-12 text-center"><h2>LOKACIJE POSLOVNICA</h2></div>
			<div class="col-md-6">
				<h4>ZAGREB - CENTAR</h4>
				<p>Green Gold - showroom</p>
				<p>Radnička cesta 52, 10 000 Zagreb</p>
				<p>Radno vrijeme: Pon - Pet 08:00 - 18:00</p>
				<hr>
				<h4>ZAGREB - ZRAČNA LUKA</h4>
				<p>Dr. Franjo Tuđman</p>
				<p>Radnička cesta 52, 10 000 Zagreb</p>
				<p>Radno vrijeme: Pon - Pet 08:00 - 18:00</p>	

			</div>
			<div class="col-md-6">
				<h4>LJUBLJANA - CENTAR</h4>
				<p>Trdinova - showroom</p>
				<p>Radno vrijeme: Pon - Pet 08:00 - 18:00</p>
				<p></p>
				<hr>
				<h4>LJUBLJANA - SJEDIŠTE</h4>
				<p>Dunajska</p>
				<p></p>
				<p>Radno vrijeme: Pon - Pet 08:00 - 18:00</p>
			</div>

		 </div>


		 <!--**************.

		3. HRV_SLO_DRUŠTVENA

		 *************** -->

			<div id="hrv_slo_3_drustvena" class="row">
		 	

		 	
			<div class="col-md-6">
				<h2>DRUŠTVENA ODGOVORNOST I
POTPORA ODRŽIVOM RAZVOJU</h2>
				<p>U Hrvatskoj, Sloveniji i široj regiji pružamo potporu strategiji održivog razvoja.
U našem razvojnom odjelu ističemo utjecaj edukacije, infrastrukture punionica,
ponude postojećih električnih vozila, naprednih poslovnih modela te obnovljivih
izvora energije na ubrzanu implementaciju električne mobilnosti.</p>	

			</div>
			<div class="col-md-6">
				<h2>OTVORENOST I UČENJE 360-STUPNJEVA</h2>
				<p>Svaka vaša povratna informacija nam je iznimno važna.
Smatramo da smo istovremeno svi učitelji i učenici. Mi smo sretni kad učimo,
razvijamo se i rastemo jedni s drugima. Našom zajedničkom suradnjom
društvu nastojimo olakšati i unaprijediti život.</p>
			</div>

			<div class="col-md-12 text-center">
				<button type="button" class="btn btn-primary">POŠALJI UPIT</button>
			</div>

		 </div>



		 <!--**************.

		4. HRV_SLO_REFERENCE

		 *************** -->

		<div id="hrv_slo_4_reference" class="row">

			<div class="col-md-12 content-area text-center" id="primary">

					<h2>REFERENCE</h2>

				<div class="card-group">
				  <div class="card">
				    
				    <div class="card-body">
				    	<img src="https://via.placeholder.com/50x50" alt="">
				      <h6 class="card-title">IMAMO POVJERENJE
							KLIJENATA IZ VIŠE OD
							100 ZEMALJA</h6>
		      
				    </div>
				  </div>
				    <div class="card">
				    
				    <div class="card-body">
				    	<img src="https://via.placeholder.com/50x50" alt="">
				      <h6 class="card-title">DO SADA SMO UPRAVLJALI
PARKOM ZA VIŠE OD 200
PODUZEĆA SVIH VELIČINA</h6>
		      
				    </div>
				  </div>
				    <div class="card">
				    
				    <div class="card-body">
				    	<img src="https://via.placeholder.com/50x50" alt="">
				      <h6 class="card-title">NAŠA FLOTA SADRŽI
						VIŠE OD 1.000 VOZILA</h6>
		      
				    </div>
				  </div>

				   <div class="card">
				    
				    <div class="card-body">
				    	<img src="https://via.placeholder.com/50x50" alt="">
				      <h6 class="card-title">IMAMO VLASTITU
SKUPINU ZA
ISTRAŽIVANJE I RAZVOJ</h6>
		      
				    </div>
				  </div>
				   <div class="card">
				    
				    <div class="card-body">
				    	<img src="https://via.placeholder.com/50x50" alt="">
				      <h6 class="card-title">U REGIJI SMO
VODEĆI PONUDITELJ
ELEKTRIČNE MOBILNOSTI</h6>
		      
				    </div>
				  </div>
				 
				</div>

				<!-- <p class="text-center"><button type="button" class="btn btn-primary">Primary</button></p> --> 

			</div><!-- #primary -->

		</div>


		  <!--**************.

		5. HRV_SLO_MOBILNOST_DUPLIKAT

		 *************** -->
		
		<?php get_template_part( 'global-templates/mobilnost_prije_footer' ); ?>		



	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
