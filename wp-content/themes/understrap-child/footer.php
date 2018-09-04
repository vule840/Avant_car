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

			
						
						
						<ul class="home_lista2 my-0">
							<li>Dugoročni najam</li>
							<li>Kratkoročni najam</li>
							<li>Električna mobilnost</li>
							<li>Corporate car sharing</li>
							<li>Transferi</li>
						</ul>
					
			
				

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

