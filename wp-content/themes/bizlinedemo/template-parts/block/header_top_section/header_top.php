<!-- Start Top Bar Area -->
<div class="top-header hidden-sm hidden-xs" style="padding-top:<?= get_field('padding_top') ?>px;padding-bottom:<?= get_field('padding_bottom') ?>px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="social-top">
                        <ul class="top-social">
                        <?php if( have_rows('social_icon') ) {  while( have_rows('social_icon') ) { the_row(); ?>                
                            <li><a href="<?= get_sub_field('link');?>" target="_blank"><?= get_sub_field('icon');?></a></li>
                           
                            <?php }} ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="pull-right">
                        <div class="top-phone mr10"><i class="fa fa-phone"></i> <?= get_field('number');?></div>
                        <div class="top-phone mr10"><i class="fa fa-envelope-o"></i> <?= get_field('email');?></div>
                        <div class="top-address"><i class="fa fa-map-marker"></i> <?= get_field('address');?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Bar Area -->