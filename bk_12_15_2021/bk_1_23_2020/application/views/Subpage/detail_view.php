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
    <link href="<?= base_url()?>asset/css/mainTemplateStyle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
    
    
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    <hr>
    <br>
    <div class="container-fluid">
        

        
         <?php foreach ($trade_cotent as $row): ?>
                                <?php $nGameName = $row['gamename']; ?>
                                <?php $showprice = $row['shoprice']; ?>
                                <?php $Heading= $row['heading']; ?>
                                <?php $itemName= $row['itemname']; ?>
                                 <?php $des= $row['description']; ?> 
                                  <?php $sellerName= $row['sellername']; ?> 
        
                                <?php $tid = $row['id']; ?>
                                 
                       <?php $newGamename = str_replace("%20", " ", $nGameName); ?>
         <?php endforeach; ?> 
        
          <div style="background: white;">
            
            <div class="row">
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1 ">
                    
                    
                    
                    
                </div>
                
                <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 detailBodyBOxLeft">
                    <h2 class="heading text-center"> ALL GAMES</h2>
                    <hr>
                   
                   
                    <?php foreach ($header_content as $row): ?>
                        <?php $gameName = $row['gamename']; ?>
                        <?php $id = $row['id']; ?>


                       
                           
                                <a class="text-center  " role="presentation" href="<?php echo base_url() ?>Call_controller/loadSingelGameAll/<?php echo $id ?>">

                                    <h6 class="bodyBoxLitem">
                            <?php echo $gameName; ?>
                                    
                                    </h6>   

                        </a>

                       

                    

                <?php endforeach; ?>
                    <hr>
                       
                        
                  
                   
                  
                    
                </div>
                    
                                 
                                 
              
                <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8 bodyBOxRight">
                    
                      <h2 class="heading text-center"> SELLING DETAILS</h2>
                     
                      
                      
                      <hr>
                    
                      
                      <div class="row">
                          
                          
                          
                          <div class="col-md-9 col-sm-9 col-xs-9 col-lg-9 text-left text-justify">
                              <h5 class="heading text-left"><b> GAME DETAILS </b></h5>
                             <hr>
                               <h6>
                                <span >  Game Name </span> : <?php echo $newGamename; ?>
                             </h6>
                              
                            <h6>
                                  <span> Sell Type </span>: <?php echo $itemName; ?>
                               </h6>
                              
                              <h6>
                                 <span> Heading </span> : <?php echo $Heading; ?>
                             </h6>
                              
                              
                          </div>
                     
                          <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
                               <p>Price :<b> <?php echo $showprice; ?> </b>BDT</p>
                               
                               <h2 class="btn btn-primary"><a href="<?php echo base_url() ?>Call_controller/login" style="color: white;">BUY NOW</a></h2>
                               <hr>
                               <div class="row">
                                   <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                       <img class="img-responsive" style="width:60px; height: 60px;" src="<?= base_url()?>asset/image/Background_image/clint/1540103746246.png" alt=""/>
                                   </div>
                                   <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                       <img class="img-responsive" style="width:80px; height: 58px;"src="<?= base_url()?>asset/image/Background_image/clint/1540103763617.png" alt=""/>
                                   </div>
                                   <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">
                                       <img class="img-responsive" style="width:60px; height: 58px;" src="<?= base_url()?>asset/image/Background_image/clint/1540103838885.png" alt=""/>
                                   </div>
                               </div>
                          </div>
                     
                          
                      </div>
                      
                      <hr>
                      
                      <h5 class="heading text-left"><b> GAME DETAILS DESCRIPTION </b></h5>
                        <hr>
                      <div class="row">
                          
                          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                              
                             
                              
                              <?php echo $des; ?> 
                              
                          </div>
                          
                          
                      </div>
                      
                     <hr>
                      
                      <h5 class="heading text-left"><b>SCREEN SHOTS </b></h5>
                      <hr>
                      <div class="row">
                          
                          <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                              
                             <?php foreach ($trade_pic_cotent as $row): ?>
                               <?php $pic = $row['piclocation']; ?>
                              <img class="img-thumbnail"src="<?php echo $pic; ?>" alt=""/>
                               <?php endforeach; ?>
                              
                          </div>
                          
                          
                      </div>
                      
                      
                      <hr>
                      <h2 class="heading text-center"> SELLER DETAILS</h2>
                      
                      
                      
                      
                      <hr>
                      
                      <div class="row">
                      
                          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                              
                              
                              <h5 class="heading text-center"><b> SELLER INFO </b></h5>
                              
                                   <hr>
                              
                              
                              
                              <h6 class="heading text-left"> Seller Name : <?php echo $sellerName; ?> </h6>
                                 
                               <h6 class="heading text-left"> Total Post :  <?php echo $seller_info_count; ?> </h6>
                                 <h6 class="heading text-left"> Total Sell : <?php echo $seller_ifo; ?> </h6>
                                  
                                <h6 class="heading text-left"> Rating : </h6>
                          </div>
                          
                          
                          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
                              
                               
                              
                              <h5 class="heading text-center"><b> SELLER REVIEW </b> </h5>
                               <hr>
                              
                              
                              
                          </div>
                     
                      </div>
                      
                      <hr>
                    
                </div>
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                    
                    
                    
                    
                </div>
            
            
              </div>
            
                
            </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>
       
        
   
    
</body>
</html>

