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


<!--<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>


<script src="<?= base_url() ?>asset/js/admin/datepicker/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>asset/js/admin/jquery-ui.js" type="text/javascript"></script>
<script src="<?= base_url() ?>asset/js/admin/datepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>

</head>
<body>
    
        <?php foreach ($sub_cotent as $row): ?>
                     <?php $message= $row['comment']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $subId = $row['subtorunamentId']; ?>
                     
                      
                    
                     <?php endforeach; ?> 
    
    
    <h1 class="text-center">MESSAGE ADD FORM</h1>
    <br>
    <?php $attributes = array('id' => 'demo-form2','class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateEditAddMessage', $attributes); ?>
      
  

                      
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Message <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea rows="12" cols="50" type="text" id="message" name="message" required="required" class="form-control col-md-7 col-xs-12" onblur="messageName()"><?php echo $message; ?> </textarea>  <span id="messageError"></span>
                        </div>
                          
                      </div>
                           <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                        <input class="inputBox" type="hidden" name="subTournameID" value="<?php echo $id; ?>" >
                     
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                            <input class="btn btn-success" type="submit" id="myBtn"value="UPDATE">
                        </div>
                      </div>

                    <?php echo form_close(); ?> 
        
   
    
    

    <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
   



<script type="text/javascript">

    function validation()
    {
     var name =  document.getElementById("message").value;
          var btn = document.getElementById('myBtn');
       var nametype = messageName();

        if (name === ''|| nametype === false)
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
    
</body>
</html>

