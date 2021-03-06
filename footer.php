<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                        <strong>Golden Avenue Technology LLC</strong><br>
                        P.O.Box-122041<br>
                        Dubai, U.A.E.</address>
                    <p>
                        <i class="fa fa-phone"></i><a href="tel:+971 4 266 8272"> &nbsp;+971 4 266 8272</a><br>
                        <i class="fa fa-envelope-o"></i><a href="mailto:enquiry@goldenavenue.ae">  &nbsp;enquiry@goldenavenue.ae</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h5 class="widgetheading">Quick Links</h5>
                    <ul class="link-list">
                        <li><a href="it-health-check.php">Services</a></li>
                        <li><a href="amc-contract.php">AMC Contracts</a></li>
                        <li><a href="it-procurement.php">IT Procurement Services</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="why-us.php">Why Us</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Services</h5>
                    <ul class="link-list">
                        <li><a href="it-health-check.php">IT & Network Health Checks</a></li>
                        <!--                            <li><a href="network-health-check.php">NETWORK HEALTH CHECKS</a></li>-->
                        <li><a href="business-continuity.php">Business Continuity</a></li> 
                        <li><a href="it-security.php">IT Security</a></li>
                        <li><a href="consulting-service.php">Consulting Services</a></li>
                        <li><a href="cloud-migration.php">Cloud Migration</a></li>
                        <li><a href="cyber-security.php">Cyber Security Awareness</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h5 class="widgetheading">Recent News</h5>
                    <ul class="link-list">
                        <li><a href="https://www.cnbc.com/2019/06/18/cyberattacks-in-uae-middle-east-darkmatter-report.html">Cyberattacks in the Middle East are on the rise.</a></li>
                        <li><a href="https://gulfnews.com/uae/cyber-attack-on-dubai-school-network-parents-warned-1.62883738">Cyber attack on Dubai school network, parents warned</a></li>
                        <li><a href="https://www.khaleejtimes.com/business/local/cyberattacks-increase-in-uae">Cyberattacks increasing in UAE, study says</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Golden Avenue Technology LLC 2018 All right reserved. Designed By </span><a href="http://yellowandgray.com" target="_blank">YG Studio</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
<!--                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <?php
//    include 'it-procurement-popup.php'; 
    ?>

<?php include 'doyouknow-popup.php'; ?>
<?php include 'chat-popup.php'; ?>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/contactform.js" type="text/javascript"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script> 
<script src="js/common.js" type="text/javascript"></script>
<script src="js/chat.js" type="text/javascript"></script>
<script src="js/wow/wow.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
    );
    wow.init();
    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>