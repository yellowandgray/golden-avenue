<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'services';
    include 'head.php';
    ?>
    <body>
        <div id="wrapper">
<?php include 'menu.php'; ?><!-- end header -->
            <section id="inner-headline-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">IT SECURITY</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content">
                <section class="section-padding">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li>IT Security</li>
                        </ul>
                        <div class="row showcase-section">
                            <div class="col-md-7">
                                <h3 class="color-blue"><strong>IT Security</strong></h3>
                                <h3 class="color-blue">The information security risks analysis from Golden Avenue is based on scrutinizing the statistics of network operation and evaluation of exposures and vulnerabilities. It aids to avoid unwanted attacks on valuable data and diminish the effect from existing threats. Evaluating the risks in Regular intervals is more effective than a one-time analysis.</h3>
                                <img src="img/blog/sub001.jpg" alt="" class="img-responsive"/>

                                <h3 class="color-blue"> Our Experts in Golden Avenue do the following in order to prevent any threats:</h3>
                                <ul class="list-line">
                                    <li>Risk assessment on a REGULAR basis;</li>
                                    <li>Analyzing  history of the entire security system operation;</li>
                                    <li>Correcting the security in the system to decrease or eliminate any risk of data breaches</li>
                                    <li>Continuous enhancements in IT security to prevent any attacks from new threats.</li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div class="box-shadow-1">
                                    <div class="row margin-bottom-0">
                                        <h4 class="text-center bold">1 DIRHAM CYBER SECURITY AWARENESS WORKSHOP</h4>
                                        <div class="col-md-6">
                                            <img src="img/golden-cyber.jpg" class="img-responsive" />
                                        </div>
                                        <div class="col-md-6">
                                            <p>Protect your business <br/>Make employees your active defense against cyber threats </p>
                                            <hr class="hr1"> 
                                            <p class="font-size-12 bold">Venue: GOLDEN AVENUE HQ</p>
                                            <p class="font-size-12 bold">Date: &nbsp;&nbsp;&nbsp; January 01, 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="box-shadow-2">
                                    <form action="" method="post" id="footer-form">
                                        <h3 class="text-center bold">Enquiry</h3>
                                        <input class="form-control" name="name" id="first_name" placeholder="Name *" required>
                                        <br>
                                        <input class="form-control" name="email" id="email" placeholder="Your Email *">
                                        <br>
                                        <input class="form-control" name="phone" placeholder="Phone *" id="phone">
                                        <br>
                                        <input class="form-control" name="subject" placeholder="Subject" id="subject">
                                        <br>
                                        <textarea class="form-control" name="subject" rows="4" placeholder="Comments" id="comments"></textarea>

                                        <br>
                                        <center>
                                            <input type="submit" class="btn btn-blue" value="Submit">
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        <?php include 'footer.php'; ?>
        </div>
<?php include 'popup.php'; ?>
    </body>
</html>