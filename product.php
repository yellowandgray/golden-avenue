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
            <section id="inner-headline-8">
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
