
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
        <div class="center-container pubgbackground">

                 <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['pubgid']; ?>
                      <?php $id = $row['id']; ?>
                     
                    
                     <?php endforeach; ?>  
          

            <div class="main">
                 <br> <br>
                <h1 class="w3layouts_head">PUBG Team Registration Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                     <?php echo form_open_multipart('reguser/validation/Pubg_Validation_controller/validatePubgTeamEdit', $attributes); ?>



                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Pubg Id Name </label>
                            <input type="text" name="ptwoName" placeholder="Full Name " id="ptwoName" required="" value="<?php echo $name ; ?>" onblur="return ptwoname();"><span  class="text-center"id="ptwoError"></span>

                        </span>
                    </div>
                   
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
                var name = document.getElementById('ptwoName').value;

              
             
                
               var mname =  ptwoname();
         
            
                if (name === ""  || mname === false )
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














