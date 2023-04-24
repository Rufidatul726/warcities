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


<!--<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>


<script src="<?= base_url() ?>asset/js/admin/datepicker/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>asset/js/admin/jquery-ui.js" type="text/javascript"></script>
<script src="<?= base_url() ?>asset/js/admin/datepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>

</head>
<body>
    
     <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['gamename']; ?>
                <?php $id = $row['id']; ?>
    <?php endforeach; ?>
    
    <h1 class="text-center">ITEM EDIT FORM</h1>
    <br>
    <?php $attributes = array('id' => 'demo-form2','class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateEditItemType', $attributes); ?>
      
    <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Game Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="gamename" value="<?php echo $gameName; ?>" required="required" class="form-control col-md-7 col-xs-12" onblur="gameName()">  <span id="nameError"></span>
                        </div>
                          
                      </div>
                     
                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
                      
                      
                      <?php $newtablename = $tablename; ?>
                      
                      <input class="inputBox" type="hidden" name="table" value="<?php echo $newtablename; ?>" >
                      <input class="inputBox" type="hidden" name="id" value="<?php echo $id; ?>" >

                    <?php echo form_close(); ?> 
        
   
    
    

    <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
   



<script type="text/javascript">

    function validation()
    {
     var name =  document.getElementById("name").value;
        
       var nametype = gameName();

        if (name === ''|| nametype === false)
        {


            return false;

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

