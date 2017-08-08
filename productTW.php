<?php include_once('config.php'); ?>
<?php
$title = "Bigtera - 產品系列";
require_once(ROOT ."inc/header.inc");
?>

<div id="page">

<!-- Title bar -->
<div class="pi-section-w pi-section-base pi-section-base-gradient">
	<div class="pi-texture" style="background: url(<?php echo $url; ?>img/hexagon.png) repeat;"></div>
	<div class="pi-section" style="padding: 30px 40px 26px;">
	
		<div class="pi-row">
			<div class="pi-col-sm-4 pi-center-text-xs">
				<h1 class="h2 pi-weight-300 pi-margin-bottom-5">產品系列</h1>
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
				<li><a href="<?php echo $url; ?>">首頁</a></li>
				<li>產品系列</li>
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
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $job = $_POST['job'];
        $country = $_POST['country'];

        $subject = "Form submission";
        $message =   $from . "\nName:" . $name . "\nPhone:" . $phone . "\nCompany:" . $company . "\nJob:" . $job . "\nCountry:" . $country;
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
			整合、優化並簡化軟體定義儲存基礎架構
		</p>
		<p class="lead-14">
			VirtualStor™ SDS Controller 在煥活和提升儲存基礎架構性能的同時顯著提升投資回報率。SDS Controller可將既有的NAS, DAS以及SAN儲存整合、匯聚成一個易於管理、可彈性配置、容量巨大的儲存設備。管理員可方便地從該儲存設備中創建虛擬儲存池（SAN，NAS以及對象）並部署諸多數據服務， 同時可定義虛擬儲存器的容量、性能（IOPS和帶寬），可訪問性以及可用性。
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
                  名稱: <input type="text" name="name" onKeyup="checkform1()"><br>
                  工作電子郵件: <input type="text" name="email" onKeyup="checkform1()"><br>
                  電話號碼: <input type = "text" name = "phone" onKeyup="checkform1()"><br>
                  公司名: <input type = "text" name = "company" onKeyup="checkform1()"><br>
                  職稱: <input type = "text" name = "job" onKeyup="checkform1()"><br>
                  國家: <input type = "text" name = "country" onKeyup="checkform1()"><br>
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
			高性能統一橫向擴展儲存
		</p>
		<p class="lead-14">
			VirtualStor™ Scaler 為用戶提供了一種經濟高效的橫向擴展儲存解決方案，允許用戶隨業務增長逐步支付儲存設備的費用。Scaler的橫向擴展架構在提供高可用及數據安全的儲存空間的同時，也提供了彈性配置儲存類型（SAN, NAS和對象儲存）、性能（IOPS以及帶寬）以及效率的能力。
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

              //window.onload = show2;
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
              名稱: <input type="text" name="name" onKeyup="checkform2()"><br>
              工作電子郵件: <input type="text" name="email" onKeyup="checkform2()"><br>
              電話號碼: <input type = "text" name = "phone" onKeyup="checkform2()"><br>
              公司名: <input type = "text" name = "company" onKeyup="checkform2()"><br>
              職稱: <input type = "text" name = "job" onKeyup="checkform2()"><br>
              國家: <input type = "text" name = "country" onKeyup="checkform2()"><br>
              <input type="submit" name="submit" value="Submit & View" id = "submit2" disabled onclick="viewpdf2()">
            </form>
		  </div>
	    </div>
	    <a id="converger"></a>
        <div class="pi-row pi-padding-top-50">
		  <div class="pi-col-sm-3" style="text-align:right; padding-top:30px">
	      	<img src="<?php echo $url; ?>img/product/2U.png" alt="">
	      </div>
		  <div class="pi-col-sm-9">
		<p class="lead-26 pi-weight-700 pi-text-base pi-margin-bottom-5">VirtualStor™ Converger</p>
		<p class="lead-14">
			跨平台的統一融合型儲存
		</p>
		<p class="lead-14">
			VirtualStor™ Converger 為用戶提供了一款超融合、彈性配置以及可橫向擴展的儲存解決方案。Converger可在多種虛擬化平台（KVM, VMWare, Hyper-V）上進行部署，融合了高性能和簡化儲存基礎架構管理的特性。
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
                  名稱: <input type="text" name="name" onKeyup="checkform3()"><br>
                  工作電子郵件: <input type="text" name="email" onKeyup="checkform3()"><br>
                  電話號碼: <input type = "text" name = "phone" onKeyup="checkform3()"><br>
                  公司名: <input type = "text" name = "company" onKeyup="checkform3()"><br>
                  職稱: <input type = "text" name = "job" onKeyup="checkform3()"><br>
                  國家: <input type = "text" name = "country" onKeyup="checkform3()"><br>
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