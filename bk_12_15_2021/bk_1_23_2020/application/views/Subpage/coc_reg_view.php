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
        <div class="center-container cocbackground">


          

            <div class="main">
                 <br> <br>
                <h1 class="w3layouts_head">Clash of Clans Registration Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('Tournament_Validation_controller/validateCocReg', $attributes); ?>



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
                            <label>Mobil Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> COC Village Name </label>
                            <input type="text" name="vName" placeholder=" COC Village Name " id="vName" required="" onblur="return vname();">
                            <span  class="text-center" id="vNameError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Personal Tag </label>
                            <input type="text" name="pTag" placeholder=" Personal Tag" id="pTag" required="" onblur="return ptag();">
                            <span class="text-center" id="pTagError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Clan Name </label>
                            <input type="text" name="cName" placeholder=" Clan Name " id="cName" required="" onblur="return claneName();">
                            <span  class="text-center" id="cNameError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Clan Tag </label>
                            <input type="text" name="cTag" placeholder=" Clan Tag" id="cTag" required="" onblur="return clanTag();">
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>



                    <div class="content-w3ls">
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
                    </div>
                    
                    <div class="text-center">
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <input type="submit" id="myBtn"value="Submit">
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


                                <a href="<?php echo base_url() ?>Call_controller/download/<?php echo $fileName ?>">
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
                var cname = document.getElementById('cName').value;
                var ctag = document.getElementById('cTag').value;
                var password = document.getElementById('password').value;



                var sort = document.getElementById('a-option').checked;
                var long = document.getElementById('b-option').checked;
                
                
                 var aname =  pname();
                 var bname =  emaiError();
                  
                  var mname =  vname();
                var dname =  isMObileNumber();
                var ename =  ptag();
               var clname =  claneName();
             var clanetag =  clanTag();
             var pass =  checkpassword();
                
           
            
            

                if ((name === "" || jname === "" || jnumber === "" || mobile === "" || tEmail === "" || cname === "" || ctag === "" || password === "" || aname === false || bname === false || mname === false || dname === false || ename === false|| clname === false || clanetag === false || pass === false) || (sort == false && long == false))
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

