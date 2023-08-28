<style>
  .pad-t60 {
   
}
</style>
<!-- Start Services Area -->
<section class="pad-t60 pad-b30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp">
                <div class="section-title text-center">
                    <h3><?= get_field('services_title');?></h3>
                </div>
            </div>
        </div>
        <div class="row">
        <?php if( have_rows('services') ) {  while( have_rows('services') ) { the_row(); ?>
            <div class="col-md-4 wow fadeInLeft">
                <div class="feature-3 text-center service-feature">
                <?= get_sub_field('services_icon');?>
                    <h4><?= get_sub_field('services_title');?></h4>
                    <?php if( get_sub_field('services_heading') != '') { ?>
                    <p><?= get_sub_field('services_heading');?></p>
                    <?php } ?>
                    <?php if( get_sub_field('btn_text') != '') { ?>
                    <p class="mt25"><a href="<?= get_sub_field('btn_link');?>" class="btn btn-primary"><?= get_sub_field('btn_text');?></a></p>
                    <?php } ?>
                </div>
            </div>
           <?php }} ?>
            
        </div>
    </div>
</section>
<!-- End Services Area -->
