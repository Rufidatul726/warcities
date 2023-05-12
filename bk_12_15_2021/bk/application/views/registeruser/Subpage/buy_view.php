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
    <link href="<?= base_url()?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
    
    
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <?php  $tid = $tranjectionId; ?>
    <hr>
    <div class="container">
        <h2 class="heading text-center text-primary" >SELECT YOUR PAYMENT METHOD</h2>
        <hr>
        <div class="row">
            
            <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                
            </div>
            
            
            
            <div class="col-md-4 col-sm-4 col-sm-4 col-xs-4">
                <img class="img-responsive img-thumbnail" src="<?= base_url()?>asset/image/Background_image/clint/bikash.jpg" alt=""/>
           
                <a class="btn btn-primary btn-block " href="#">PAY WITH BIKASH</a>
            </div>
            
            
            <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                
            </div>

            
            
            
            <div class="col-md-4 col-sm-4 col-sm-4 col-xs-4">
                <img class="img-thumbnail"src="<?= base_url()?>asset/image/Background_image/clint/dbbl.jpg" alt=""/>
                <a class="btn btn-primary btn-block " href="#">PAY WITH DBBL</a>
            </div>
            
            
            
            <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                
            </div>

        </div>
    </div>
       
        
   
    
</body>
</html>

