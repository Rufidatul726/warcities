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
    
    <link href="<?= base_url()?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
    
    
    
  
    
   

</head>
<body>
    
    <div class="container">
        <div class="row">
            
            
            <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/tournametListDetails">
            <div class="listbox text-center">


                <h1 style="line-height: 50px; padding: 10px 10px; font-size: 15px;"> TOURNAMENT LIST </h1>

            </div>
            </a>
            
            
            <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/regTournametListDetails">
            <div class="listbox text-center">


                <h1 style="line-height: 50px; padding: 10px 10px; font-size: 15px;">MY REGISTERED TOURNAMENT LIST </h1>

            </div>
            </a>
            
            
            <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/regTournametListMessageDetails">
            <div class="listbox text-center">


                <h1 style="line-height: 50px; padding: 10px 10px; font-size: 15px;">MESSAGE </h1>

            </div>
            </a>
            
        </div>
    </div>
               
                   
              
       
        
   
    
</body>
</html>

