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
        <link href="<?= base_url() ?>ckeditor/samples/css/samples.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css" rel="stylesheet" type="text/css"/>
        
        

        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
      <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="<?= base_url() ?>ckeditor/ckeditor.js" type="text/javascript"></script>

      

    </head>


    <body>
        <div class="center-container tradebackground">

            <?php foreach ($sub_cotent as $row): ?>
                <?php $Name = $row['gamename']; ?>
                 <?php $gameName = str_replace("%20"," ",$Name); ?>
                        
                        
                                <?php $loginID = $row['username']; ?>
                                <?php $password = $row['password']; ?>
                                <?php $email = $row['email']; ?>
                                <?php $epassword = $row['epassword']; ?>
                                
                                <?php $showprice = $row['shoprice']; ?>
                                <?php $Heading= $row['heading']; ?>
                                <?php $itemName= $row['itemname']; ?>
                               
                                <?php $getprice= $row['getprice']; ?>
                                
                                <?php $description= $row['description']; ?>
                                
                          
                                <?php $id = $row['id']; ?> 
            
            
              <?php endforeach; ?>      
            
            
            
           
            <div class="main">
                <h1 class="w3layouts_head">Edit Trade Form</h1>

                <div class="w3layouts_main_grid">

                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform', 'onsubmit' => 'return Validate();'); ?>
                    <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateTredEdit', $attributes); ?>


                    <h3 class="text-center">Game Account Info (send to buyer after trade)</h3>
                    <br>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Login ID </label>
                            <input type="text" name="loginId" placeholder="game account email or username" id="loginId" required="" value=" <?php echo $loginID ; ?>" onblur="return log();"><span  class="text-center"id="loginIdError"></span>

                        </span>
                    </div>
                    
                    
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Password </label>
                            <input type="password" name="password" id="password" placeholder="password" required="" value="<?php echo $password ; ?>" onblur="return checkpassword();">
                            <span class="text-center"id="passError"></span>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Retype Password </label>
                            <input type="password" name="repassword" id="repassword" placeholder=" repassword" required="" value="<?php echo $password ; ?>" onblur="return checkrepassword();">
                            <span class="text-center"id="repasswordError"></span>
                        </span>
                    </div>
                    
                    
                    
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Email </label>
                            <input type="text" name="email" id="email" placeholder=" game account email" required="" value="<?php echo $email ; ?>" onblur="return vEmail();">
                            <span class="text-center"id="emailError"></span>
                        </span>
                    </div>
                    
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Password </label>
                            <input type="password" name="epassword" id="epassword" placeholder="password" required="" value="<?php echo $epassword ; ?>" onblur="return checkepassword();">
                            <span class="text-center"id="epassError"></span>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label> Retype Password </label>
                            <input type="password" name="reepassword" id="reepassword" placeholder=" repassword" required="" value="<?php echo $epassword ; ?>" onblur="return checkreepassword();">
                            <span class="text-center"id="reepasswordError"></span>
                        </span>
                    </div>

                    <hr>
                    
                      <h3 class="text-center">Price Section</h3>
                      <br>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>show price </label>
                            <input type="text" name="sprice" id="sprice"placeholder="BDT" required="" oninput= "getprice.value =parseInt(sprice.value)-(parseInt(sprice.value)*5)/100 "  value="<?php echo $showprice ; ?>" onblur="return showPrice();">
                            <span class="text-center"id="priceError"></span>
                        </span>
                    </div>

                   <div class="w3_agileits_main_grid w3l_main_grid">
                       <span class="agileits_grid">
                            <label>get price in Taka</label>
                            <output id="o" name="getprice"  for="sprice" style="color: white;"><?php echo $getprice ; ?>  </output>
<!--                            <input type="text" name="gprice" id="gprice"placeholder="BDT" required=""   >
                            <span class="text-center"id="mobileError"></span>-->
                        </span>
                    </div>

                    <hr>

                      <h3 class="text-center">Game Account Description</h3>
                      <?php $userName = $this->session->userdata('name');?>
                  <?php $userId = $this->session->userdata('id');?>
                      
                       
                      
                      
                      
                      
                      <br>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Heading </label>
                            <input type="text" name="heding" id="heding"placeholder="symple game details" required=""  value="<?php echo $Heading ; ?>" onblur="return heading();">
                            <span class="text-center"id="headingError"></span>
                        </span>
                    </div>
                      
                      
                      
                      
                      
                      
                      <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Screen Shots </label>
                           
                           <input type="file" name="image[]"multiple="multiple"  multiple id="gallery-photo-add" onblur="return screenShotnew();">
                            <div class="gallery" id="gallery">
                              
                            </div>
                           
                           
                            <span class="text-center"id="screeError"></span>
                        </span>
                    </div> 
                      <div id="imgshow">
                              <?php foreach ($pic_cotent as $row): ?>
                                  <?php $pid = $row['id']; ?>
                                  <?php $ptid = $row['tradeid']; ?>
                                  <?php $pname = $row['picname']; ?>
                                  <?php $plocation = $row['piclocation']; ?>
                                    
                               <img src="<?php echo $plocation; ?>" alt=""/>
                                  <?php endforeach; ?>                   
                           </div>
                      
                      
                      
                  <h3 class="text-center">Detail Description </h3>
                              
                      
                  <?php  $tablename = "trade"; ?>
                       
                    <input class="inputBox" type="hidden" name="table" value="<?php echo $tablename; ?>" >
                    <input class="inputBox" type="hidden" name="tradeid" value="<?php echo $id; ?>" >
           
                    <input class="inputBox" type="hidden" name="price" value="getprice.value" >

                </div>


                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-1 ">
                        
                    </div>
                   
                    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-10">
                        
                         
				 <span class="agileits_grid">
                            
                            <textarea type="text" name="content" class="ckeditor" id="editor"placeholder="" required=""   onblur="return textedti();"><?php echo $description ; ?></textarea>
                            <span class="text-center"id="descripError"></span>
                        </span>
			
                    </div>
                    
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-1 ">
                        
                    </div>
                </div>
                
                                    
                
               

                
                
                 <div class="w3_main_grid">
                        <div class=" text-center w3_main_grid_right">
                            <input type="submit" value="Submit" >
                        </div>
                    </div>
                       
             <?php echo form_close(); ?>     

            </div>
            
            
            
                       
            
            


        </div>
        
       
                          
        
        
        
                       
        
        
        
        <!-- //footer -->
        <hr>
        
        
         <script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
         
         
        
         
         
         
         
         
         
        <script type="text/javascript">
            function Validate()
            {

                var logid = document.getElementById('loginId').value;
                var pass = document.getElementById('password').value;
                var epass = document.getElementById('epassword').value;
                var tEmail = document.getElementById('email').value;
                var showpric = document.getElementById('sprice').value;
                var headline = document.getElementById('heding').value;
                var details = document.getElementById('editor').value;
                
                
               

                var logdetail =  log();
                var cpass =  checkpassword();
                var epasscheck =  checkepassword();
                var emailcheck =  vEmail();
                 var sprice =  showPrice();
                 var head =  heading();
                 var descrip =  textedti();
                
                
                
               
               
                
                if (logid === "" || pass === "" || tEmail === "" || epass === "" || showpric === "" || headline === "" || details === "" || scrn === "" || logdetail === false || cpass === false || emailcheck === false || epasscheck === false || sprice === false || head === false || descrip === false || shots === false)
                {
                    return false;
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
    
   
    
     <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
    
    

     
      
 <script type="text/javascript">
  
 $(function() {
    // Multiple images preview in browser
    
    
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, '#gallery');
    });
});
  
</script>
     


</html>

