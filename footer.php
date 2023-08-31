<footer>
    <div class="container">
        <div class="row pt-lg pb-lg">
            <div class="col-md-2 ">
                <div class="footer-logo mb-md">
                    <img src="<?php echo $base_url; ?>/images/logo.png" class="img-responsive" alt="">
                </div>
                <!--<p>Elastizell System, Inc is a concrete application specialist in Southwest Ohio. Providing unmatched expertise in geotechnical applications, Elastizell System, Inc is highly sought after  to present customized solutions to exceed your expectations</p>-->
            </div>
            <div class="col-md-7">
                <div class=" footer-item">
                    <div class="col-12">
                        <h4 class="service-area">Service Area</h4>
                    </div>

                    <ul class="list-unstyled">
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-left">
                            <li><a href="<?php echo $base_url; ?>/service-area/dayton.php">Dayton, OH</a> </li>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 pull-right">

                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="contact-div">
                    <h4>Contact Us</h4>
                    <p> 2485 Arbor Blvd. <br>
                        Moraine, OH 45439 <br>
                        <a href="mailto:info@commandroofing.com ">info@commandroofing.com </a><br>
                        Fax: 937-298-2340
                    </p>
                    <p class="pt-sm"><i class="icon-xs icon-phone"></i> <a href="tel:+19372981155;">937-298-1155</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

<script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $base_url; ?>/js/ie10-viewport-bug-workaround.js"></script>


<script src="<?php echo $base_url; ?>/js/owlcarousel/owl.carousel.min.js"></script>
<script>
jQuery(document).ready(function($) {
    /* var owl = $("#owl-demo");

    owl.owlCarousel({
        items: 3, //10 items above 1000px browser width     
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px  
        itemsDesktopSmall: [900, 2], // betweem 900px and 601px    
        itemsTablet: [600, 1], //2 items between 600 and 0      
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option   
        autoplay: 3000, // Set autoplay to 3 seconds
    });
    var test = $("#testmonial");
    test.owlCarousel({
        items: 1, //10 items above 1000px browser width   
        itemsDesktop: [1000, 1], //5 items between 1000px and 901px  
        itemsDesktopSmall: [900, 1], // betweem 900px and 601px  
        itemsTablet: [600, 1], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option    
        autoplay: 3000, // Set autoplay to 3 seconds
    }); */
    $('.partner-logo').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true, // Set autoplay to true
        autoplayTimeout: 1000, // Set autoplay timeout to 1 second
        nav: false,
        items: 4,
        pagination: false,
        responsive: {
            426: {
                items: 1,
                loop: true
            },
            600: {
                items: 3,
                loop: true
            },
            1000: {
                items: 4,
                loop: true
            }
        }
    })
});
</script>




<script type="text/javascript">
jQuery('.navbar-nav li').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).show();
    jQuery(this).addClass('open');
}, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).hide();
    jQuery(this).removeClass('open');
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
jQuery(document).ready(function(e) {
    jQuery('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 10,
                stagePadding: 20,
            },
            600: {
                items: 2,
                margin: 20,
                stagePadding: 50,
            },
            1000: {
                items: 4
            }
        }
    });
});
</script>


</body>

</html>