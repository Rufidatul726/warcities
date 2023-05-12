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

  
        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>





    </head>


    <body>
        <div class="center-container mlbbbackground">


          

            <div class="main">
                 <br> <br>
                <h1 class="w3layouts_head">MOBILE LEGENDS BANG BANG REGISTRATION FORM</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('reguser/validation/Mlbb_Validation_controller/validateMlbbReg', $attributes); ?>



<!--                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Name </label>
                            <input type="text" name="playerName" placeholder="Full Name " id="playerName" required="" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>

                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Email </label>
                            <input type="text" name="email" id="email" placeholder="Login Email " required="" >
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
                            <label>Mobile Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
                        </span>
                    </div>-->


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Team Name </label>
                            <input type="text" name="teamName" placeholder="Team Name " id="teamName" required="" onblur="return teamname();"><span  class="text-center"id="teamNameError"></span>

                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Leader Id Name </label>
                            <input type="text" name="vName" placeholder=" MLBB Game Profile  Name " id="vName" required="" onblur="return vname();">
                            <span  class="text-center" id="vNameError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Leader Tag Id </label>
                            <input type="text" name="pTag" placeholder=" MLBB Game Profile Id Number" id="pTag" required="" onblur="return ptag();">
                            <span class="text-center" id="pTagError"></span>
                        </span>
                    </div>

                    
                     
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Player 2 Tag Id </label>
                            <input type="text" name="ptwoName" placeholder=" MLBB Id" id="ptwoName" required="" onblur="return ptwoname();">
                            <span  class="text-center" id="ptwoError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Player 3 Tag  Id  </label>
                            <input type="text" name="pthreeName" placeholder=" MLBB Id " id="pthreeName" required="" onblur="return pthree();">
                            <span  class="text-center" id="pthreeNameError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Player 4 Tag Id   </label>
                            <input type="text" name="pfourName" placeholder=" MLBB Id " id="pfourName" required="" onblur="return pfour();">
                            <span  class="text-center" id="pfourNameError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Player 5 Tag Id  </label>
                            <input type="text" name="pfiveName" placeholder=" MLBB Id" id="pfiveName" required="" onblur="return pfive();">
                            <span  class="text-center" id="pfiveNameError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Substitute Tag Id  </label>
                            <input type="text" name="subtituteName" placeholder=" MLBB Id" id="subtituteName" required="" onblur="return substitute();">
                            <span  class="text-center" id="subtituteNameError"></span>
                        </span>
                    </div>
                    
                    
                    
                    
                  


                    
                   
                    
                    


                    
                    
                    
                    
                    <div class="text-center">
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <input id="myBtn"type="submit" value="Submit">
                        </div>
                    </div>
                    </div>
                    
                     <?php $name = $this->session->userdata('name');?> 
                     <?php $email = $this->session->userdata('email');?> 
                     <?php $mobile = $this->session->userdata('mobile');?> 
                     <?php $useid = $this->session->userdata('id');?> 
                  
                    
                    
                    <?php $newtablename = $TableName; ?>
                    
                    <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                    <input class="inputBox" type="hidden" name="playerName" value="<?php echo $name; ?>" >
                    <input class="inputBox" type="hidden" name="email" value="<?php echo $email; ?>" >
                    <input class="inputBox" type="hidden" name="mobile" value="<?php echo $mobile; ?>" >
                    <input class="inputBox" type="hidden" name="subTournameID" value="<?php echo $sub_t_ID; ?>" >
                     <input class="inputBox" type="hidden" name="useridreg" value="<?php echo $useid; ?>">

                   

                    <?php echo form_close(); ?>         






                </div>


  <div class="container"> 

                    <div class="row">

                        <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3 ">

                        </div>

                        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                            <a href="#">
                                <div class="smallbox ">


                                    <h5 class="text-center smalltextbox">Total Register</h5>
                                    <p class="text-center smalltextbox"><?php echo $totalList; ?> </p>

                                </div>
                            </a>


                        </div>
                        
                        

                        <?php if ((empty($details))): ?>

                        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 ">


                                <a href="#">
                                    <div class="smallbox ">


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


                                <a href="<?php echo base_url() ?>Call_controller/download/<?php echo $fileName ?>">
                                    <div class="smallbox ">


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


                            <a href="<?php echo base_url() ?>Call_controller/download/<?php echo $fileName ?>" target="_blank">
                                    <div class="smallbox ">


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
        
    <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
        <script type="text/javascript">
            function Validate()
            {

            
                 var btn = document.getElementById('myBtn');
                //var name = document.getElementById('playerName').value;

                //var tEmail = document.getElementById('email').value;
                //var mobile = document.getElementById('mobile').value;


                var jname = document.getElementById('vName').value;
                var jnumber = document.getElementById('pTag').value;
        
               // var ctag = document.getElementById('password').value;
                var team = document.getElementById('teamName').value;
                
                var playertwo = document.getElementById('ptwoName').value;
                
                var playerthree = document.getElementById('pthreeName').value;
                
                var playerfour = document.getElementById('pfourName').value;
                
                var playerfive = document.getElementById('pfiveName').value;
                
                var playersubti = document.getElementById('subtituteName').value;
                

               

             
                
                
                 
           
              // var cname =  checkpassword(); 
                
               var mname =  vname();
         
                
               // var dname =  isMObileNumber();
                var ename =  ptag();
               //var aname =  pname();
              //var exitemail = emaiError();
              var teamFunction = teamname();
              var playertwoFunction = ptwoname();
              var playerthreeFunction = pthree();
              var playerfourFunction = pfour();
            
        var playerfiveFunction = pfive();
         var substituteFunction = substitute();    
            
            

                if ( playerfive === "" || playersubti === "" || jname === "" || jnumber === "" ||  team === "" || playertwo === "" || playerthree === "" || playerfour === "" || mname === false  || ename === false   || teamFunction === false || playertwoFunction === false || playerthreeFunction === false || playerfourFunction === false || playerfiveFunction === false || substituteFunction === false)
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

