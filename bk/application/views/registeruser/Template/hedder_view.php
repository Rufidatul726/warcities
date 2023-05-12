<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
<head>
   
    <title>WARCITIES</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Template">
<meta name="author" content="BrainChild">    
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/Navigation-with-Button.css" rel="stylesheet" type="text/css"/>
   <link href="<?= base_url()?>asset/css/Navigation-with-Search.css" rel="stylesheet" type="text/css"/>
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    <div class="container-fluid">
        
  <nav class="navbar navbar-light navbar-expand-md fixed-top bg-white navigation-clean-button">
            <div class="container-fluid">
                
                <a class="navbar-brand text-primary"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/index">
<!--                   <img class=""src="<?= base_url()?>asset/image/icone/newicone.png" alt=""/>-->
                    GAME TRADES
               </a>
                
                
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link text-primary " href="<?php echo base_url() ?>reguser/Reguser_Load_controller/index">HOME</a></li>
                        <li class="dropdown" style="color:rgb(51,51,51);"><a class="dropdown-toggle nav-link text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">GAME LIST</a>
                            
                            
                            <div class="dropdown-menu" role="menu">
                                
                                <?php foreach ($header_content as $row): ?>
                                <?php $gameName = $row['gamename']; ?>
                                <?php $id = $row['id']; ?>
                                 <a class="dropdown-item" role="presentation" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadSingelGameAll/<?php echo $id ?>"><?php echo $gameName; ?></a>
                                
                                 <?php endforeach; ?>
                               
                                
                                <div class="dropdown-divider" role="presentation"></div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-primary" href="#">DOCUMENTATION</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-primary" href="#cont">CONTACT</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link text-primary" href="<?php echo base_url() ?>Call_controller/tournament"><i class="fa fa-trophy"></i> TOURNAMENTS</a></li>
                    
                    
                    </ul><span class="navbar-text actions"> </span><span class="navbar-text"></span>
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown" ><a class="dropdown-toggle nav-link text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><user class = "fa fa-user"></user></a>
                            
                            
                            <div class="dropdown-menu" role="menu">
                                
                                
                                 <a class="dropdown-item" role="presentation" href="#">
                                    profile
                                 </a>
                                
                                 <a class="dropdown-item" role="presentation" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/dashboard">
                                   Dashboard
                                 </a>
                               
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url() ?>Call_controller/logout">
                                    Logout <user class = "fa fa-sign-out"></user>
                                 </a>
                                
                                <div class="dropdown-divider" role="presentation"></div>
                            </div>
                        </li>
                       
                        <li class="nav-item" role="presentation"><a class="nav-link text-primary" href="<?php echo base_url() ?>Call_controller/regUser">REGISTER</a></li>
                    </ul>
              </div>
           </div>
    </nav>
    
         
    
    </div>
</body>
</html>