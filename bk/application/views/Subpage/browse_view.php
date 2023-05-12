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
     <link href="<?= base_url() ?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>
    
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <div class="container-fluid textLink">
        
        <div style="margin-top: 150px;"class="row">
                <div class=" col-md-5 col-sm-5 col-sm-5 col-xs-5">    
                    <h2 class="text-center">
                        Tournament by Game
                    </h2>
                </div>  

                <div class=" text-center col-md-4 col-sm-4 col-sm-4 col-xs-4">     

                    
                    




                    <?php $attributes = array('class' => 'text-center serachBox', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('Call_controller/searchLoad', $attributes); ?>

                    <input class=" serachBox text-center "type="text" placeholder='search your desire' name="search" id="kye">
                    <span id="searchError"></span>







                </div> 

                <div class=" text-center hvr-float-shadow col-md-2 col-sm-2 col-sm-2 col-xs-2">

                    <button class="btn btn-danger"type="submit"> search <i class="fa fa-search"></i></button>


                    <?php echo form_close(); ?>   
                </div>    




            </div>
        <br>
        
        <div class="row">
            
             <?php foreach ($sub_cotent as $row): ?>
                                <?php $nGameName = $row['tournamentName']; ?>
                                <?php $showpic = $row['piclocation']; ?>
                                <?php $tid= $row['id']; ?>
                                <?php $status= $row['status']; ?>
                                  <?php $tablename = $row['tablename']; ?>
                                 
                       <?php $newGamename = str_replace("%20", " ", $nGameName); ?>
            
            
            <div class=" col-md-4 col-lg-4 col-sm-4 col-xs-12">
            <div class="textLink gameViewBox" >
                 
                 
                 
                 
                     <?php if ($status === 'ACTIVE'): ?>
                 
                <!--<a  style="text-decoration: none; color: red;" href="<?php echo base_url() ?>Call_controller/registration/<?php echo $tablename  ;  ?>/<?php echo $newGamename; ?>/<?php echo $tid; ?>">-->
                <a  style="text-decoration: none; color: red;" href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo $tid; ?>">

                        <div class="gameViewUpperBox">
                             <img class="fitImage "src="<?php echo $showpic; ?>" alt=""/>
                         </div>

                         <div>

                             <h2 style="margin-top: 10px;"class="text-center">
                                 <?php echo $nGameName; ?>
                             </h2>
                         </div>
                 
                 </a>  

                     <?php else: ?>
                
                   <a style="text-decoration: none; color: red;" href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $newGamename; ?>">
                 <div class="gameViewUpperBox">
                             <img class="fitImage "src="<?php echo $showpic; ?>" alt=""/>
                         </div>

                         <div>

                             <h2 style="margin-top: 10px;"class="text-center">
                                 <?php echo $nGameName; ?>
                             </h2>
                         </div>
                         </a> 
                     <?php endif; ?>
                 
                 
                 
                 
                
                 
                 
                 
                 
            </div>
            
            </div>
            
                          <?php endforeach; ?> 
            
            
           
            
            
            
            
        </div>
        
        
        
        
        
    </div> 
       
        
   
    
</body>
</html>

