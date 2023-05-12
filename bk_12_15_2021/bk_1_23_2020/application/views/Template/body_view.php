<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
    <head>

        <title>WarCities</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Template">
        <meta name="author" content="BrainChild">    
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />
        <link href="<?= base_url() ?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/full-slider.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/mainTemplateStyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>
       



<!--        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>-->
        
      


    </head>
    <body>
        <br>

        
         <?php $tableName= "pubg" ?>
                     <?php $id= "2" ?>
                      <?php $gameName= "PUBG" ?>
        
       
        <!--landing home section-->

        <div class="container-fluid">
            <br><br><br>
            <div class="container">



<!--                <div class="container-fluid" style="background-color: black">
                    <div class="text-center">
                        
                        <img class="imgNewres" src="<?= base_url() ?>asset/image/Background_image/homepage/newMap.png" alt="" usemap="#image-map"/>
                      
                        
                    </div>

                
                </div>-->


<div  id="carouselExampleControls"  class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      
      
      
    <div class="carousel-item active">
      <img class="img-thumbnail" src="<?= base_url() ?>asset/image/Background_image/slider/for_website3.png" alt=""/>
    
    </div>
      
      <?php foreach ($slider as $row): ?>
           <?php $location = $row['location']; ?>
                <?php $id = $row['id']; ?>
      
    <div class="carousel-item">
      <img class="img-thumbnail" src="<?php echo $location; ?>" alt=""/>
    </div>
      
     <?php endforeach; ?>       
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






            </div>

        </div>
        <!--landing home section Ends-->

        <!--Game section-->
        <br><br>
        <div class="container-fluid">



            <div class="row">
                <div class=" col-md-4 col-sm-4 col-sm-4 col-xs-4">    
                    <h2 class="text-center">
                        Tournament by Game
                    </h2>
                </div>  

                <div class=" text-left col-md-4 col-sm-4 col-sm-4 col-xs-4">     







                    <?php $attributes = array('class' => 'text-center serachBox', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('Call_controller/searchLoad', $attributes); ?>

                    <input class=" serachBox text-center "type="text" placeholder='search your desire' name="search" id="kye">
                    <span id="searchError"></span>







                </div> 

                <div class=" text-center hvr-float-shadow col-md-4 col-sm-4 col-sm-4 col-xs-4">

                    <button class="btn btn-danger"type="submit"> search <i class="fa fa-search"></i></button>


                    <?php echo form_close(); ?>   
                </div>    




            </div>
            
            <br>  <br>
            <div class="row">
                
               
                    
              
              
                <?php if ($statusNew === 'ACTIVE'): ?>
               
             
                 <div class=" col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     
                     <div class="imageBox ">
                     <?php $tableName= "pubg" ?>
                     <?php $id= "2" ?>
                      <?php $gameName= "PUBG" ?>
                       <a href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo $id  ;  ?>" class=" hvr-float">
                           <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/001 PUBG.jpg" alt=""/>
                     </a>
                     </div> 
                     
                     
                </div>
                
                
                 
                <?php else: ?>
                 <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     
                     <div class="imageBox ">
                    
                      <?php $gameName= "PUBG" ?>
                       <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName  ;  ?>" class=" hvr-float">
                            <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/001 PUBG.jpg" alt=""/>
                     </a>
                
                     </div>
                 </div>
               
            <?php endif; ?>
               
                 
                <?php if ($mlbbstatusNew === 'ACTIVE'): ?>   
                
                
                 
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                    
                      <div class="imageBox ">
                      <?php $mlbbTableName= "mlbb" ?>
                     <?php $id= "4" ?>
                      <?php $gameName= "MLEGENDS BANG BANG" ?>
                     
                    <a href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo $id  ;  ?>" class=" hvr-float">
                     <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/006 ML.jpg" alt=""/>
                     </a>
                   </div>
              
               </div> 
                
                
                <?php else: ?>
                
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                    
                      <div class="imageBox ">
                   
                      <?php $gameName= "MLEGENDS BANG BANG" ?>
                     
                    <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName  ;  ?>" class=" hvr-float">
                     <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/006 ML.jpg" alt=""/>
                     </a>
                   </div>
              
               </div> 
                
                <?php endif; ?>  
                
                
                 <?php if ($statusNew === 'ACTIVE'): ?>
             
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                      <?php $tableName= "cr" ?>
                     <?php $crid= "3" ?>
                    
                     <div class="imageBox ">  
                      <?php $gameName= "CLASH ROYALE" ?>
                         <a href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo   $crid;  ?>" class=" hvr-float">
                     <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/02 CR.jpg" alt=""/>
                    </a>
                    </div>  
                    
                    
                </div>
                
                
                    <?php else: ?>
                
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     <div class="imageBox ">   
                      <?php $gameName= "CLASH ROYALE" ?>
                         <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName; ?>" class=" hvr-float">
                                   <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/02 CR.jpg" alt=""/>
                             </a>
                         </div>  
                </div>
                  <?php endif; ?>
                
                
                
              
                
                 
              
             
                
                
            </div>
            <br> <br>  
         
          
            <div class="row">
                
                
             
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                   <div class="imageBox ">  
                    <?php $gameName= "FREE FIRE" ?>
                     <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName  ;  ?>" class=" hvr-float">
                    <img class="img-fluid"src="<?= base_url() ?>asset/image/Background_image/game/03 FF.jpg" alt=""/>
                     </a>
                  </div>     
                    
 
                </div>
                
                
                
                    <?php // if ($statusNew === 'ACTIVE'): ?>
             
<!--                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                      <?php // $tableName= "coc" ?>
                     <?php // $cid= "1" ?>
                    
                     <div class="imageBox ">  
                      <?php // $gameName= "CLASH OF CLANS" ?>
                         <a href="<?php // echo base_url() ?>Call_controller/subGameLoad/<?php // echo   $cid;  ?>" class=" hvr-float">
                     <img class="img-fluid" src="<?= base_url() ?>asset/image/Background_image/game/04 CSGO.jpg" alt=""/>
                    </a>
                    </div>  
                    
                    
                </div>
                
                
                    <?php // else: ?>
                
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     <div class="imageBox ">   
                      //<?php $gameName= "CLASH OF CLANS" ?>
                         <a href="<?php // echo base_url() ?>Call_controller/noRegView/<?php // echo $gameName; ?>" class=" hvr-float">
                                  <img class="img-fluid" src="<?= base_url() ?>asset/image/Background_image/game/04 CSGO.jpg" alt=""/>
                             </a>
                         </div>  
                </div>-->
                  <?php // endif; ?>
              
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     <div class="imageBox ">   
                      <?php $gameName= "COUNTER-STRIKE GLOBAL OFFENSIVE " ?>
                       <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName  ;  ?>" class=" hvr-float">
                    <img class="img-fluid" src="<?= base_url() ?>asset/image/Background_image/game/04 CSGO.jpg" alt=""/>
                 </a>
                    </div> 
                    
                </div>
               
                <div class="col-md-4 col-sm-4 col-sm-4 col-xs-6">
                     <div class="imageBox ">   
                      <?php $gameName= "FIFA" ?>
                       <a href="<?php echo base_url() ?>Call_controller/noRegView/<?php echo $gameName  ;  ?>" class=" hvr-float">
                    <img class="img-fluid" src="<?= base_url() ?>asset/image/Background_image/game/05 FIFA.jpg" alt=""/>
                 </a>
                    </div> 
                    
                </div>
              
              
            </div>
            <br>
            <div class="text-center ">
                <a href="<?php echo base_url() ?>Call_controller/browser" style="color: white;"class="hvr-bounce-out text-center btn btn-danger ">Load More</a>
            </div>
        </div>
        <hr>
         
        
        
        
        <!--Game section Ends-->
        
        <br>  <br> 
        <!--content section starts-->
        <div class="container-fluid">
            <div class="container">
            <h1 class="text-center">
                Organize tournaments on the most <br> advanced platform around!
            </h1>
                <br>
                <p class="text-center">
                    A professional-ready and easy solution for organizers to host, manage and share their own gaming competitions.
                    
                </p>
                
                <br>  <br>  
                
                <div class="row">
                    <div class=" text-center col-md-6 col-sm-6 col-sm-6 col-xs-6">
                        <br> 
                        <h2 class="text-left" style="margin-top: 80px;">
                           It’s all about E-sports!
                        </h2>
                        <br>
                        <p class="text-left">
                           Would it be on PC, Console or Mobile, your game is 
                           available on Tournament with specific features, 
                           such as Characters or Maps. Also enjoy our advanced
                           functionalities and statistics with the LOL Tournament 
                           Codes, CSGO Ebot support, Hearthstone Pick&Ban etc.
                        </p>
                        
                    </div>
                    
                    <div class="text-center col-md-6 col-sm-6 col-sm-6 col-xs-6">
                        
                        <img style="height: 350px; width: 100%"class=""src="<?= base_url() ?>asset/image/Background_image/game/new.jpg" alt=""/>
                        
                    </div>
                    
                </div>
                
                
                <br> <br>
                
                <div class="row">
                    <div class=" text-center col-md-6 col-sm-6 col-sm-6 col-xs-6">
                        <img style="height: 350px; width: 100%"class=""src="<?= base_url() ?>asset/image/Background_image/game/content.jpg" alt=""/>
                        
                        
                    </div>
                    
                    <div class="text-center col-md-6 col-sm-6 col-sm-6 col-xs-6">
                        
                        
                        
                        
                        <br> 
                        <h2 class="text-right" style="margin-top: 80px;">
                           State-of-the-art tournament formats
                        </h2>
                        <br>
                        <p class="text-right">
                          Single or double brackets, league, round robin groups, 
                          GSL groups, swiss system… Pick the right tournament
                          format, combine it with our multi-stages management.
                          Up to 4096 participants per tournament.
                        </p>
                        
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        <hr>
        
        <!--content section  Ends-->
        
        
        <!--ending Content  section  starts-->
        
        <div class="container-fluid">
            <div class="endContentBox">
               
                <div class="row">
                   <div class="col-md-8 col-sm-8 col-sm-8 col-xs-8">
                        
                    </div>
                   <div class="col-md-3 col-sm-3 col-sm-3 col-xs-3">
                       <br><br><br>
                       
                       <div style="color: red; padding: 10px 10px;"class="secondContentBox">
                           <br>
                           <h2 class="text-center">
                               All Participant Management
                           </h2>
                           
                           <h6 style="color: white; padding: 10px 10px;" class="text-center">
                               No need for spreadsheets anymore, open your registrations 
                               with custom fields (country, gaming id etc.), all the process 
                               is streamlined on the platform, and all participants data can
                               then be exported in a single click.
                           </h6>
                           
                       </div>
                    </div>
                    
                    <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                        
                    </div> 
                    
                </div>
                
                
                <div class="row">
                   <div class="col-md-8 col-sm-8 col-sm-8 col-xs-8">
                        
                    </div>
                   <div class="col-md-3 col-sm-3 col-sm-3 col-xs-3">
                       <br><br><br>
                       
                       <div style="color: red; padding: 10px 10px;"class="secondContentBox">
                           <br>
                           <h2 class="text-center">
                              Empower your participants
                           </h2>
                           
                           <h6 style="color: white; padding: 10px 10px;" class="text-center">
                               Make your life easier by having your participants
                               report their match results and communicate through 
                               the match lobby from the device of their choosing,
                               thanks to a responsive layout designed for them. 
                           </h6>
                           
                       </div>
                    </div>
                    
                    <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                        
                    </div> 
                    
                </div>
                
                
                
                <div class="row">
                   <div class="col-md-8 col-sm-8 col-sm-8 col-xs-8">
                        
                    </div>
                   <div class="col-md-3 col-sm-3 col-sm-3 col-xs-3">
                       <br><br>
                       
                       <div style="color: red; padding: 10px 10px;"class="text-center ">
                           <br>
                           <h2 class="text-center">
                               Ready to battle <br> Dare to join?
                           </h2>
                     
                           <a  href="<?php echo base_url() ?>Call_controller/login" style="color: white; margin-top: 10px;" class="text-center btn btn-danger"><b>LOG IN</b></a>
                         
                       </div>
                       
                       <br>
                    </div>
                    
                    <div class="col-md-1 col-sm-1 col-sm-1 col-xs-1">
                        
                    </div> 
                    
                </div>
                
                
             
            
            </div>
            
            
        </div>
        
        <!--ending Content  section  ends-->
        
        
        
        
        
    </body>
    
    <script>
        $('.carousel').carousel({
  interval: 3500
});
    </script>
    
    
    
    
</html>