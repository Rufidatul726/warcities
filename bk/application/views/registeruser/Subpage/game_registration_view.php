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
    <link href="<?= base_url()?>asset/css/login.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?= base_url()?>asset/css/custom.min.css" rel="stylesheet" type="text/css"/>-->
    
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
   
         <div class="regbackground">
        
            <br><br>
        
            <div class="container">
                
                
           
            <div class="row ">
               
                <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $id = $row['id']; ?>
                        <?php $sDate = $row['startDate']; ?>
                        <?php $eDate = $row['endDate']; ?>
                        <?php $status = $row['status']; ?> 
                        <?php $tablename = $row['tablename']; ?>
                 <?php if ($status === 'ACTIVE'): ?>
                    
                    <div class=" boxforReg col-md-3 col-sm-6 col-sm-4 col-xs-12">
                          <div class="contentpricing">
                            <div class="title">
                                <br>
                                <h2 class="text-center text-nowrap"><b>GAME NAME</b></h2>
                                <hr>
                                <h4 class="heading text-center"><?php echo $gameName; ?></h4>
                             
                                <hr>
                                
                            </div>
                              
                            <div class="x_content">
                              <div class="">
                                 
                                  <h4 class="text-center">REG START DAY </h4>
                                  
                                  <h6 class="heading text-center">{ <?php echo $sDate  ;  ?> }</h6>
                                 
                                  <hr>
                                  <h4 class="text-danger text-center">REG END DAY </h4>
                                 <h6 class="heading text-danger text-center">{ <?php echo $eDate; ?> }</h6>
                                  <hr>
                                  <h3 class="text-info text-center">WANT TO PLAY ?</h3>
                                  <br>
                                  <p class="text-center text-info">REGISTERED YOUR SELF</p>
                                  <hr>
                                  
                                  <a class="btn btn-info btn-block" href="<?php echo base_url() ?>Call_controller/registration/<?php echo $tablename  ;  ?>/<?php echo $gameName; ?>">REGISTER</a>
                              </div>
                                <br>
                            </div>
                          </div>
                        </div>
                    
                <?php endif; ?>
                 <?php endforeach; ?>      
             
                    
                </div>
                
                
                
            </div>
            
            <br>
            
             </div>
            
            
            
            
      
<br>
       </div>
       </div>
     
        
   
    
</body>
</html>

