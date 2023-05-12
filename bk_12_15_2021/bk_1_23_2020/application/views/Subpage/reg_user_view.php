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
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />

        <link href="<?= base_url() ?>asset/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
<!--        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
      <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    </head>


    <body>
        <br> <br> <br>
        <div class="center-container reguserbackground">

           
            <div class="main">
                <h1 class="w3layouts_head">Registration Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('Tournament_Validation_controller/validateUserReg', $attributes); ?>



                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Name </label>
                            <input type="text" name="playerName" placeholder=" Name " id="playerName" required="" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>

                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Email </label>
                            <input type="text" name="email" id="email" placeholder=" Email" required="">
                            <span class="text-center"id="emailError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Password </label>
                            <input type="password" name="password" id="password" placeholder="password" required="" onblur="return checkpassword();">
                            <span class="text-center"id="passError"></span>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Retype Password </label>
                            <input type="password" name="repassword" id="repassword" placeholder=" repassword" required="" onblur="return checkrepassword();">
                            <span class="text-center"id="repasswordError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Mobil Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
                        </span>
                    </div>
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                           <input id="myBtn"type="submit" value="Submit">
                        </div>
                    </div>
                    <input class="inputBox" type="hidden" name="table" value="reguser" >
                    <?php echo form_close(); ?>         
                </div>
                <br>
            </div>
        </div>
        <!-- //footer -->
        <hr>
        
        
         <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
         
         <script>
    $(document).ready(function (){
        
       $('#email').change(function (){
           
           var rawname = $('#email').val();
           if(rawname !== '')
           {

               $.ajax({
                  url:"<?= base_url();?>Ajax_controller/emailCheck",
                  method : "POST",
                  data : {email : rawname},
                  success : function(data){
                      $('#emailError').html(data); 
                  }
               });
           }
       });
    });
    
    </script>
         
         
         
        
        <script type="text/javascript">
            function Validate()
            {

                var name = document.getElementById('playerName').value;
                var btn = document.getElementById('myBtn');
                var tEmail = document.getElementById('email').value;
                var mobile = document.getElementById('mobile').value;
                var passw = document.getElementById('password').value;

                var aname =  pname();
                var bname =  emaiError();
                
                var dname =  isMObileNumber();
                var pass =  checkpassword();
                var preass =  checkrepassword();
               
                
                if (name === "" || mobile === "" || tEmail === "" || passw === "" || aname === false || bname === false || dname === false || pass === false || preass === false)
                {
                    return false;
                }
              
               else
                {
                    document.getElementById("myBtn").disabled = true;
                    btn.value = 'Posting...'
                    return true;
                }


            }


        </script>

       

    </body>


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

</html>

