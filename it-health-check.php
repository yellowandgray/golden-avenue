<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'services';
    include 'head.php';
    ?>
    <body>
        <div id="wrapper">
<?php include 'menu.php'; ?><!-- end header -->
            <section id="inner-headline-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">IT Health Check</h2>
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
                            <li>IT Health Check</li>
                        </ul>
                        <div class="row showcase-section">
                            <div class="col-md-7">
                                <h3 class="color-blue">IT Health Check</h3>
                                <h3>An IT assessment is a thorough audit of all information technology infrastructure used by a business.</h3> 
                                <img src="img/blog/sub02.jpg" alt="" class="img-responsive"/>
                                <h3>The audit consists of the following checks</h3>
                                <ul>
                                    <li>Assess if the entire IT infra-structure fulfills the standard necessary requirements of the business</li>
                                    <li>Scrutinizing whether the current configuration of the IT structure</li>
                                    <li>Analysing and testing the security policies and data protection safeguards adopted by the business</li>
                                    <li>Checking for outdated or repetitive  modules and improve efficiency</li>
                                    <li>The IT infra-structure is considered an Asset and can be related to Asset Management. It is an investment that helps in the financial growth of a business. Just like an asset it has initial and maintenance costs but the advantages of its maintenance is quite enormous. GOLDEN AVENUE consultants are highly skilled and are specialists in this field and provide best Assessment services to their clients</li>
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
        <button class="open-button" onclick="openForm()"><blink>#DoYouKnow ???</blink></button>
        <div class="chat-popup" id="myQus">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeForm()"><span aria-hidden="true">×</span></button>  
            <div  class="form-container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-center bold white">#DoYouKnow</h3>
                        <p class="white">Computers with AV disabled?</p>
                        <p class="white">Are your systems fully patched?</p>
                        <p class="white">What systems have outdated hardware?</p>
                        <p class="white">What changed in your network?</p>
                        <p class="blurry-text">Complete network security overview</p>
                        <p class="blurry-text">What new devices are added to the network?</p>
                        <p class="blurry-text">What ports are opened in the network?</p>
                        <p class="blurry-text">Unauthorized applications?</p>
                        <p class="blurry-text">What USB devices connect to your network?</p>
                        <p class="blurry-text">How vulnerable is your network?</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <form action="" method="post" id="footer-form">
                            <h3 class="text-center bold white">For a Free IT Health Check</h3>
                            <input class="form-control" name="name" id="first_name" placeholder="Name *" required>
                            <br>
                            <input class="form-control" name="email" id="email" placeholder="Your Email *">
                            <br>
                            <input class="form-control" name="phone" placeholder="Phone *" id="phone">
                            <br>
                            <input class="form-control" name="subject" placeholder="Subject" id="subject">
                            <br>
                            <textarea class="form-control" name="subject" placeholder="Comments" id="comments" style="min-height: 70px;"></textarea>

                            <br>
                            <center>
                                <input type="submit" class="btn btn-blue" value="Submit">
                            </center>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </body>
</html>