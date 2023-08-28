<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bizlinedemo
 */

?>


<?php  dynamic_sidebar('footer') ?>  

<!-- JQuery JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/bootstrap.min.js"></script>
<!-- Appear JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/jquery.appear.js"></script>
<!-- Count To JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/jquery.countTo.js"></script>
<!-- Wow JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/wow.min.js"></script>
<!-- Isotope JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/jquery.isotope.min.js"></script>
<!-- Lightbox JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/lightbox.js"></script>
<!-- Owl Carousel JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/owl.carousel.js"></script>
<!-- JQuery Chart JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/jquery.easypiechart.js"></script>
<!-- Google Map JS -->
<!-- Main JS -->
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/main.js"></script>
<script src="<?= site_url()?>/wp-content/themes/bizlinedemo/assets/js/custom.js"></script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>
</html>
