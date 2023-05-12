<?php defined('BASEPATH') OR exit('No direct script access allowed');
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
    <!--<link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?= base_url()?>asset/css/full-slider.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/mainTemplateStyle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
    
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   

</head>
<body>
    <div class="container-fluid">
        
        
   
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url()?>asset/image/Background_image/slider/1.jpg" alt="First slide">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url()?>asset/image/Background_image/slider/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url()?>asset/image/Background_image/slider/3.jpg" alt="First slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Page Content -->
   
  
        <br>
      
            
      
        <br>
                
        <div style="background: white;">
            
            <div class="row">
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1 ">
                    
                    
                    
                    
                </div>
                
                <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 bodyBOxLeft">
                    <h2 class="heading text-center"> TOP GAMES</h2>
                    <hr>
                   
                    <?php $i = 0; ?>
                    <?php foreach ($header_content as $row): ?>
                        <?php $gameName = $row['gamename']; ?>
                        <?php $id = $row['id']; ?>


                        <?php if ($i < 5): ?>
                           
                                <a class="text-center  " role="presentation" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadSingelGameAll/<?php echo $id ?>">

                                    <h6 class="bodyBoxLitem">
                            <?php echo $gameName; ?>
                                    
                                    </h6>   

                        </a>

                        <?php $i++; ?>

                    <?php endif; ?>

                <?php endforeach; ?>
                    <hr>
                       
                        
                  
                   
                    <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadAll" class="btn btn-primary btn-block">SEE ALL</a>
                    
                </div>
                    
                                 
                                 
              
                <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8 bodyBOxRight">
                    
                      <h2 class="heading text-center"> SELLING ITEMS</h2>
                     
                      
                      <div class="row text-center">
                           <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                              
                                   
                                   <?php foreach ($boday_item_content as $row): ?>
                                <?php $gameName = $row['gamename']; ?>
                                <?php $id = $row['id']; ?>
                               
                               
                                 
                        <a class="gameitem hvr-float-shadow" role="presentation" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadSingelItemAll/<?php echo $id ?>">
                                 
                                 <?php echo $gameName; ?>
                            
                                 </a>
                                 <?php endforeach; ?>

                                 
                              
                            </div>
                          
                          
                      </div>
                      <hr>
                    
                      <div class="row">
                          
                          
                           <?php $s = 0; ?>
                           
                        <?php foreach ($trade_cotent as $row): ?>
                                <?php $gameName = $row['gamename']; ?>
                                <?php $showprice = $row['shoprice']; ?>
                                <?php $Heading= $row['heading']; ?>
                                <?php $itemName= $row['itemname']; ?>
                                <?php $picLocat= $row['piclocation']; ?>
                          
                                <?php $tid = $row['id']; ?>
                                 
                       <?php $newGamename = str_replace("%20", " ", $gameName); ?>
                          
                              <?php if ($s < 30): ?> 
                           <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 hvr-float-shadow">        
                                  
                                 
                               <div class="sellbox " >
                                   <div>
                                       
<!--                                       <div class=" text-center fa fa-user fa-3x"> 
                                       </div>-->
                                      <h6 > 
                                          
                                        
                                          <img class="img-thumbnail" style="height: 180px;"src=" <?php  echo $picLocat; ?>" alt="<?php  echo $newGamename; ?>"/>
                                      
                                      </h6>


                                       
                                   </div>
                                   <hr>
                                   <div class="text-left">
                                       
                                     <span class="text-uppercase">
                                        Game Name :   <?php  echo $newGamename; ?>
                                       </span>
                                      
                                       <hr>
                                       <span class="">
                                         Sell Type :  <?php echo $itemName; ?>
                                       </span>
                                     
                                       <hr>
                                       <span class="">
                                          <?php echo $Heading; ?>
                                       </span>
                                       <hr>
                                   </div>
                                 
                                   <div class="text-left">
                                       <p>Price :<b> <?php echo $showprice; ?> </b>BDT</p>
                                   </div>
                                   <hr>
                                   
                                   <div class="row" >
                                      
                                       
                                         <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 text-center">
                                          <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/details/<?php echo $tid ;?>" class="btn btn-dark hvr-curl-top-right">Details</a>
                                         </div> 
                                       
                                       
                                         <div class="col-md-4 col-sm-4 col-xs-2 col-lg-4">
                                         
                                         </div>
                                       
                                       
                                       <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 text-center">
                                          <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/buyLoad/<?php  echo $tid; ?>" class="btn btn-primary hvr-buzz">Buy</a>
                                         </div>
                                      
                                       
                                   </div>
                               </div>
                               
                             </div>    

                             <?php $s++; ?>

                    <?php endif; ?>
                          
              <?php endforeach; ?>             
                          
                          
                          
                          
                      </div>
                      
                      
                      <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadAll" class="btn btn-info btn-block">LOAD MORE</a>
                      <hr>
                    
                    
                </div>
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                    
                    
                    
                    
                </div>
            
            
              </div>
            
                
            </div>
            
            
            
        </div>
        
           
        
         
    
    
    
        
        
    
    </div>
    <br>
</body>
</html>