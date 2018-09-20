<!-- https://github.com/BlackrockDigital/startbootstrap-full-slider/blob/master/css/full-slider.css -->
<header class="avantour_slider">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleFade" data-slide-to="1"></li>
          <li data-target="#carouselExampleFade" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php the_field('avantour_auto_slika'); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="naslovna">AVANTOUR</h1>
              <p class="naslovna__ispod">vaš bezbrižan transfer.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php the_field('avantour_auto_slika1'); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="naslovna">AVANTOUR</h1>
              <p class="naslovna__ispod">vaš bezbrižan transfer</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php the_field('avantour_auto_slika2'); ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="naslovna">AVANTOUR</h1>
              <p class="naslovna__ispod">vaš bezbrižan transfer</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>