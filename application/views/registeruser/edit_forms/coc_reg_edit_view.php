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
        <div class="center-container cocbackground">

            <div class="main">
<!--                <h1 class="w3layouts_head">Clash of Clans Registration Form</h1>-->

                <div class="w3layouts_main_grid">
                    
                     <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                  
                      <?php $mobile = $row['mobile']; ?>
                      <?php $vname = $row['vname']; ?>
                      <?php $ptag = $row['ptag']; ?>
                      <?php $clname = $row['cname']; ?>
                      <?php $ctag = $row['ctag']; ?>  
                      <?php $post = $row['cpos']; ?>  
                    
                     <?php endforeach; ?>      
                    
                   <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                  <?php echo form_open_multipart('reguser/validation/Add_Game_Form_Validate_Controller/validateCocEditReg', $attributes); ?>
                        
                        
                        
                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Name </label>
                                <input type="text" name="playerName" value="<?php echo $name;?>" placeholder=" Name " id="playerName" required="" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>
                                
                            </span>
                        </div>
                       

                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label>Mobil Number </label>
                                <input type="text" name="mobile" id="mobile" value="<?php echo $mobile; ?>" placeholder="Phone Number" required=""   onblur="return isMObileNumber();">
                                <span class="text-center"id="mobileError"></span>
                            </span>
                        </div>


                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> COC Village Name </label>
                                <input type="text" name="vName" value="<?php echo $vname; ?>" placeholder=" COC Village Name " id="vName" required="" onblur="return vname();">
                                <span  class="text-center" id="vNameError"></span>
                            </span>
                        </div>

                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Personal Tag </label>
                                <input type="text" name="pTag" value="<?php echo $ptag; ?>" placeholder=" Personal Tag" id="pTag" required="" onblur="return ptag();">
                                <span class="text-center" id="pTagError"></span>
                            </span>
                        </div>

                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Clan Name </label>
                                <input type="text" name="cName" value="<?php echo $clname; ?>" placeholder=" Clan Name " id="cName" required="" onblur="return cname();">
                                <span  class="text-center" id="cNameError"></span>
                            </span>
                        </div>


                        <div class="w3_agileits_main_grid w3l_main_grid">
                            <span class="agileits_grid">
                                <label> Clan Tag </label>
                                <input type="text" name="cTag" value="<?php echo $ctag; ?>" placeholder=" Clan Tag" id="cTag" required="" onblur="return clanTag();">
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
                                                    <input type="radio" id="a-option" value="LEADER" name="selector1"  <?php  if ($post == 'LEADER'): ?>  checked="checked" <?php endif; ?> >
                                                    <label for="a-option"> LEADER </label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="b-option"  value="COLEADER" name="selector1" <?php  if ($post == 'COLEADER'): ?>  checked="checked" <?php endif; ?> >
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
             
                  var mobile = document.getElementById('mobile').value;
                 
                  
                var jname = document.getElementById('vName').value;
                var jnumber = document.getElementById('pTag').value; 
               var cname = document.getElementById('cName').value;
               var ctag = document.getElementById('cTag').value;
               
               
              
                var sort = document.getElementById('a-option').checked;
                var long = document.getElementById('b-option').checked;
               
            
                 var aname =  pname();
               
                  
                  var mname =  vname();
                var dname =  isMObileNumber();
                var ename =  ptag();
               var clname =  claneName();
             var clanetag =  clanTag();
             
                
           
            
            

                if ((name === "" || jname === "" || jnumber === "" || mobile === "" || cname === "" || ctag === "" || aname === false ||  mname === false || dname === false || ename === false|| clname === false || clanetag === false) || (sort == false && long == false))
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
            } else
                localStorage.removeItem('firstLoad');
        }
    })();


</script>
</html>

