
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

  
        <!--<script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>





    </head>


    <body>
        <div class="center-container pubgbackground">

                 <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $email = $row['email']; ?>
                      <?php $mobile = $row['mobile']; ?>
                      <?php $pubname  = $row['pubname']; ?>
                      <?php $pnumber = $row['pubnumber']; ?>
                      <?php $platfrom = $row['platfrom']; ?>
                      <?php $map = $row['map']; ?>  
                      <?php $team = $row['team']; ?>  
                      <?php $mode = $row['mode']; ?>  
                    
                     <?php endforeach; ?>  
          

            <div class="main">
                 <br> <br>
                <h1 class="w3layouts_head">PUBG Registration Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                     <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validatePubgEditReg', $attributes); ?>



                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Name </label>
                            <input type="text" name="playerName" placeholder="Full Name " id="playerName" required="" value="<?php echo $name ; ?>" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>

                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Email </label>
                            <input type="text" name="email" id="email" placeholder="Login Email " value="<?php echo $email ; ?>" required="" onblur="return vEmail();">
                            <span class="text-center"id="emailError"></span>
                        </span>
                    </div>
                    
                    
                  

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Mobil Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required="" value="<?php echo $mobile ; ?>"   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Id Name </label>
                            <input type="text" name="vName" placeholder=" Pubg Id Name " id="vName" value="<?php echo $pubname ; ?>" required="" onblur="return vname();">
                            <span  class="text-center" id="vNameError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Id Number </label>
                            <input type="text" name="pTag" placeholder=" Pubg Id Number" id="pTag" value="<?php echo $pnumber ; ?>" required="" onblur="return ptag();">
                            <span class="text-center" id="pTagError"></span>
                        </span>
                    </div>

                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Platform </label>
                            
                            <b style="color: white;">Classic</b> -->
                             <input type="hidden" name="cName" placeholder=" Clan Name " value="<?php echo $platfrom ; ?>" id="cName"  >
                            <span  class="text-center" id="cNameError"></span>
                        </span>
                    </div>


                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Map </label>
                            <b style="color: white;">Erangel</b> -->
                            <input type="hidden" name="cTag" id="map"  value="<?php echo $map ; ?>" > 
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>
                    
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Team </label>
                            <b style="color: white;">Solo</b> -->
                            <input type="hidden" name="team"  id="team" value="<?php echo $team ; ?>" >
                            <span class="text-center" id="cTagError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
<!--                            <label> Mode </label>
                            <b style="color: white;">TPP</b> -->
                            <input type="hidden" name="mode"  id="mode" value="<?php echo $mode ; ?>" >
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
                           <input type="submit" id="myBtn"value="Submit">
                        </div>
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
        
               

               

             
                
                
                 
              var bname =  vEmail();
             
                
               var mname =  vname();
         
                
                var dname =  isMObileNumber();
                var ename =  ptag();
               var aname =  pname();
              
           
            
            

                if (name === "" || jname === "" || jnumber === "" || mobile === "" || tEmail === "" || aname === false || bname === false || mname === false || dname === false || ename === false)
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














