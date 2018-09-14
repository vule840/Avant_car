<?php
/**
 * Template Name: Flota
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


			<!-- 

			1. D_NAJAM_FLOTA

			 -->


			<div class="row" id="najam_1_flota"><?php get_template_part( 'global-templates/carusel_slider_flota' ); ?></div>
				
			



			<!-- 

			2. D_NAJAM_VOZILA

			 -->

			<div id="d_najam_vozila" class="row text-center">
				<div class="col-md-8 mx-auto">

					<!--  -->
					<h2 class="text-white">VOZILA PO NARUDŽBI</h2>
					<p class="italic_slova">Želite odabrati vozilo baš po vašoj mjeri i ukusu?</p>
					<p class="zelena">Javite nam se i zajedno ćemo konfigurirati vozilo prema vašim željama.</p>

					<button type="button" class="btn btn-outline-secondary popmake-sastanak"><strong>ZATRAŽITE PONUDU</strong> </button>
				</div>
			</div>
		
			<!-- 

			2. D_NAJAM_MOBILNOST

			 -->

			 <?php get_template_part( 'global-templates/mobilnost_prije_footer' ); ?>		

	</div><!-- Container end -->
<?php get_template_part( 'global-templates/gumb_sticky' ); ?>
</div><!-- Wrapper end -->

<?php get_footer(); ?>