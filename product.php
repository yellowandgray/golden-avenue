<!DOCTYPE html>
<html lang="en">
    <?php
    $page = 'products';
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
                                <h2 class="font-size-24 text-center wow fadeInUp">Infrastructure Products</h2>
                            </div>
                            <div class="col-md-6 wow fadeInLeft">
                                <h3>Enterprise Computing & Telecom</h3>
                                <p class="text-justify">95% of businesses depend on Information Technology and to help facilitate businesses to scale and grow in the right direction, using the right equipment is as important as making the right decisions to run your business.</p>
                                <p class="text-justify">Golden Avenue has the expertise in providing the complete range of hardware products ranging from Laptops, Desktops, Servers, Printers, Networking and Security products. We work only with the top-tier brands and ensure genuine products are provided. Our offering is depending on the scale and nature of our client’s requirements.</p>
                            </div>
                            <div class="col-md-6 wow fadeInRight">
                                <img src="img/product-img.jpg" alt="" class="img-width">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <section class="section-padding">
                        <div class="row">
                            <div class="col-md-12 wow fadeInUp">
                                <button class="tablink" onclick="openPage('PC', this, '#007e93')" id="defaultOpen">PC’s and Consumables</button>
                                <button class="tablink" onclick="openPage('Server', this, '#007e93')">Servers</button>
                                <button class="tablink" onclick="openPage('Storage', this, '#007e93')">Storage</button>
                                <button class="tablink" onclick="openPage('Printing', this, '#007e93')">Printing</button>
                                <button class="tablink" onclick="openPage('Networking', this, '#007e93')">Networking</button>
                                <button class="tablink" onclick="openPage('Security', this, '#007e93')">Security</button>
                                <div id="PC" class="tabcontent">
                                    <div class="row">
                                        <!--                                        <div class="product-container">-->
                                        <div class="col-md-6">
                                            <div class="product-inner product-container">
                                                <img src="img/product-new/pc.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">PC’s and Consumables</h3>
                                                <p><strong>To keep in line with current requirements of clients we offer wide range of products taking into consideration their budgets</strong></p>
                                                <p>1.	PCs</p>
                                                <p>2.	Laptops</p>
                                                <p>3.	All in Ones</p>
                                                <p>4.	Thin Clients</p>
                                                <p>5.	Workstations</p>
                                            </div>
                                        </div>
                                        <!--                                        </div>-->
                                    </div>
                                </div>

                                <div id="Server" class="tabcontent">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="product-inner product-container1">
                                                <img src="img/product-new/server.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">Servers </h3>
                                                <p><strong>For Outstanding and optimum level of performance, IT-enabled companies depend significantly on computing. Golden Avenue delivers the best computing experience</strong></p>
                                                <p>1.	Rack & Blade Servers.</p>
                                                <p>2.	HPE</p>
                                                <p>3.	Dell</p>
                                                <p>4.	Lenovo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Storage" class="tabcontent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-inner product-container2">
                                                <img src="img/product-new/storage.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">Storage</h3>
                                                <p><strong>Keep your Data safe with cloud and on-premises storage devices</strong></p>
                                                <p>1.	Cloud storage </p>
                                                <p>2.	Network Attached Storage</p>
                                                <p>3.	Solid State Drives</p>
                                                <p>4.	External Hard Disks</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Printing" class="tabcontent">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-inner product-container3">
                                                <img src="img/product-new/printing.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">Printing </h3>
                                                <p><strong>We offer latest printing equipment’s to ensure all your documents are printed as per your requirements</strong></p>
                                                <p>1.	HP Printers</p>
                                                <p>2.	Scanners</p>
                                                <p>3.	Plotters</p>
                                                <p>4.	Epson Printers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Networking" class="tabcontent">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="product-inner product-container4">
                                                <img src="img/product-new/network.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">Networking</h3>
                                                <p><strong>A network connects computers, mobile phones, peripherals, and even IoT devices.</strong></p>
                                                <p>1.	Switches</p>
                                                <p>2.	Routers</p>
                                                <p>3.	Wireless Access points</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="Security" class="tabcontent">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="product-inner product-container4">
                                                <img src="img/product-new/security.jpg" alt="" class="img-width" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6-custome">
                                            <div class="padding-custom">
                                                <h3 class="color-blue">Security</h3>
                                                <p><strong>To protect your Network environment and IT infrastructure from threat, intrusion and data loss, we offer the following solutions.</strong></p>
                                                <p>1.	Application security</p>
                                                <p>2.	Network security</p>
                                                <p>3.	Firewall & VPN</p>
                                                <p>4.	Web Content Security</p>
                                                <p>6.	Enterprise and End point Antivirus</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
