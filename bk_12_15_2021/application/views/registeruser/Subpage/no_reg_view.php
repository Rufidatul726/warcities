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
   
     <link href="<?= base_url() ?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>
    
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <div style="margin-top: 100px;" class="container-fluid noReg">
        <br> <br> <br> <br><br>
        <div  class="row">
            
            <?php $gamename;?>
            <?php   $newNameGame = str_replace("%20"," ",$gamename);;?>
            <div class="col-md-8 col-sm-8 col-sm-8 col-xs-8">
                
            </div>
            
            
            <div class="text-center col-md-4 col-sm-4 col-sm-4 col-xs-4">
                <h1>
                    Sorry you have already registered<br> for this tournament of <br> <b><?= $newNameGame;?></b>
                </h1>    
                 <br> <br>
                 <h1 class="text-center">
                     You can Always Check  Our <br> on Going Tournament <br> by Clicking Bellow.
                </h1>
                
                 <br><br><br>
                 
                 <a class="btn btn-dark" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/tournametListDetails"><i class="fa fa-trophy fa-1x"></i> TOURNAMENTS</a>
                 
                 
            </div>
            
        </div>
        
         <br> <br> <br> <br>
        
    </div>
        
   
    
</body>
</html>

