<h3 class="tittle-w3l"><br>
       
<span class="heading-style">
    <i></i>
    <i></i>
    <i></i>
</span>
</h3>

	<footer>
		
        <!-- //footer second section -->
        <!-- footer third section -->
    
            <!-- footer categories -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Contact</h3>
                    <ul>
                            <li>
                                    <i class="fa fa-map-marker"></i> K.S. School of Business Management
                                    Gujarat University Campus, 
                                    Ahmedabad,<br> Gujarat 380009.</li>
                                
                                    <li>
                                            <i class="fa fa-phone"></i> Tel No. (079) 26305972</li>
                                    
                                
                        
                    
                    </ul>
                </div>
        
                <div class="col-xs-6 footer-grids ">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="">Alumni</a>
                        </li>
                        <li>
                            <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;	MBA</a>
                        </li>
                        <li>
                            <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;Msc(CA & IT)</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQs'</a>
                        </li>
                        <li>
                            <a href="gallary.php">Gallery</a>
                        </li>
                        <li>
                            <a href="http://www.gujaratuniversity.ac.in/web/">Gujarat University</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //footer categories -->
            <!-- quick links -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Events</h3>
                    <ul>
                        <li>
                            <a href="advent.php">Advent</a>
                        </li>
                        <li>
                            <a href="melange.php">Melange</a>
                        </li>
                        <li>
                            <a href="technomantra.php">Technomantra</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-xs-6 footer-grids">
                    <h3>Student Zone</h3>
                    <ul>
                            <li>
                                    <a href="">Download Papers</a>
                                </li>
                                <li>
                                        <a href="mba1.php">&nbsp;&nbsp;&nbsp;&nbsp;MBA</a>
                                    </li>
                                    <li>
                                            <a href="msc1.php">&nbsp;&nbsp;&nbsp;&nbsp;Msc(CA & IT)</a>
                                        </li>
                                        	
                    </ul>
                </div>
            </div>
            <!-- //quick links -->
            <!-- social icons -->
            <div class="col-sm-2 footer-grids  w3l-socialmk">
                <h3>Follow Us on</h3>
                <div class="social">
                    <ul>
                        <li>
                            <a class="icon fb" href="https://www.facebook.com/kssbmgujuni/">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon tw" href="https://twitter.com/hashtag/technomantra">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class="agileits_app-devices">
                    <h5>Download the App</h5>
                    <a href="#">
                        <img src="images/1.png" alt="">
                    </a>
                
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //social icons -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer third section -->
        <!-- footer fourth section (text) -->
        <!-- //footer fourth section (text) -->
    
</footer>
</div>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right">
    <div class="container">
        <p>Copyright © KSSBM@2018 All rights reserved. 
        </p>
    </div>
</div>
<!-- //copyright -->

<!-- js-files -->
<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->
<!-- <script>
    $('#').modal('show');
</script> -->
<!-- //popup modal (for signin & signup)-->



<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
    paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
    //<![CDATA[ 
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
</script>
<!-- //price range (top products) -->

<!-- flexisel (for special offers) -->
<script src="js/jquery.flexisel.js"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

</body>

</html>