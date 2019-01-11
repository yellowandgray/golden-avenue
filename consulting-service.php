<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'services';
    include 'head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php include 'menu.php'; ?><!-- end header -->
            <section id="inner-headline-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">CONSULTING SERVICES</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li>Consulting Services</li>
                    </ul>
                    <div class="row showcase-section">
                        <div class="col-md-7">
                            <h3 class="color-blue wow fadeInLeft"><strong>Consulting Services</strong></h3>
                            <h3 class="wow fadeInLeft">Our experts at Golden Avenue offer consulting that gives you confidence in your information security status.</h3>
                            <p class="text-justify wow fadeInLeft">Weaknesses in information security can jeopardize your undertaking, threaten your profitability, and invite fines and penalties from regulatory bodies.</p>
                            <p class="text-justify wow fadeInLeft">If you are not entirely self-assured in your Information Security Status or your ability to manage IT risk, talk to our expert consultants. Our cyber security consultants provide services and solutions that deliver continuous security assurance for your business and critical infrastructure.</p>
                            <p class="text-justify wow fadeInLeft">Golden Avenue experts provide remote as well as onsite information security consultation that includes the following services:</p>
                            <ul class="list-line list-style-type1 padding-0 wow fadeInLeft">
                                <i class="fa fa-check" aria-hidden="true"></i><li>Analyze vulnerability to reveal risks</li>
                                <i class="fa fa-check" aria-hidden="true"></i><li>Assess security threats to outline the significance of existing vulnerabilities</li>
                                <i class="fa fa-check" aria-hidden="true"></i><li>Design and recommend solutions to secure the entire information security in your network</li>
                                <i class="fa fa-check" aria-hidden="true"></i><li>Provide information on available security tools and methods</li>
                                <i class="fa fa-check" aria-hidden="true"></i><li>Preparing workforces for a responsible and secured data sharing</li>
                            </ul>
                            <br/>
                            <img src="img/blog/sub-page-pic-03.jpg" alt="" class="img-responsive wow fadeInLeft"/>
                        </div>
                        <div class="col-md-5 wow fadeInRight">
                            <?php include 'cyber-security-workshop.php'; ?>
                            <br/>
                            <?php include 'enquiry.php'; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'footer.php'; ?>

        </div>
    </body>
</html>