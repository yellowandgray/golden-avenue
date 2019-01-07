<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'amc-contract';
    include 'head.php';
    ?>
    <body>
        <div id="wrapper">
            <?php include 'menu.php'; ?>
            <!-- end header -->
            <section id="inner-headline-11">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="pageTitle">Products</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content">
                <div class="container">
                    <div class="about">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="font-size-24 text-center">Infrastructure products</h2>
                            </div>
                            <div class="col-md-6">
                                <h3>Enterprise Computing & Telecom</h3>
                                <p class="text-justify">Alpha Data’s Enterprise Computing Systems team provides a complete range of servers, storage solutions, printing solutions,security solutions and services to a variety of sectors across the UAE.</p>
                                <p class="text-justify">The integration of IT technologies to deliver business value to our customers is Alpha Data’s primary focus and market differentiator. To deliver a successful integration of complex systems requires both specialized skills and the right level of experience. Our team consists of highly certified professionals, many with over 10 years experience in the IT industry.</p>
                                <p class="text-justify">We recognize that key areas of importance for our customers when considering an IT solution are based around four crucial perspectives: availability, adaptability, manageability and security. Our offering reflects this understanding and our solutions are designed to deliver based on these perspectives.</p>
                                <p class="text-justify">Alpha Data’s offering is divided into a products and a solutions range, depending on the scale and nature of our client’s requirements. Below is the list of solutions we offer:</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <section class="section-padding">
                        <div class="row">
                            <button class="tablink" onclick="openPage('Home', this, '#007e93')" id="defaultOpen">Home</button>
                            <button class="tablink" onclick="openPage('News', this, '#007e93')">News</button>
                            <button class="tablink" onclick="openPage('Contact', this, '#007e93')">Contact</button>
                            <button class="tablink" onclick="openPage('About', this, '#007e93')">About</button>
                            <button class="tablink" onclick="openPage('About', this, '#007e93')">About</button>
                            <button class="tablink" onclick="openPage('About', this, '#007e93')">About</button>
                            <div id="Home" class="tabcontent">
                                <h3>Home</h3>
                                <p>Home is where the heart is..</p>
                            </div>

                            <div id="News" class="tabcontent">
                                <h3>News</h3>
                                <p>Some news this fine day!</p> 
                            </div>

                            <div id="Contact" class="tabcontent">
                                <h3>Contact</h3>
                                <p>Get in touch, or swing by for a cup of coffee.</p>
                            </div>

                            <div id="About" class="tabcontent">
                                <h3>About</h3>
                                <p>Who we are and what we do.</p>
                            </div>

                        </div>
                    </section>
                </div>
            </section>
            <?php include 'footer.php'; ?>
            <script>
                function openPage(pageName, elmnt, color) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].style.backgroundColor = "";
                    }
                    document.getElementById(pageName).style.display = "block";
                    elmnt.style.backgroundColor = color;
                }

// Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
        </div>
    </body>
</html>
