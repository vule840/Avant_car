<?php
/**
 * Template Name: Pocetna
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

		1. POCETNA__POGODNOSTI 

		 *************** -->

		<!-- <button type="button" class="btn btn-cta">Primary</button> --> 

		<div class="row" id="home_1_pogodnosti">

			<div class="col-md-12 content-area text-center " id="primary">

				<h2 class="text-center pt-4">PREDNOSTI POSLOVNOG KORISNIKA</h2>
					
				<div class="card-deck">
				  <div class="card">
				  
					<svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-sat" /></svg>
				    


				    <div class="card-body">
				      <h5 class="card-title">UŠTEDA
VREMENA</h5>
				      <p class="card-text">Kompletna usluga vam omogućava optimizaciju troškova i uštedu vremena. Jedna i konstantna faktura bez nepredvidivih troškova. Svi troškovi osiguranja i održavanja vozila su uključeni.</p>
				     
				    </div>
				  </div>
				  <div class="card">
				   <svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-ljudi" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">FLEKSIBILNOST</h5>
				      <p class="card-text">Dinamično poslovno okruženje otežava predviđanje dugoročnih potreba za flotom. Suprotno leasingu, kroz poslovni najam kreiramo fleksibilna rješenja za vaše potrebe u svakom trenutku.</p>
				      
				    </div>
				  </div>
				  <div class="card">
				    <svg class="ref_auti2"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#ref-auti" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">VAŠA FLOTA. 1.600 VOZILA</h5>
				      <p class="card-text">Vaša sigurnost i udobnost u vožnji su nam iznimno bitni. Upravo vam zato isporučujemo sve klase modernih vozila koja svake godine obnavljamo najnovijim modelima.</p>
				      
				    </div>
				  </div>
				  <div class="card">
				    <svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-call-cura" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">UVIJEK SMO TU
ZA VAS</h5>
				      <p class="card-text">Naši profesionalni djelatnici i dugogodišnje iskustvo garantiraju izvanrednu korisničku i tehničku podršku. Vjerujemo u naše poslovanje te imamo rješenje za svaku vašu situaciju.</p>
				    
				    </div>
				  </div>
				</div>

			</div><!-- #primary -->

		</div><!-- .row end -->


		<!--**************.

		2. POCETNA__DUGOROČNI_NAJAM

		 *************** -->
		<div  id="dugorocni-najam" class="row" style="background-image:url('<?php the_field('sekcija_bg'); ?>');">

			<div class="col-md-12 content-area text-center" id="primary">

				<h2 class="text-center">ŠTO JE DUGOROČNI NAJAM VOZILA?</h2>
				<p class="text-center italic_slova">Kompletna usluga. Ušteda vremena i novaca.</p>

				<div class="col-md-8 mx-auto">
					<p>Ukoliko imate potrebu za vozilom na mjesec dana ili više godina, Avant car ima portfolio rješenja koja mogu pouzdano zadovoljiti vaše potrebe za mobilnosti.</p>
					<p>Dugoročni poslovni najam je svaki najam u vremenskom trajanju od 30 i više dana. Naš poslovni korisnik ima mogućnost vlastitog odabira modela automobila i opreme, upravo po svojoj mjeri.</p>
					<p>Usluga dugoročnog poslovnog najma podrazumijeva uvijek dostupnog account managera i premium podršku za rješeavanje svih vaših zahtjeva.</p>
				</div>


	

<div class="card-deck py-3 px-4">
  <div class="card">
    
    <div class="card-body">
    	<div class="row no-gutters">
    		<div class="col-md-10"><p class="font-weight-bold">Bez kapitalnih ulaganja <br> 
			ili učešća</p></div>
      <div class="col-md-2"><svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></div>
    	</div>
      
      	
				
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <div class="row no-gutters">
    		<div class="col-md-10"><p class="font-weight-bold">Bez nepredvidivih <br>
			 troškova</p></div>
      <div class="col-md-2"><svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></div>
    	</div>

      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <div class="row no-gutters">
    		<div class="col-md-11 "><p class="font-weight-bold">Bez naknade za prijevremeni<br>
			 raskid ugovora</p></div>
      <div class="col-md-1"><svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></div>
    	</div>

   
      
    </div>
  </div>

  <div class="card">
    
    <div class="card-body home_zatrazite">
      
     <p class="popmake-dugorocni-najam">> Zatražite info ponudu za dugoročni najam</p>
      
    </div>
  </div>
</div>




				
				

			</div><!-- #primary -->

		</div><!-- .row end -->


			<!--**************.

		3. POCETNA__FLOTA_ZA_UKUS

		 *************** -->
		<div class="row" id="home_3_flota">

			<div class="col-md-6">
				<h2 class="text-center zelena">Vaša flota od 1.600 vozila</h2>

				<img class="text-center pt-5" src="<?php bloginfo('url') ?>/wp-content/uploads/2018/09/home_auti-8.png">
				<p class="text-left home_kompletnu text-dark"><a href="<?php bloginfo('url') ?>/vasa-flota">> Pogledajte kompletnu flotu</a> </p>

			</div>


			<div class="col-md-6 ">

				<h2>OSJETITE SNAGU IZBORA</h2>
				<span class="zelena">Raznovrsna flota.</span>

				<p>Naša raznovrsna flota omogućava vam širok izbor svih klasa vozila, za svaku vašu poslovnu potrebu. Od manje gradske do luksuzne poslovne klase, isporučujemo najnovija vozila priznatih svjetskih proizvođača.</p>

				<ul class="home_lista">
					<li>OSOBNA / GOSPODARSKA VOZILA</li>
					<li>EKONOMSKA / BUSINESS / LUKSUZNA KLASA</li>
					<li>ELEKTRIČNA VOZILA / TESLA</li>
					<li>NAJNOVIJI MODELI</li>
					<li>BUSINESS OPREMA</li>
				</ul>

				<p class="text-left">Za Vaše uspješno poslovno putovanje.</p>

			</div>

		</div><!-- .row end -->
	





		<!--**************.

		4. POCETNA__ZATRAŽITE_PONUDU

		 *************** -->
		<div class="row text-center" id="home_4_zatrazite">

			<div class="col-md-7 mx-auto">
				<h2 class="text-center popmake-dugorocni-najam">ZATRAŽITE PONUDU PO VAŠOJ MJERI</h2>
				<p class="text-center italic_slova">Bez obzira jeste li mala ili velika tvrtka - imamo rješenje za vaše potrebe!</p>
			</div>

			<div class="col-md-12 py-5 content-area" id="primary">


				<div class="card-deck">
				 
				  <div class="card">
				   <svg class="form"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#form" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">INFO UPIT</h5>
				      <p class="card-text">Sve što trebate je poslati jednostavan upit za
ponudu. Doslovno 1-minutni posao i pametno
ulaganje vremena.</p>
				     
				    </div>
				  </div>
				  <div class="card">
				      <svg class="kontakt_email"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#kontakt-email" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">PONUDA</h5>
				      <p class="card-text">Javit ćemo se ubrzo nakon vašeg upita i
kreirati ponudu prema vašim individualnim potrebama.</p>
				     
				    </div>
				  </div>
				  <div class="card">
				   <svg class="kontakt_auti"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#ref-auti" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">MOBILNOST PO VAŠOJ MJERI</h5>
				      <p class="card-text">Uz kompletnu uslugu koja generira uštedu
vremena i novaca, sa fleksibilnim pristupom u
svakom trenutku možemo odgovoriti na
dinamično okruženje te pratiti vaš razvoj.</p>
				     
				    </div>
				  </div>
				</div>
				

			</div><!-- #primary -->

			<div class="col-md-12 text-center">
				<button type="button" class="btn btn-outline-secondary popmake-dugorocni-najam">ZATRAŽITE PONUDU</button>
			</div>


		</div><!-- .row end -->



		<!--**************.

		5. POCETNA__ELEKTRIČNA_MOBILNOST

		 *************** -->
			<div id="home_5_elektricna" style="background-image:url('<?php the_field('sekcija_bg1'); ?>');" class="row">

			<!-- 	<div class="col-md-6">
				

				<img class="text-center" src="https://via.placeholder.com/500x400">
				

			</div> -->
		


			<div class="col-md-6 ml-auto">

				<h2 class="">ELEKTRIČNA MOBILNOST</h2>
				<span class="italic_slova">Kreiramo nove dimenzije. Posjetite naš showroom.</span>

				<!-- <p>Stvaramo novo korisničko iskustvo. U skladu s prirodom, tiho i čisto.
Misija našeg poslovanja je pojednostavniti živote ljudi stvaranjem naprednih
rješenja održive mobilnosti.</p> -->

<p><span class="zelena_bold_slova">Nova paradigma. Novi koncepti. Novo iskustvo.</span><br>
Kao europski pionir u e-mobilnosti, naše iskustvo ulažemo u edukaciju
poslovne javnosti o e-mobilnosti. Želimo Vam omogućiti dostupnost svih
ključnih informacija za donošenje odluka za razvoj mobilnosti Vaše tvrtke.</p>

<p><span class="zelena_bold_slova">Ekološka i ekonomična rješenja.</span><br>
Dugoročni najam električnih vozila omogućuje Vam direktne uštede kao dio
suvremenih rješenja upravljanja voznim parkom. Osjetite budućnost. Nova
mobilnost je tu, bez buke i bez emisije.</p>



			</div>


<div class="example-container">
  <div class="example-row">
    <div class="example-content-main"><p><a class="text-white" href="mailto:matija.krznar@avantcar.hr?subject=Električna%20mobilnost%20-%20showroom">>> Kreiramo novo iskustvo. Posjetite naš showroom.</a></p></div>
    <div class="example-content-secondary"><svg class="home_list"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-list" /></svg></div>
  </div>
</div>

			
</div><!-- .row end -->


		<!--**************.

		6. POCETNA__MOBILNOST_ZA

		 *************** -->
		 
		<?php get_template_part( 'global-templates/mobilnost_prije_footer' ); ?>	



	</div><!-- Container end -->



	

</div><!-- Wrapper end -->
<!-- The social media icon bar -->



	<?php get_template_part( 'global-templates/gumb_sticky' ); ?>	

<?php get_footer(); ?>

