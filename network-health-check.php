<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'services';
    include 'head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php include 'menu.php'; ?><!-- end header -->
            <section id="inner-headline-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">NETWORK HEALTH CHECK</h2>
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
                            <li>Network Health Check</li>
                        </ul>
                        <div class="row showcase-section">
                            <div class="col-md-7">
                                <h3 class="color-blue">Network health check</h3>
                                <p>When you work with sensitive data you must ensure your network is secure. Your network and its security is the center that commands the performance of the core IT technology that you use to run your business.</p> 
                                <p>Obsolete or inefficient network infrastructure can create an obstacle on productivity that stifles business growth. GOLDEN AVENUE helps you build a ROBUST AND SECURE IT foundation for your company.</p>
                                <img src="img/blog/net02.jpg" alt="" class="img-responsive"/>
                                <h3>We work with Network Providers who deliver a Complete System and Network Analysis</h3>
                                <ul>
                                    <li>Create a Strategy to enhance Business Productivity</li>
                                    <li>Ensure 24x7 operation of your systems</li>
                                    <li>Mobile connectivity for access to information anytime anywhere</li>
                                    <li>Agile connectivity that includes network and data security through Wireless LAN</li>
                                    <li>Connecting remote users and branch offices through Wide Area Networks (WAN)</li>
                                    <li>Virtual Private Networks (VPN) Providing network access to outside users</li>
                                    <li>Whether you want to UPGRADE your Current Infrastructure or Embark on a new Venture, we deliver the state-of-the-art solutions that will give your establishment a sustained Business Advantage. </li>
                                </ul>
                                <p>To schedule an appointment to discuss your business’s Network Security needs, please fill out the ENQUIRY FORM. We have assisted numerous companies and Businesses just like yours with great Success and Customer Satisfaction.</p>
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