<?php
/**
 * Template Name: Kontakt
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


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<!--**************.

		1. KONTAKT__KUĆICE 

		 *************** -->
		<!-- <?php gravity_form( 1, false, false, false, '', false ); ?> -->
		<div id="kontakt_1_kucice" class="row text-center">

			<div class="col-md-4">
				<svg class="kontakt_email"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#kontakt-email" /></svg>
				<h4 class="font-weight-light pb-2"><a class="text-white" href="mailto:corporate@avantcar.hr">corporate@avantcar.hr</a></h4>
				<p>Djelatnici podrške poslovnim korisnicima
kontaktirat će Vas u roku 24 sata.</p>


</div>
			<div class="col-md-4">
				<svg class="kontakt_mob"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#kontakt-mob" /></svg>
				<h4 class="font-weight-light pb-2"><a class="zelena" href="mailto:corporate@avantcar.hr">+385 (0)1 6251 222</a></h4>
				<p>Možete nas jednostavno nazvati i odmah
krećemo s unapređenjem vaše mobilnosti.</p>

</div>
<div class="col-md-4">
				<svg class="kontakt_auti"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#ref-auti" /></svg>
				<h3 class="font-weight-light">
					Otkrijte more mogućnosti uz Avant car poslovna rješenja	
				</h3>
				<!-- <p>Otkrijte more mogućnosti uz Avant car poslovna rješenja</p>
 -->
</div>

		</div><!-- .row end -->


<!--**************.

		2. KONTAKT__MAPA

		 *************** -->

		<div id="kontakt_2_mapa" class="row text-left">

			<div class="col-md-4 ">
				<h4>LOKACIJA</h4>
				<p>Green Gold centar</p>
				<p>Avant car showroom</p>
				<p>Radnička cesta 52, 10 000 Zagreb</p>

				<br>

				<h4>RADNO VRIJEME</h4>
				<p>za poslovne korisnike</p>
				<p>Pon - Pet: 08:00 - 18:00</p>
			


</div>
			<div class="col-md-8 p-0">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

				 <!-- <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				   
				  </ol> --> 

				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.447356828965!2d16.0002752514525!3d45.80229837900381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6251c1f6303%3A0x9930e37456b4648a!2sRadni%C4%8Dka+cesta+52%2C+10000%2C+Zagreb!5e0!3m2!1sen!2shr!4v1535456363148" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/kontakt_carusel_slika.jpg" alt="Second slide">
				    </div>
				    
				  </div>

				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>




				

			</div>


		</div><!-- .row end -->


		<!--**************.

		3. KONTAKT__MOBILNOST_POCETNA

		 *************** -->


			<?php get_template_part( 'global-templates/mobilnost_prije_footer' ); ?>	



	
 




	</div><!-- Container end -->

	<!-- SIDEBAR_STICKY -->
	<?php get_template_part( 'global-templates/gumb_sticky' ); ?>	

</div><!-- Wrapper end -->

<?php get_footer(); ?>


