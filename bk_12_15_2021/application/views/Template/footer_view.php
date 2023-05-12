<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
<head>
   
    <title>WarCities</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Template">
<meta name="author" content="BrainChild">    
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/Footer-Clean.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/Footer-Dark.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/Navigation-with-Button.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/Navigation-with-Search.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
   
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script> -->
   <script src="<?= base_url()?>asset/js/jquery.smoothscroll.min.js" type="text/javascript"></script>
   

</head>
<body>
    <hr>
    <div class="container-fluid">
        
<div class="footer-dark" style="background: white; color: black;">
    <footer id="cont">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a>Web Development</a></li>
                            <li><a >App Development</a></li>
                            <li><a >Video Game Tournament Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="<?php echo base_url() ?>Call_controller/about">Company</a></li>
                            <li><a >Team</a></li>
                            <li><a >Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>WarCities</h3>
                        <p>Our company WarCities is a leading internet media with whom we share a common passion for gaming. We organize both online and offline game tournament's, leading influencers, video game websites etc.</p>
                    </div>
                    <div class="col item social"><a href="https://www.facebook.com/warcities"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/warcities19"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="https://www.instagram.com/warcities19/"><i class="fa fa-instagram"></i></a></div>
                
                </div>
                <p class="copyright">WarCities © <?php echo date ('Y');  ?></p>
                
                <p class="text-center">powered by :  Inventa</p>

                <!-- <p class="text-center">powered by :  <a href="http://www.brainchildbd.xyz/">
                        <img  width="50px"src="<?= base_url()?>asset/image/Background_image/favicon-96x96.png" alt=""/>
                    </a>
                </p> -->
               
            </div>
        </footer>
    </div>
    
         
    
    </div>
</body>


<script>
   $(function() {
    $('html').smoothScroll(500);
   });
  </script>



</html>