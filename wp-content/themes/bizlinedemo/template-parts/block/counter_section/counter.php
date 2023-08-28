<!-- Start More Services Area -->
<section class="pad60 parallax statistics-home-1">
    <div class="container">
        <div class="row">
        <?php if( have_rows('counter_section') ) {  while( have_rows('counter_section') ) { the_row(); ?>           
        <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="animated-counter text-center white">
                    <div class="animated-number" data-from="0" data-to="<?= get_sub_field('count');?>"><?= get_sub_field('count');?></div>
                    <h4><?= get_sub_field('count_name');?></h4>
                </div>
            </div>
            
          <?php }} ?>  
           
        
        </div>
    </div>
</section>
<!-- End More Services Area -->
