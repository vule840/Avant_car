<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
         <div class="carousel-item active">
           
        <!-- <h2 class="text-center text-uppercase pb-3">Transferi</h2> -->  
           


              <?php
        $posts = get_posts(array(
          'posts_per_page'  => -1,
                  'post_type'     => 'Transferi',
        
        ));
        if( $posts ): ?>
        <div class="row">
        <?php foreach( $posts as $post ): 
            
            setup_postdata( $post );
            
            ?>
            <div id="" class="col-md-4 text-center">
              <!--  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>  -->
                  <!-- NASLOV --> 
                  <h2><a  href="#"><?php the_title(); ?></a></h2>

                <!-- SLIKA -->
                  <?php if( get_field('avantour_auto_slika') ): ?>

                    <img src="<?php the_field('avantour_auto_slika'); ?>" />

                  <?php endif; ?> 
                
                  <!-- TABLICA -->
                  <table class="table w-25 table-light ikonice">
                     
                      <tbody>
                        <tr>
                          <td><svg class="flota_sjedalo"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-covac" /></svg></td>
                          <td><svg class="flota_torba"><use xlink:href="<?php bloginfo('template_url'); ?>/img/sprite-sheet.svg#avantour-taska" /></svg></td>
                          
                        </tr>
                        <tr>
                                                <td><?php the_field('avantour_ljudi'); ?></td>
                                                <td><?php the_field('avantour_prtljaga'); ?></td>
                                            </tr>
                        
                      </tbody>
                    </table>
            
            </div>
          <?php endforeach; ?>
          </div>
          
          
          <?php wp_reset_postdata(); ?>
          
          <?php endif; ?>

          </div>
       
      </div>

      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>  -->
      
    </div>
  </div>
</div>