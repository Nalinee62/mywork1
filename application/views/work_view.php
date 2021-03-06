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
        <a href="<?php echo site_url('Satang/activity');?>" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activity</a> 
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
    <div class="w3-container" style="margin-top:80px" id="">
        <h1 class="w3-jumbo"><b>This is My Work!</b></h1>
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

    <!--All my work -->
    <div class="w3-row-padding" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-green"><b>All my work</b></h1>
        <hr style="width:50px;border:5px solid green" class="w3-round">
        <div class="w3-half">
          <p>การสร้างเว็บไซต์แบบ Static ด้วย HTML</p>
          <img src="<?php echo base_url('img');?>/web.jpg" style="width:100%" onclick="onClick(this)" alt="การสร้างเว็บไซต์แบบ Static ด้วย HTML">   
        </div>
        
        <div class="w3-half">
          <img src="<?php echo base_url('img');?>/web2.jpg" style="width:100%" onclick="onClick(this)" alt="การสร้างเว็บไซต์แบบ Static ด้วย HTML">
        </div>
    </div>

    <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>การออกแบบ Infographic</p>
          <img src="<?php echo base_url('img');?>/Poster-IT.jpg" style="width:100%" 
            onclick="onClick(this)" alt="การออกแบบ Infographic">
        </div>
        <div class="w3-half">
          <img src="<?php echo base_url('img');?>/Infographic.jpg" style="width:100%" 
            onclick="onClick(this)" alt="การออกแบบ Infographic">
        </div>
    </div>

    <div class="w3-row-padding" style="margin-top:75px">
        <div class="w3-half">
          <p>พื้นฐานการใช้โปรแกรม Adobe Illustrator</p>
          <img src="<?php echo base_url('img');?>/MyFace2-1.png" style="width:100%" 
            onclick="onClick(this)" alt="พื้นฐานการใช้โปรแกรม Adobe Illustrator">
        <img src="<?php echo base_url('img');?>/watermalon.jpg" style="width:100%" 
            onclick="onClick(this)" alt="พื้นฐานการใช้โปรแกรม Adobe Illustrator">
        </div>
        <div class="w3-half">
          <img src="<?php echo base_url('img');?>/basket-1.png" style="width:100%" 
            onclick="onClick(this)" alt="พื้นฐานการใช้โปรแกรม Adobe Illustrator">
        </div>
    </div>

    <div class="w3-row-padding" style="margin-top:75px">
      <div class="w3-half">
        <p>วิดีโองานสัปดาห์วิทยาศาสตร์ ปี 2564</p>
        <iframe width="700" height="394" 
          src="https://www.youtube.com/embed/YfgQH7EbzqU" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
    </div>

    <div class="w3-row-padding" style="margin-top:75px">        
      <div class="w3-half">
        <p>วิดีโองานสัปดาห์วิทยาศาสตร์ ปี 2564</p>
        <iframe width="700" height="394" src="https://www.youtube.com/embed/tXS35-2f0So" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div>

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
