<?php include_once('config.php'); ?>
<?php
$title = "Bigtera - Products";
require_once(ROOT ."inc/header.inc");
?>



<div id="page">

    <!-- Title bar -->
    <div class="pi-section-w pi-section-base pi-section-base-gradient">
        <div class="pi-texture" style="background: url(<?php echo $url; ?>img/hexagon.png) repeat;"></div>
        <div class="pi-section" style="padding: 30px 40px 26px;">

            <div class="pi-row">
                <div class="pi-col-sm-4 pi-center-text-xs">
                    <h1 class="h2 pi-weight-300 pi-margin-bottom-5">Products</h1>
                </div>
            </div>

        </div>
    </div>
    <!-- End title bar -->

    <!-- Breadcrumbs -->
    <div class="pi-section-w pi-border-bottom pi-section-grey">
        <div class="pi-section pi-titlebar pi-breadcrumb-only">
            <div class="pi-breadcrumb pi-center-text-xs">
                <ul>
                    <li><a href="<?php echo $url; ?>">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs -->

    <!-- - - - - - - - - - SECTION - - - - - - - - - -->
    <?php
    if(isset($_POST['submit'])) {
        $to = "bigteratester@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $job = $_POST['job'];
        $country = $_POST['country'];

        $subject = "Form submission";
        $message =   $from . "\nName:" . $first_name . " " . $last_name . "\nPhone:" . $phone . "\nCompany:" . $company . "\nJob:" . $job . "\nCountry:" . $country;
        //$message2 = "Thanks! Here is a copy of your message, " . $first_name . ".\n\n" . $_POST['message'];

        $headers = "From:" . $from;


        mail($to,$subject,$message,$headers);



    }
    ?>



    <div class="pi-section-w pi-section-white pi-slider-enabled"><a id="sds"></a>
        <div class="pi-section pi-padding-bottom-40">
            <div class="pi-row pi-padding-top-30">
                <div class="pi-col-sm-3" style="text-align:right; padding-top:50px">
                    <img src="<?php echo $url; ?>img/product/1U.png" alt="">
                </div>
                <div class="pi-col-sm-9">
                    <p class="lead-26 pi-weight-700 pi-text-base pi-margin-bottom-5">VirtualStor™ SDS Controller</p>
                    <p class="lead-14">
                        Consolidates, simplifies, and optimizes storage infrastructures
                    </p>
                    <p class="lead-14">
                        VirtualStor™ SDS Controller significantly increases the ROI for storage infrastructures while at the same time revitalizing and enhancing the infrastructure. SDS Controller consolidates and virtually aggregates SAN, NAS, and DAS storage products in to a single massive, easily managed, flexible, storage entity. From this entity, administrators can create Virtual Storage pools (SAN, NAS, object) and apply a number of data services, all while defining storage capacity, performance (IOPS and throughput), accessibility, and availability.
                    </p>
                    <script type = "text/javascript">
                        var a = 0;
                        function show1()
                        {
                            document.getElementById("form1").style.display="none";

                            if(a==0)
                            {
                                document.getElementById("form1").style.display="none";
                                a = 1;
                            }
                            else
                            {

                                document.getElementById("form1").style.display="block";
                                document.getElementById("button1").style.display = "none";
                                //document.getElementById("download").style.display="block";
                                a = 0;
                            }

                        }
                        window.onload = function(){
                            show1();
                            show2();
                            show3();
                        }
                        //window.onload = show2;
                    </script>

                    <script type = "text/javascript">
                        function viewpdf1()
                        {
                            window.open('http://www.bigtera.com/docs/Bigtera%20VirtualStor%20SDS%20Controller-Datasheet-EN.pdf');

                        }
                    </script>




                    <script type="text/javascript">
                        function checkform1()
                        {
                            var f = document.forms["form1"].elements;
                            var cansubmit = true;

                            for (var i = 0; i < f.length; i++) {
                                if (f[i].value.length == 0) cansubmit = false;
                            }

                            document.getElementById('submit1').disabled = !cansubmit;

                        }

                    </script>

                    <button id = "button1" onclick="show1()">SDS Controller Datasheet</button>
                    <form action="" id = "form1" method="post" >
                        <p>All fields required</p>
                        First Name: <input type="text" name="first_name" onKeyup="checkform1()"><br>
                        Last Name: <input type="text" name="last_name" onKeyup="checkform1()"><br>
                        Work Email: <input type="text" name="email" onKeyup="checkform1()"><br>
                        Phone Number: <input type = "text" name = "phone" onKeyup="checkform1()"><br>
                        Company Name: <input type = "text" name = "company" onKeyup="checkform1()"><br>
                        Job Title: <input type = "text" name = "job" onKeyup="checkform1()"><br>
                        Country: <input type = "text" name = "country" onKeyup="checkform1()"><br>
                        <input type="submit" name="submit" value="Submit & View" id = "submit1" disabled onclick="viewpdf1()">
                    </form>
                </div>
            </div>
            <a id="scaler"></a>
            <div class="pi-row pi-padding-top-80">
                <div class="pi-col-sm-3" style="text-align:right; padding-top:20px">
                    <img src="<?php echo $url; ?>img/product/2U4U.png" alt="">
                </div>
                <div class="pi-col-sm-9">
                    <p class="lead-26 pi-weight-700 pi-text-base pi-margin-bottom-5">VirtualStor™ Scaler</p>
                    <p class="lead-14">
                        High-performance unified scale-out storage
                    </p>
                    <p class="lead-14">
                        VirtualStor™ Scaler provides customers with a cost effective x86 scale-out storage solution that allows them to pay as they grow. Scaler’s scale-out architecture provides the flexibility to specify the storage type (NAS, SAN, object storage), performance (IOPS and throughput), and efficiency all while delivering resilient and secure capacity.
                    </p>
                    <script type = "text/javascript">
                        var b = 0;
                        function show2()
                        {
                            document.getElementById("form2").style.display="none";

                            if(b==0)
                            {
                                document.getElementById("form2").style.display="none";
                                b = 1;
                            }
                            else
                            {

                                document.getElementById("form2").style.display="block";
                                document.getElementById("button2").style.display = "none";
                                //document.getElementById("download").style.display="block";
                                b = 0;
                            }
                        }

                    </script>

                    <script type = "text/javascript">
                        function viewpdf2()
                        {
                            window.open('http://www.bigtera.com/docs/Bigtera%20VirtualStor%20Scaler-Datasheet-EN.pdf');

                        }
                    </script>

                    <script type="text/javascript">
                        function checkform2()
                        {
                            var f = document.forms["form2"].elements;
                            var cansubmit = true;

                            for (var i = 0; i < f.length; i++) {
                                if (f[i].value.length == 0) cansubmit = false;
                            }

                            document.getElementById('submit2').disabled = !cansubmit;

                        }

                    </script>

                    <button id = "button2" onclick="show2()">Scaler Datasheet</button>
                    <form action="" id = "form2" method="post" >
                        <p>All fields required</p>
                        First Name: <input type="text" name="first_name" onKeyup="checkform2()"><br>
                        Last Name: <input type="text" name="last_name" onKeyup="checkform2()"><br>
                        Work Email: <input type="text" name="email" onKeyup="checkform2()"><br>
                        Phone Number: <input type = "text" name = "phone" onKeyup="checkform2()"><br>
                        Company Name: <input type = "text" name = "company" onKeyup="checkform2()"><br>
                        Job Title: <input type = "text" name = "job" onKeyup="checkform2()"><br>
                        Country: <input type = "text" name = "country" onKeyup="checkform2()"><br>
                        <input type="submit" name="submit" value="Submit & View" id = "submit2" disabled onclick="viewpdf2()">
                    </form>
                </div>
            </div>
            <a id="converger"></a>
            <div class="pi-row pi-padding-top-60">
                <div class="pi-col-sm-3" style="text-align:right; padding-top:30px">
                    <img src="<?php echo $url; ?>img/product/2U.png" alt="">
                </div>
                <div class="pi-col-sm-9">
                    <p class="lead-26 pi-weight-700 pi-text-base pi-margin-bottom-5">VirtualStor™ Converger</p>
                    <p class="lead-14">
                        Cross-platform unified converged storage
                    </p>
                    <p class="lead-14">
                        VirtualStor™ Converger provides customers with a hyper-converged, flexible, scale out storage solution on x86 server. Converger deploys to any hypervisor (KVM, VMware, Hyper-V) blending high performance with simplified infrastructure management.
                    </p>
                    <script type = "text/javascript">
                        var c = 0;
                        function show3()
                        {
                            document.getElementById("form3").style.display="none";

                            if(c==0)
                            {
                                document.getElementById("form3").style.display="none";
                                c = 1;
                            }
                            else
                            {

                                document.getElementById("form3").style.display="block";
                                document.getElementById("button3").style.display = "none";
                                //document.getElementById("download").style.display="block";
                                c = 0;
                            }
                        }

                    </script>

                    <script type = "text/javascript">
                        function viewpdf3()
                        {
                            window.open('http://www.bigtera.com/docs/Bigtera%20VirtualStor%20Converger-Datasheet-EN.pdf');

                        }
                    </script>

                    <script type="text/javascript">
                        function checkform3()
                        {
                            var f = document.forms["form3"].elements;
                            var cansubmit = true;

                            for (var i = 0; i < f.length; i++) {
                                if (f[i].value.length == 0) cansubmit = false;
                            }

                            document.getElementById('submit3').disabled = !cansubmit;

                        }

                    </script>

                    <button id = "button3" onclick="show3()">Converger Datasheet</button>
                    <form action="" id = "form3" method="post" >
                    <p>All fields required</p>
                        First Name: <input type="text" name="first_name" onKeyup="checkform3()"><br>
                        Last Name: <input type="text" name="last_name" onKeyup="checkform3()"><br>
                        Work Email: <input type="text" name="email" onKeyup="checkform3()"><br>
                        Phone Number: <input type = "text" name = "phone" onKeyup="checkform3()"><br>
                        Company Name: <input type = "text" name = "company" onKeyup="checkform3()"><br>
                        Job Title: <input type = "text" name = "job" onKeyup="checkform3()"><br>
                        Country: <input type = "text" name = "country" onKeyup="checkform3()"><br>
                        <input type="submit" name="submit" value="Submit & View" id = "submit3" disabled onclick="viewpdf3()">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- - - - - - - - - - END SECTION - - - - - - - - - -->

</div>

<?php require_once(ROOT ."inc/footer.inc"); ?>

</div>

<?php require_once(ROOT ."inc/common.inc"); ?>

</body>
</html>