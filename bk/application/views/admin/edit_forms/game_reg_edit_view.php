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
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />



        <link href="<?= base_url() ?>asset/css/style.css" rel="stylesheet" type="text/css"/>

        <link href="<?= base_url() ?>asset/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>

        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>







    </head>


    <body>
        <div class="center-container gamebackground">

            <?php $name = $gamename; ?>
            <?php $newname = str_replace("%20"," ",$name); ?>
            
             <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $email = $row['email']; ?>
                      <?php $mobile = $row['mobile']; ?>
                      <?php $tagid = $row['tagid']; ?>
                      
                    
                     <?php endforeach; ?> 
            
            <div class="main">
                <h1 class="w3layouts_head"><?php echo $newname ;?> Registration Edit Form</h1>
            
                <div class="w3layouts_main_grid">
                    
                   <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                  <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateAnyGameRegEdite', $attributes); ?>
                        
                        
                        
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Name </label>
                                <input type="text" name="playerName" value="<?php echo $name ;?>" placeholder=" Name " id="playerName" required="" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>
                                
                            </span>
                        </div>
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Email </label>
                                <input type="text" name="email" id="email" value="<?php echo $email ;?>" placeholder=" Email" required="" onblur="return vEmail();">
                                <span class="text-center"id="emailError"></span>
                            </span>
                        </div>

                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Mobil Number </label>
                                <input type="text" name="mobile" id="mobile" value="<?php echo $mobile ;?>" placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                                <span class="text-center"id="mobileError"></span>
                            </span>
                        </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Game Tag Id: </label>
                            <input type="text" name="gameTagid" value="<?php echo $tagid ;?>" placeholder=" Game Tag Id " id="gameTagid" required="" onblur="return gameTagId();"><span  class="text-center"id="gameTagidError"></span>

                        </span>
                    </div>
                      



                       
                        <div class="w3_main_grid">
                            <div class="w3_main_grid_right">
                                <input type="submit" id="myBtn"value="Submit">
                            </div>
                        </div>
                    
                    <?php $newtablename = $tablename; ?>
                      
                      <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                      <input class="inputBox" type="hidden" name="id" value="<?php echo $id; ?>" >
                    
                     <?php echo form_close(); ?>         






                </div>








            </div>



            




        </div>
        <!-- //footer -->
        
        <script type="text/javascript">
            function Validate()
            {
               
                var name = document.getElementById('playerName').value;
                   var btn = document.getElementById('myBtn');
                var tEmail = document.getElementById('email').value;
                  var mobile = document.getElementById('mobile').value;
                  var tagid = document.getElementById('gameTagid').value;
                 
                  
                var pnamefn = pname();
                var emailfn = vEmail();
                var mobilefn = isMObileNumber();
                var tagfn = gameTagId();
           



               
           
                if (name === "" ||  mobile === "" || tEmail === "" || pnamefn===false || emailfn===false || mobilefn===false || tagfn===false) 
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
        
        <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
        
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

