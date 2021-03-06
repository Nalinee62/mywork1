<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Activity</title>

</head>
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
      body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
      body {font-size:16px;
            background-color:#FFFAF0;
      }
      .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
      .w3-half img:hover{opacity:1}
    </style>
  <body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
      <div class="w3-container">
        <h3 class="w3-padding-64"><b>Nalinee<br>Aonthong</b></h3>
      </div>
      <div class="w3-bar-block">
        <a href="<?php echo site_url('Satang/index');?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
        <a href="<?php echo site_url('Satang/work');?>" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Work</a> 
      </div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
      <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">☰</a>
      <span>MENU</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

      <!-- !PAGE CONTENT! -->
      <div class="w3-main" style="margin-left:340px;margin-right:40px">

      <!-- Header -->
      <div class="w3-container" style="margin-top:80px">
        <h1 class="w3-jumbo"><b>This is My Activity!</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
      </div>
    

      <!-- Modal for full size images on click-->
      <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
          <img id="img01" class="w3-image">
          <p id="caption"></p>
        </div>
      </div>

      <!--Year 2562 -->
      <div class="w3-row-padding" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>YEAR 2562</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
        <div class="w3-half">
          <p>กิจกรรมการเรียนรู้ระบบ IoT</p>
          <img src="<?php echo base_url('img');?>/IoT1.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมการเรียนรู้ระบบ IoT">
          <img src="<?php echo base_url('img');?>/IoT2.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมการเรียนรู้ระบบ IoT">
          <img src="<?php echo base_url('img');?>/IoT3.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมการเรียนรู้ระบบ IoT">
          <br><br><br><br>
        </div>
        
        <div class="w3-half">
          <p>อบรมDIA (Thailand Data Innovation Awards)</p>
          <img src="<?php echo base_url('img');?>/DIA1.jpg" style="width:100%"
            onclick="onClick(this)" alt="อบรมDIA (Thailand Data Innovation Awards)">
          <img src="<?php echo base_url('img');?>/DIA2.jpg" style="width:100%" 
            onclick="onClick(this)" alt="อบรมDIA (Thailand Data Innovation Awards)">
          <img src="<?php echo base_url('img');?>/DIA3.jpg" style="width:100%" 
            onclick="onClick(this)" alt="อบรมDIA (Thailand Data Innovation Awards)">
        </div>
      </div>

      <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>จิตอาสาสร้างฝายชะลอน้ำชุมชนน้ำรึม</p>
          <img src="<?php echo base_url('img');?>/pic1.jpg" style="width:100%" onclick="onClick(this)" alt="จิตอาสาสร้างฝายชะลอน้ำชุมชนน้ำรึม">
          <img src="<?php echo base_url('img');?>/pic2.jpg" style="width:100%" onclick="onClick(this)" alt="จิตอาสาสร้างฝายชะลอน้ำชุมชนน้ำรึม">
        </div>
      </div>

      <!--Year 2563 -->
      <div class="w3-row-padding" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>YEAR 2563</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
      <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>โครงการสรรหาผู้นำ ณ มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา ตาก</p>
          <img src="<?php echo base_url('img');?>/camp1.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการสรรหาผู้นำ">
          <img src="<?php echo base_url('img');?>/camp2.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการสรรหาผู้นำ">
          <img src="<?php echo base_url('img');?>/camp3.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการสรรหาผู้นำ">
          <img src="<?php echo base_url('img');?>/camp4.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการสรรหาผู้นำ">
          <br><br><br><br>
        </div>
        <div class="w3-half">
          <p>กิจกรรมส่งเสริมสัมมาชีพชุมชน ณ สำนักงานพัฒนาชุมชน อำเภอเมืองตาก</p>
          <img src="<?php echo base_url('img');?>/2563(1).jpg" style="width:100%"
            onclick="onClick(this)" alt="กิจกรรมส่งเสริมสัมมาชีพชุมชน ณ สำนักงานพัฒนาชุมชน อำเภอเมืองตาก">
          <img src="<?php echo base_url('img');?>/2563(2).jpg" style="width:100%" 
            onclick="onClick(this)" alt="กิจกรรมส่งเสริมสัมมาชีพชุมชน ณ สำนักงานพัฒนาชุมชน อำเภอเมืองตาก">
          <img src="<?php echo base_url('img');?>/2563(3).jpg" style="width:100%" 
            onclick="onClick(this)" alt="กิจกรรมส่งเสริมสัมมาชีพชุมชน ณ สำนักงานพัฒนาชุมชน อำเภอเมืองตาก">
        </div>
      </div>

      <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>โครงการประชุมสัมมนา เรื่อง เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal” (New Gen New Normal) 
            ณ มหาวิทยาลัยราชภัฏพิบูลสงคราม จังหวัดพิษณุโลก</p>  
          <img src="<?php echo base_url('img');?>/newgen2.jpg" style="width:100%" 
            onclick="onClick(this)" alt="เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal”">
          <img src="<?php echo base_url('img');?>/newgen3.jpg" style="width:100%" 
            onclick="onClick(this)" alt="เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal”">
            <img src="<?php echo base_url('img');?>/newgen4.jpg" style="width:100%" 
            onclick="onClick(this)" alt="เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal”">
          <img src="<?php echo base_url('img');?>/newgen5.jpg" style="width:100%" 
            onclick="onClick(this)" alt="เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal”">
          <br><br><br><br>
        </div>       
      <div>

      <!--Year 2564 -->
      <div class="w3-row-padding" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>YEAR 2564</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
        <div class="w3-half">
          <p>กิจกรรมสัปดาห์วิทยาศาสตร์ 2564</p>
          <img src="<?php echo base_url('img');?>/sci1.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมสัปดาห์วิทยาศาสตร์ 2564">
          <img src="<?php echo base_url('img');?>/sci2.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมสัปดาห์วิทยาศาสตร์ 2564">
          <br><br><Br><br>
        </div>
        
        <div class="w3-half">
          <p>กิจกรรมอยู่รอดอย่างไรในยุคดิจิทัล</p>
          <img src="<?php echo base_url('img');?>/digital1.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมอยู่รอดอย่างไรในยุคดิจิทัล">
          <img src="<?php echo base_url('img');?>/digital2.jpg" style="width:100%" onclick="onClick(this)" alt="กิจกรรมอยู่รอดอย่างไรในยุคดิจิทัล">
        </div>
      </div>

      <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>โครงการ Young Inventors</p>
          <img src="<?php echo base_url('img');?>/Y1.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการ Young Inventors">
          <img src="<?php echo base_url('img');?>/Y2.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการ Young Inventors">
          <img src="<?php echo base_url('img');?>/Y3.jpg" style="width:100%" onclick="onClick(this)" alt="โครงการ Young Inventors">
        </div>
      <div>

      <!-- End page content -->
      </div>

    <!-- W3.CSS Container -->
    <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

    <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }
 
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
    </script>

  </body>
</html>
