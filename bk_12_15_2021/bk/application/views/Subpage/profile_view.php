<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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



        



    </head>
<body>

    <?php foreach ($sub_cotent as $row): ?>
        <?php $fullname = $row['name']; ?>
        <?php $id = $row['id']; ?>
        <?php $pic = $row['image']; ?>
        <?php $mobile = $row['mobile']; ?>

    <?php endforeach; ?> 


    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">

    </div>
    <div class=" col-xs-8 col-sm-8 col-md-8 col-lg-8 fromBody ">

        <?php $attributes = array('id' => 'myform', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('Tournament_Validation_controller/validateprofile', $attributes); ?>


        <div class="text-center">
            <h1>PROFILE</h1>
        </div>
        <hr>
        <br>



        <br>



        <div class="w3layouts_main_grid">
            
             <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Name </label>
                            <input type="text" name="playerName" placeholder=" Name " id="playerName" required="" value="<?php echo $fullname; ?>" onblur="return pname();"><span  class="text-center"id="playerNameError"></span>

                        </span>
            </div>
            
            
         <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Mobil Number </label>
                            <input type="text" name="mobile" id="mobile"placeholder="Phone Number" required="" value="<?php echo $mobile; ?>"   onblur="return isMObileNumber();">
                            <span class="text-center"id="mobileError"></span>
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
                <img id="blah" name="image" src="<?php echo $pic; ?>" alt="your image" width="50%" height="50%" />
                <div class="row" >
                    <div class=" col-xs-1 col-sm-4 col-md-4 col-lg-4 ">

                    </div>

                    <div class=" col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                        <br>
                        <input type='file' id="pic" name="pic" onchange="readURL(this);" />
                    </div>

                    <div class=" col-xs-1 col-sm-5 col-md-5 col-lg-5 ">

                    </div>

                </div>

                <h5 id="picerromsg"></h5>
            </div> 
            
            
                <div class="w3_main_grid text-center">
                        <div class="w3_main_grid_right">
                            <input type="submit" value="Submit" >
                        </div>
                    </div>

                  

                    <input class="inputBox" type="hidden" name="table" value="<?php echo $table; ?>" >

                    <?php echo form_close(); ?>     
            
            
            
            
            
            
        </div>






     


        

        <hr>



        

    </div>
    <br>
   

</body>








<script type="text/javascript">
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#blah').attr('src', e.target.result);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
</script>




<script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            function validation()
            {

                var name = document.getElementById('playerName').value;

               
                var mobile = document.getElementById('mobile').value;

                 var passw = document.getElementById('password').value;

                var aname =  pname();
             
                
                var dname =  isMObileNumber();
                var pass =  checkpassword();
                  var preass =  checkrepassword();
               
                
                if (name === "" || mobile === "" || passw === "" || aname === false ||  dname === false || pass === false || preass === false )
                {
                    return false;
                }
              



            }


        </script>