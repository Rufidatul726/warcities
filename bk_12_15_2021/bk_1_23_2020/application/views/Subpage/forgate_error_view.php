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
     <!--<link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?= base_url()?>asset/css/Login-Form-Clean.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/Login-Form-Dark.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/login.css" rel="stylesheet" type="text/css"/>
    
    
<!--     <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
    
    
   

</head>
<body>
    
    <div class="background">
        <div class="login-clean align-left">
            <br><br>
        <?php $attributes = array('id' => 'myform', 'name' => 'myform', 'onsubmit' => 'return Validate()'); ?>
          <?php echo form_open('Login_Validate_controller/emailValidate', $attributes); ?>
            <h2 class="sr-only">Login Form</h2>
            
            <!--<div class="illustration"><i class="icon ion-ios-navigate"></i></div>-->
            
             <!--<h2 class="text-center heading text-primary">GAME TRADE</h2>-->
             
             
             
             
             
             <h3 class="text-center">
             
             <img class="img-fluid" src="<?= base_url()?>asset/image/icone/gameIcon-300.png" alt=""/>
             </h3>
             <h6 class="text-center text-danger">
                 Sorry Your email address is not found in Our database Please try again
             </h6>
             <br>
             <div class="form-group">
                 <input class="form-control" id="email"type="email" name="email" placeholder="Email" onblur="return vEmail();"><span id="emailError"></span>
             
             </div>
             <h5 class="text-center">Enter your email address </h5>
             
<!--             <div class="form-group"><input class="form-control" id="password"type="password" name="password" placeholder="Password">
             </div>-->
             <br>
            <div class="form-group"><button class="btn btn-danger btn-block" type="submit">Submit</button></div>
            
       <?php echo form_close(); ?>       

       </div>
       </div>
        
   
    
</body>

<script type="text/javascript">
            function Validate()
            {
               
             
                
                var tEmail = document.getElementById('email').value;
                  
                 
                  
//                var jname = document.getElementById('vName').value;
//                var jnumber = document.getElementById('pTag').value; 
//               var cname = document.getElementById('cName').value;
//               var ctag = document.getElementById('cTag').value;
//               
//               
//              
//                var sort = document.getElementById('a-option').checked;
//                var long = document.getElementById('b-option').checked;
               
           
                if (tEmail === "" ) 
                {
                    return false;
                }




            }


        </script>
        
        
        <script type='text/javascript'>

            (function ()
            {
                if (window.localStorage)
                {
                    if (!localStorage.getItem('firstLoad'))
                    {
                        localStorage[ 'firstLoad' ] = true;
                        window.location.reload();
                    }

                    else
                        localStorage.removeItem('firstLoad');
                }
            })();


    </script>

 <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
</html>

