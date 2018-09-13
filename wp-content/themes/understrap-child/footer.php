<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col">
				<a href="#"><img class="face" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/face.svg" alt="Facebook"></a>
				<a href="#"><img class="inst" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/instagram.svg" alt="Instagram"></a>
				<a href="#"><img class="linkd" src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/09/linkedin.svg" alt="linkedIn">	</a>
				
			</div>
			<div class="col text-centar text-white">Copyright 2018. Avantcar | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy policy</a></div>
			<div class="col text-right"><img class="logo_avant" src="//localhost/avant_car/wp-content/uploads/2018/09/avant_car_logo.svg" alt="Karta Hrvatske"></div>
						
						<!--  <ul class="home_lista2 my-0">
							<li>Dugoročni najam</li>
							<li>Kratkoročni najam</li>
							<li>Električna mobilnost</li>
							<li>Corporate car sharing</li>
							<li>Transferi</li>
						</ul>
					-->
						
			
				

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

