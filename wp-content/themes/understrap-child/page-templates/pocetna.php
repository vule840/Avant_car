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

		 <button type="button" class="btn btn-cta">Primary</button>

		<div class="row" id="home_1_pogodnosti">

			<div class="col-md-12 content-area text-center " id="primary">

				<h2 class="text-center">POGODNOSTI ZA POSLOVNE KORISNIKE</h2>
					
				<div class="card-group">
				  <div class="card">
				  
					<svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-kauc" /></svg>
				    


				    <div class="card-body">
				      <h5 class="card-title">KOMPLETNA USLUGA</h5>
				      <p class="card-text">Kompletna usluga vam omogućava optimizaciju troškova i uštedu vremena. Nema skrivenih troškova, već su svi troškovi osiguranja i održavanja vozila uključeni. Jedna i konstantna faktura.</p>
				     
				    </div>
				  </div>
				  <div class="card">
				   <svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-ljudi" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">FLEKSIBILNOST</h5>
				      <p class="card-text">Dinaminčno poslovno okruženje otežava predviđanje dugoročnih potreba za flotom. Suprotno leasingu, kroz dugoročni najam kreiramo fleksibilna rješenja za vaše potrebe u svakom trenutku.</p>
				      
				    </div>
				  </div>
				  <div class="card">
				    <svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-slagalica" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">FLOTA ZA SVAKI UKUS</h5>
				      <p class="card-text">Vaša sigurnost i udobnost u vožnji su nam iznimno bitni. Upravo zato isporučujemo sve klase modernih vozila koja se redovito servisiraju i zamijenjuju sa najnovijim modelima.</p>
				      
				    </div>
				  </div>
				  <div class="card">
				    <svg class="home_ikone"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-sat" /></svg>
				    <div class="card-body">
				      <h5 class="card-title">PODRŠKA 24/7/365</h5>
				      <p class="card-text">Naši profesionalni djelatnici i dugogodišnje iskustvo garantiraju izvanrednu korisničku i tehničku podršku. Vjerujemo u naše poslovanje te imamo rješenje za svaku vašu situaciju.</p>
				      
				    </div>
				  </div>
				</div>

			</div><!-- #primary -->

		</div><!-- .row end -->


		<!--**************.

		2. POCETNA__DUGOROČNI_NAJAM

		 *************** -->
		<div id="home_2_dugorocni" class="row" style="background-image:url('<?php the_field('sekcija_bg'); ?>');">

			<div class="col-md-12 content-area text-center" id="primary">

				<h2 class="text-center">ŠTO JE DUGOROČNI NAJAM VOZILA?</h2>
				<p class="text-center italic_slova">Jedina prava alternativa kupnji, leasingu vozila.</p>

				<div class="col-md-8 mx-auto">
					<p>Ukoliko imate potrebu za vozilom na mjesec dana ili više godina, Avant car ima portfolio rješenja koja mogu pouzdano zadovoljiti vaše potrebe za mobilnosti.</p>
					<p>Dugoročni poslovni najam je svaki najam u vremenskom trajanju od 30 i više dana. Naš poslovni korisnik ima mogućnost vlastitog odabira modela automobila i opreme, upravo po svojoj mjeri.</p>
					<p>Usluga dugoročnog poslovnog najma podrazumijeva uvijek dostupnog account managera i premium podršku za rješeavanje svih vaših zahtjeva.</p>
				</div>


	

<div class="card-group">
  <div class="card">
    
    <div class="card-body">
      
      	<p>Nema minimalnog 
			trajanja najma<svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></p>
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      
      <p>Nema nepredvidivih
			troškova<svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></p>
      
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      
     <p>Nema kapitalnih
			ulaganja ili učešća<svg class="strelica"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#home-strelica" /></svg></p>
      
    </div>
  </div>

  <div class="card">
    
    <div class="card-body">
      
     <p>> Zatražite info ponudu za dugoročni najam</p>
      
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
				<h2 class="text-center zelena">Flota za svaki ukus</h2>

				<img class="text-center" src="<?php bloginfo('url') ?>/wp-content/uploads/2018/09/home_auti-8.png">
				<p class="text-left">> Pogledajte kompletnu flotu</p>

			</div>


			<div class="col-md-6 ">

				<h2>OSJETITE SNAGU IZBORA</h2>
				<span class="zelena">Raznovrsna flota.</span>

				<p>Naša raznovrsna flota omogućava širok izbor svih klasa vozila, za svaku vašu poslovnu potrebu. Od srednje poslovne do luksuzne klase, isporučujemo najnovija vozila priznatih svjetskih proizvođača.</p>

				<ul class="home_lista">
					<li>OSOBNA / KOMBINIRANA VOZILA</li>
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

			<div class="col-md-8 mx-auto">
				<h2 class="text-center">ZATRAŽITE PONUDU PO VAŠOJ MJERI</h2>
				<p class="text-center">Jednostavno unesite kontakt podatke i pripremit ćemo vam informativnu ponudu. Bez obzira jeste li mala ili velika tvrtka - imamo rješenje za vaše potrebe!</p>
			</div>

			<div class="col-md-12 content-area" id="primary">


				<div class="card-group">
				 
				  <div class="card">
				   <p class="bijeli_broj">1.</p>
				    <div class="card-body">
				      <h5 class="card-title">INFO UPIT</h5>
				      <p class="card-text">Sve što trebate je poslati jednostavan upit za
ponudu. Doslovno 1-minutni posao i pametno
ulaganje vremena.</p>
				     
				    </div>
				  </div>
				  <div class="card">
				     <p class="bijeli_broj">2.</p>
				    <div class="card-body">
				      <h5 class="card-title">PONUDA</h5>
				      <p class="card-text">Javit ćemo se ubrzo nakon vašeg upita i
kreirati ponudu prema vašim individualnim</p>
				     
				    </div>
				  </div>
				  <div class="card">
				   <p class="bijeli_broj">3.</p>
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
				<button type="button" class="btn btn-outline-secondary">POŠALJI UPIT</button>
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

				<h2>ELEKTRIČNA MOBILNOST</h2>
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
    <div class="example-content-main">> Zatražite povratni poziv za info o našim uslugama</div>
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
<div class="icon-bar">
  
  <svg class="sidebar_dogovorite popmake-kratkorocni-najam"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#sidebar-dogovorite" /></svg>
</div>
<?php get_footer(); ?>
