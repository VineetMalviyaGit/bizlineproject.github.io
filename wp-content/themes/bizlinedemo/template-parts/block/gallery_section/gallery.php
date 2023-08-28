  <style>
    #gallery{
        /* margin-top:-30px;
        margin-bottom:-90px; */
    }
  </style>
  <!-- Start Gallery Page Area -->
  <section class="pad-t80 pad-b50" id="gallery">
        <div class="container">
            <div class="row">
                <div class="portfolio-box">
                <?php if( have_rows('gallery') ) {  while( have_rows('gallery') ) { the_row(); ?>                      
                <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="portfolio-post mb30">
                            <img src="<?= get_sub_field('img');?>" alt="Allbiba" >
                            <div class="hover-box">
                                <div class="inner-hover">
                                    <h4><?= get_sub_field('gallery_name');?></h4>
                                    <p><?= get_sub_field('gallery_heading');?></p>
                                    <a class="zoom" href="<?= get_sub_field('img');?>" data-lightbox="portfolio-1">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }} ?>
                   </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Page Area -->