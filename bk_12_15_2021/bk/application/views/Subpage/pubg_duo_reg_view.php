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
        <div class="center-container pubgbackground">


          

            <div class="main">
                 <br> <br>
                <h1 class="w3layouts_head">PUBG DUO REGISTRATION FORM</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('Pubg_Validation_controller/validatePubgDuoReg', $attributes); ?>



                    <div class="w3_agileits_main_grid w3l_main_grid">
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
                            <label>Mobil Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Id Name </label>
                            <input type="text" name="vName" placeholder=" Pubg Id Name " id="vName" required="" onblur="return vname();">
                            <span  class="text-center" id="vNameError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Tag Id Number </label>
                            <input type="text" name="pTag" placeholder=" Pubg Id Number" id="pTag" required="" onblur="return ptag();">
                            <span class="text-center" id="pTagError"></span>
                        </span>
                    </div>

                    
                     <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Team Name </label>
                            <input type="text" name="teamName" placeholder="Team Name " id="teamName" required="" onblur="return teamname();"><span  class="text-center"id="teamNameError"></span>

                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Player 2 Pubg Id Name </label>
                            <input type="text" name="ptwoName" placeholder=" Pubg Id Name " id="ptwoName" required="" onblur="return ptwoname();">
                            <span  class="text-center" id="ptwoError"></span>
                        </span>
                    </div>
                    
                    
                    
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Platform </label>
                            
                            <b style="color: white;">Classic</b> -->
                             <input type="hidden" name="cName" placeholder=" Clan Name " value="CLASSIC" id="cName"  >
                            <span  class="text-center" id="cNameError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Map </label>
                            <b style="color: white;">Erangel</b> -->
                            <input type="hidden" name="cTag" id="map"  value="ERANGEL">
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>
                    
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Team </label>
                            <b style="color: white;">Solo</b> -->
                            <input type="hidden" name="team"  id="team" value="DUO" value="ERANGEL">
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Mode </label>
                            <b style="color: white;">TPP</b> -->
                            <input type="hidden" name="mode"  id="mode" value="TPP" value="ERANGEL">
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>


<!--                    <div class="content-w3ls">
                        <div class="form-w3ls">
                            <div class="content-wthree2">
                                <div class="grid-w3layouts1">
                                    <div class="w3-agile1">
                                        <label>Please Choose Your Clan Position</label>
                                        <ul>
                                            <li>
                                                <input type="radio" id="a-option" value="LEADER" name="selector1">
                                                <label for="a-option"> LEADER </label>
                                                <div class="check"></div>
                                            </li>
                                            <li>
                                                <input type="radio" id="b-option"  value="COLEADER" name="selector1">
                                                <label for="b-option">CO-LEADER</label>
                                                <div class="check"></div>


                                            </li>
                                        </ul>
                                    </div>	
                                </div>

                            </div>
                        </div>

                        <div class="clear"></div>
                    </div>-->
                    
                    
                    
                    
                    
                    <div class="text-center">
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <input id="myBtn"type="submit" value="Submit">
                        </div>
                    </div>
                    </div>
                    
                    <?php $newtablename = $TableName; ?>

                    <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                    <input class="inputBox" type="hidden" name="subTournameID" value="<?php echo $sub_t_ID; ?>" >

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
        
    <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
        <script type="text/javascript">
            function Validate()
            {

            
                 var btn = document.getElementById('myBtn');
                var name = document.getElementById('playerName').value;

                var tEmail = document.getElementById('email').value;
                var mobile = document.getElementById('mobile').value;


                var jname = document.getElementById('vName').value;
                var jnumber = document.getElementById('pTag').value;
        
                var ctag = document.getElementById('password').value;
                var team = document.getElementById('teamName').value;
                var playertwo = document.getElementById('ptwoName').value;

               

             
                
                
                 
           
               var cname =  checkpassword(); 
                
               var mname =  vname();
         
                
                var dname =  isMObileNumber();
                var ename =  ptag();
               var aname =  pname();
              var exitemail = emaiError();
              var teamFunction = teamname();
              var playertwoFunction = ptwoname();
           
            
            

                if (name === "" || jname === "" || jnumber === "" || mobile === "" || tEmail === "" || cname === "" || ctag === "" || team === "" || playertwo === ""|| aname === false  || mname === false || dname === false || ename === false || cname === false || exitemail === false || teamFunction === false || playertwoFunction === false)
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

