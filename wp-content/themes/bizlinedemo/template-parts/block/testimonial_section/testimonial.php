
<style>
    .pad60 {
    margin-bottom: 40px !important;
}
</style><!-- Start Testimonial Style #2 Area -->
<section class="pad60 parallax testimonial-home-1">
    <div class="container">
        <div class="row">
            <div class="section-title text-center white">
                <h3><?= get_field('test_title');?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel">
                <?php if( have_rows('testimonial') ) {  while( have_rows('testimonial') ) { the_row(); ?>      
                <div class="testimonial-item text-center white">
                        <p><?= get_sub_field('test_heading');?></p>
                        <img src="<?= get_sub_field('test_img');?>" alt="BizLine" class="img-circle">
                        <div class="name"><?= get_sub_field('test_name');?></div>
                        <div class="designation"><?= get_sub_field('test_post');?></div>
                    </div>
                   <?php }} ?>
                
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Style #2 Area -->
