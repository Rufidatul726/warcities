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
    <link href="<?= base_url()?>asset/css/login.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?= base_url()?>asset/css/custom.min.css" rel="stylesheet" type="text/css"/>-->
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
   
         <div class="regbackground">
        
            <br><br><br><br>
        
            <div class="container">
                
                
           
            <div class="row ">
               
                <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $id = $row['id']; ?>
                        <?php $sDate = $row['startDate']; ?>
                        <?php $eDate = $row['endDate']; ?>
                        <?php $status = $row['status']; ?> 
                       <?php $maimenuId = $row['mainTournamentId']; ?> 
                 <?php if ($status === 'ACTIVE'): ?>
                
                <?php foreach ($table_cotent as $row): ?>
                   
                     <?php $subTid = $row['id']; ?> 
                     <?php $tablename = $row['tablename']; ?> 
                
                     <?php if ($subTid === $maimenuId): ?>
                <div style="margin-left:40px;margin-top: 100px;margin-bottom: 100px;"class=" text-center boxforReg col-md-3 col-sm-3 col-sm-3 col-xs-12">
                          <div class="contentpricing">
                            <div class="title">
                                <br>
                               <h4 class="heading text-center"><?php echo $gameName; ?></h4>
                              <hr>
                            </div>
                              
                            <div class="x_content">
                              <div class="">
                                 
                                  <h6 class="text-center">FROM</h6>
                                  
                                  <h4 class="heading text-center">{ <?php echo $sDate  ;  ?> }</h4>
                                 
                                  <hr>
                                  <h6 class="text-danger text-center">TO</h6>
                                 <h4 class="heading text-danger text-center">{ <?php echo $eDate; ?> }</h4>
                                  <hr>
                                
                                  <a class="btn btn-danger btn-block" href="<?php echo base_url() ?>Call_controller/registration/<?php echo $tablename  ;  ?>/<?php echo $gameName; ?>/<?php echo $id; ?>">REGISTER</a>
                              </div>
                                <br>
                            </div>
                          </div>
                        </div>
                    
                
                    <?php endif; ?>
                 <?php endforeach; ?>    
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

