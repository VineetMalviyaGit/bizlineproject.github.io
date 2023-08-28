<style>
 .pad60{
  
    margin-bottom:20px;
 }   
</style>
<!-- Start Services Area -->
<section class="pad60 parallax page-service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3><?= get_field('services2_title');?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            
        <?php if( have_rows('services2') ) {  while( have_rows('services2') ) { the_row(); ?> 
        <div class="col-md-4">
                <div class="feature-2">
                    <div class="media">
                        <div class="media-left">
                            <div class="feature-icon text-center">
                            <?= get_sub_field('services2_icon');?>
                            </div>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h3 class="media-heading"><?= get_sub_field('services2_title');?></h3>
                            </a>
                            <?php if( get_sub_field('services2_heading') !='') { ?>  
                            <p><?= get_sub_field('services2_heading');?></p>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
           <?php }} ?>
           
            
        
        
        </div>
    </div>
</section>
<!-- End Services Area -->



