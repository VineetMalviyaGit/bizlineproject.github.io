<style>
 .footer-main{
    margin-top:0px;
 } 
 .pad-t80 {
    padding-top: 70px !important;
}  
.copyright {
    border-top: 1px solid #353535;
    padding: 9px 0;
    margin-top: 16px;
}
</style>

<!-- Start Footer Area -->
<footer class="footer-section pad-t80 pad-b30 parallax footer-main" style="padding-top:<?= get_field('padding_top') ?>px; padding-bottom:<?= get_field('padding_bottom') ?>px;">
    <div class="container">
        <div class="row">
            <!-- Start Footer About Area -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-title">
                    <h3><?= get_field('about_us');?></h3>
                </div>
                <div class="footer-text">
                    <p><?= get_field('about_discription');?></p>
                    
                </div>
            </div>
            <!-- End Footer About Area -->
            <!-- Start Footer Services Area -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-title">
                    <h3><?= get_field('services1_title');?></h3>
                </div>
                <div class="footer-list">
                    <ul>
                    <?php if( have_rows('services1') ) {  while( have_rows('services1') ) { the_row(); ?>    
                        <?php $services_link1=get_sub_field('services_link1');?>
                        <li><a href="<?= site_url($services_link1)?>"><i class="fa fa-long-arrow-right"></i><?= get_sub_field('services_text');?></a></li>
                       
                    <?php } }?>
                    </ul>
                </div>
            </div>
            <!-- End Footer Services Area -->
            <!-- Start Latest Projects Area -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-title">
                    <h3><?= get_field('sevices2_title');?></h3>
                </div>
                <div class="footer-list">
                    <ul>
                  
                    <?php if( have_rows('services2') ) {  while( have_rows('services2') ) { the_row(); ?>    
                        <?php $services_link2=get_sub_field('services_link2');?>
                        <li><a href="<?= site_url($services_link2)?>"><i class="fa fa-long-arrow-right"></i><?= get_sub_field('services_text');?></a></li>
                       
                    <?php } }?>
                  
                    </ul>
                </div>
            </div>
            <!-- End Latest Projects Area -->
            <!-- Start Subscribe Area -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="footer-title">
                    <h3><?= get_field('subscribe_title');?></h3>
                </div>
                <a href="tel:<?= get_field('phone');?>"><p class="footer-info"><i class="fa fa-phone"></i><?= get_field('phone');?></p><a>
                <a href="mailto:<?= get_field('email');?>"><p class="footer-info"><i class="fa fa-envelope-o"></i><?= get_field('email');?></p></a>
                    <p class="footer-info"><i class="fa fa-map-marker"></i><?= get_field('address');?></p>
                
                <div class="social-top">
                    <ul class="top-social">
                    <?php if( have_rows('social_icon') ) {  while( have_rows('social_icon') ) { the_row(); ?>    
                        <li><a href="<?= get_sub_field('link');?>" target="_blank"><?= get_sub_field('icon');?></a></li>
                        
                        <?php }} ?>
                    </ul>
                </div>
            </div>
            <!-- End Subscribe Area -->
        </div>
        <!-- Start Footer Copyright Area -->
        <div class="row">
            <div class="copyright">
                <div class="col-md-12 text-center">
                    <div class="copyright-text">
                    <p>© 2023 <a href="#">Search Brief</a> All Rights Reserved. <a href="<?= get_field('footer_logo_link');?>"><img src="<?= get_field('footer_logo')?>" style="width:100px;"></a></p>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- End Footer Copyright Area -->
    </div>
</footer>
<!-- End Footer Area -->


<!-- Start Back To Top Area -->
<div id="back-to-top" class="back-to-top">
        <i class="fa fa-angle-up fa-2x"></i>
    </div>
    <!-- End Back To Top Area -->
</div>
