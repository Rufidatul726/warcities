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
        
        
   


    <!-- Page Content -->
   
  
        <br>
      
            
      
        <br>
        <hr> 
        <div style="background: white;">
            
            <div class="row">
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1 ">
                    
                    
                    
                    
                </div>
                
                <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 detailBodyBOxLeft">
                    <h2 class="heading text-center"> TOP GAMES</h2>
                    <hr>
                   
                   
                    <?php foreach ($header_content as $row): ?>
                        <?php $gameName = $row['gamename']; ?>
                        <?php $id = $row['id']; ?>


                       
                           
                                <a class="text-center  " role="presentation" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/loadSingelGameAll/<?php echo $id ?>">

                                    <h6 class="bodyBoxLitem">
                            <?php echo $gameName; ?>
                                    
                                    </h6>   

                        </a>

                      

                  

                <?php endforeach; ?>
                    <hr>
                       
                        
                  
                   
                 
                    
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
                      
                       <div class="text-center searchclass">
                              
                              
                               <?php $attributes = array('class' => 'text-center searchclass', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                         <?php echo form_open_multipart('reguser/Reguser_Load_controller/searchLoad', $attributes); ?>
                           <div class="searchclass">
                               <input class="text-center"type="text" placeholder='search your desire item from <?php echo $boday_all_count; ?> posts' name="search" id="kye">
                               <span id="searchError"></span>
                           </div>
                           <button class="btn btn-primary hvr-sweep-to-right"type="submit"> search <i class="fa fa-search"></i></button>
                              
                              <?php echo form_close(); ?>   
                              
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
                                       <h6> 
                                          <img class="img-thumbnail" style="height: 180px;"src=" <?php  echo $picLocat; ?>" alt="<?php  echo $newGamename; ?>"/>
                                      
                                      </h6>


                                       
                                   </div>
                                   <hr>
                                   <div class="text-left">
                                       
<!--                                       <heading class="text-uppercase"> Game Name : <?php //echo $newGamename; ?>
                                       </heading>-->
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
                      
                      
                    
                      <hr>
                    
                    
                </div>
                
                <div class="col-md-1 col-sm-1 col-xs-1 col-lg-1">
                    
                    
                    
                    
                </div>
            
            
              </div>
            
                
            </div>
            
            
            
        </div>
        
           
        
      
        

    <br>
</body>

<script type="text/javascript">
            function Validate()
            {
                 var search = document.getElementById('kye').value;
                
                
    if (search === "")
    {

        document.getElementById('searchError').style.color = "red";
        document.getElementById('searchError').innerHTML = 'please type someting to search';
        return false;
    }
    else
        
    return true;
            }
            
</script>          
            

</html>