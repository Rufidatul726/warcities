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
   <link href="<?= base_url()?>asset/css/Navigation-with-Button.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/Navigation-with-Search.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/customEdit.css" rel="stylesheet" type="text/css"/>
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div id = "newheader" class="container-fluid ">
        
  <nav  class="navbar navbar-light navbar-expand-md  bg-white navigation-clean-button ">
            <div class="container-fluid">
                
                <a class="navbar-brand"  href="<?php echo base_url() ?>Main_controller/index">
                    
                    <img class="img-fluid"src="<?php echo base_url() ?>asset/image/icone/100.png" alt=""/>
                   
               </a>
                
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <!-- <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Main_controller/index">HOME</a></li> -->
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/about">ABOUT</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo ''; ?>">Ongoing</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/subGameLoadpast/<?php echo ''; ?>">Previous</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/about">Create</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/browser">BROWSE</a></li>         
                        <li class="nav-item" role="presentation"><a class="nav-link " href="<?php echo base_url() ?>Call_controller/tournament"><i class="fa fa-trophy fa-1x"></i> LeaderBoard</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/requestForTournament">Request </a></li>
                    
                    </ul><span class="navbar-text actions"> </span><span class="navbar-text"></span>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link  "  href="<?php echo base_url() ?>Call_controller/login">LOG IN</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link  " href="<?php echo base_url() ?>Call_controller/regUser">REGISTER</a></li>
                    </ul>
              </div>
           </div>
    </nav>
    </div>
</body>

<script>
    $(document).ready(function () {
  
window.onscroll = function(e) { 
    var scrollY = window.pageYOffset || document.documentElement.scrollTop;
    var header = document.getElementById('newheader');

    scrollY <= this.lastScroll 
      ? header.style.visibility = 'visible'
      : header.style.visibility = 'hidden'; 

    this.lastScroll = scrollY ;
};
  
});
 </script>   


</html>