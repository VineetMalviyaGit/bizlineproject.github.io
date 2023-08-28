<style>
 .pad70{
    margin-top:-50px !important;
 }  
 
</style>
<!-- Start Team Area -->
<section class="pad60 pad70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3><?php echo get_field('our_team_text');?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('our_team') ) {  while( have_rows('our_team') ) { the_row(); ?>
            <div class="col-md-3 col-sm-6">
                <div class="team-member-2 wow fadeInRight" data-wow-duration="1s">
                    <img src="<?= get_sub_field('team_img');?>" alt="team member">
                    <div class="team-member-details">
                        <h4><?= get_sub_field('team_name');?></h4>
                        <h5><?= get_sub_field('team_post');?></h5>
                        <ul class="team-social">
                        <?php if( have_rows('social_icon') ) {  while( have_rows('social_icon') ) { the_row(); ?>
                            <li><a href="<?php echo get_sub_field('link');?>"><?php echo get_sub_field('icon');?></a></li>
                        <?php } }?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } }?>
           
        </div>
    </div>
</section>
<!-- End Team Area -->