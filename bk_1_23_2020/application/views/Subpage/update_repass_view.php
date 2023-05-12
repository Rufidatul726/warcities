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
          <?php echo form_open('Login_Validate_controller/updatePassValidate', $attributes); ?>
            <h2 class="sr-only">Login Form</h2>
            
            <!--<div class="illustration"><i class="icon ion-ios-navigate"></i></div>-->
            
             <!--<h2 class="text-center heading text-primary">GAME TRADE</h2>-->
             
              <?php $name = $this->session->userdata('name');?> 
                <h2></h2>
             
             
             
             <h3 class="text-center">
             
             <img class="" src="<?= base_url()?>asset/image/icone/gameIcon-300.png" alt=""/>
             </h3>
             <br>
             
             <h6 class="text-center"><?php echo $name ;?> </h6>
             <br>
             
            <div class="w3_agileits_main_grid w3l_main_grid text-center">
                        <span class="agileits_grid">
                            
                            <input type="password" name="password" id="password"  placeholder="password" required="" onblur="return checkpassword();">
                            <div class="text-center"id="passError"></div>
                        </span>
                    </div>
             <br>
                    <div class="w3_agileits_main_grid w3l_main_grid text-center">
                        <span class="agileits_grid">
                           
                            <input type="password" name="repassword" id="repassword" placeholder=" repassword" required="" onblur="return checkrepassword();"><br>
                            <div class="text-center"id="repasswordError"></div>
                        </span>
                    </div>
             <br>
            <div class="form-group"><button class="btn btn-danger btn-block" type="submit">Submit</button></div>
            
       <?php echo form_close(); ?>       

       </div>
       </div>
        
   
    
</body>

<script type="text/javascript">
            function Validate()
            {
               
             
                
               
                 var passw = document.getElementById('password').value; 
                  var pass =  checkpassword();
                  
//                var jname = document.getElementById('vName').value;
//                var jnumber = document.getElementById('pTag').value; 
//               var cname = document.getElementById('cName').value;
//               var ctag = document.getElementById('cTag').value;
//               
//               
//              
//                var sort = document.getElementById('a-option').checked;
//                var long = document.getElementById('b-option').checked;
               
           
                if (passw === "" || pass === false) 
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

