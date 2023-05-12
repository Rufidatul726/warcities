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

<!--        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>






    </head>


    <body>
        <div class="center-container gamebackground">
            <br><br>
            <?php $name = $gamename; ?>
            <?php $newname = str_replace("%20", " ", $name); ?>
            <div class="main">
                <h1 class="w3layouts_head"><?php echo $newname; ?> Registration Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('reguser/validation/Add_Game_Form_Validate_Controller/validateGameReg', $attributes); ?>

                    <?php $name = $this->session->userdata('name');?> 
                     <?php $email = $this->session->userdata('email');?> 
                     <?php $mobile = $this->session->userdata('mobile');?> 

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> GAME TAG ID: </label>
                            <input type="text" name="playerName" placeholder=" Name " id="playerName" required=""  onblur="return pname();"><span  class="text-center"id="playerNameError"></span>

                        </span>
                   

                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                             <input type="submit" id="myBtn"value="Submit">
                        </div>
                    </div>

                    <?php $newtablename = $TableName; ?>

                    <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                    <input class="inputBox" type="hidden" name="gamename" value="<?php echo $newname; ?>" >
                    <input class="inputBox" type="hidden" name="name" value="<?php echo $name; ?>" >
                    <input class="inputBox" type="hidden" name="email" value="<?php echo $email; ?>" >
                    <input class="inputBox" type="hidden" name="mobile" value="<?php echo $mobile; ?>" >
                    <input class="inputBox" type="hidden" name="subTournameID" value="<?php echo $sub_t_ID; ?>" >
                     <input class="inputBox" type="hidden" name="payment" value="UNPAID">

                    <?php echo form_close(); ?>         




                     </div>

                </div>


         <div class="container"> 

                    <div class="row">

                        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3 ">

                        </div>

                        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                            <a href="#">
                                <div class="smallbox ">
                                     <br>

                                    <h5 class="text-center smalltextbox">Total Register</h5>
                                    <p class="text-center smalltextbox"><?php echo $totalList; ?> </p>

                                </div>
                            </a>


                        </div>
                        
                        

                        <?php if ((empty($details))): ?>

                        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                                <a href="#">
                                    <div class="smallbox ">
                                         <br>

                                        <h5 class="text-center smalltextbox">TOURNAMENT</h5>
                                        <p class="text-center smalltextbox">Details</p>

                                    </div>
                                </a>


                            </div>
                        
                        <?php else: ?>
                            
                         
                         <?php foreach ($details as $row): ?>
                            <?php $gameid = $row['gameid']; ?>
                            <?php $id = $row['id']; ?>
                            <?php $fileloca = $row['doculocation']; ?>
                            <?php $fileName = $row['filename']; ?>

                        <?php endforeach; ?> 
                        
                                 <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                                     <a target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/download/<?php echo $fileName ?>">
                                    <div class="smallbox ">
                                         <br>

                                        <h5 class="text-center smalltextbox">TOURNAMENT</h5>
                                        <p class="text-center smalltextbox">Details</p>

                                    </div>
                                </a>


                            </div>
                        
                        
                        
                        

                        <?php endif; ?>

                            <?php if ((empty($fixture))): ?>

                            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                             <a href="#">
                                <div class="smallbox ">
                                    <br>

                                    <h5 class="text-center smalltextbox">TOURNAMENT</h5>
                                    <p class="text-center smalltextbox">Fixture</p>

                                </div>
                            </a>


                        </div>

                         <?php else: ?>

                         <?php foreach ($fixture as $row): ?>
                            <?php $gameid = $row['gameid']; ?>
                            <?php $id = $row['id']; ?>
                            <?php $fileloca = $row['doculocation']; ?>
                            <?php $fileName = $row['filename']; ?>

                        <?php endforeach; ?> 
                        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                            <a target="_blank"href="<?php echo base_url() ?>reguser/Reguser_Load_controller/download/<?php echo $fileName ?>">
                                    <div class="smallbox ">
                                         <br>

                                        <h5 class="text-center smalltextbox">TOURNAMENT</h5>
                                        <p class="text-center smalltextbox">Fixture</p>

                                    </div>
                                </a>


                            </div>

                        
                              <?php endif; ?>

                        <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 ">

                        </div>



                    </div> 



                </div>




            </div>

                    
        </div>
        <!-- //footer -->

        <script type="text/javascript">
            function Validate()
            {

                var name = document.getElementById('playerName').value;

               
               var btn = document.getElementById('myBtn');
                
              
                
                
               var personname =  pname();
         
                
             





                if (name === "" || personname === false )
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

