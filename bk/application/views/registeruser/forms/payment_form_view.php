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
    
    <h1 class="text-center">TRANSACTION ADD FORM</h1>
    <br>
    <?php $attributes = array('id' => 'demo-form2','class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('reguser/validation/Add_Game_Form_Validate_Controller/validateAddPaymetn', $attributes); ?>
      
    <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Transaction Type :<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="tranjectiontype" name="tranjectiontype" placeholder="Bkash,Rocket,Surecash,iPay,Upay,Dmoney ext.."required="required" class="form-control col-md-7 col-xs-12" onblur="tranjectiofunType()">  <span id="typeError"></span>
                        </div>
                          
                      </div>
    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Transaction ID :<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="tranjection" name="tranjection" placeholder="ABCT1234XYZCV"required="required" class="form-control col-md-7 col-xs-12" onblur="tranjectiofun()">  <span id="tranError"></span>
                        </div>
                          
                      </div>
    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="table" id="table"placeholder="BDT" required="required" class="form-control col-md-7 col-xs-12"   onblur="return isMObileNumber();">  <span class="text-center"id="tableError"></span>
                        </div>
                          
                      </div>
    
    
                      <input class="inputBox" type="hidden" name="tableName" value="<?php echo $TableName; ?>" >
                      <input class="inputBox" type="hidden" name="id" value="<?php echo $tid; ?>" >
                          
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                            <input class="btn btn-success"id="myBtn"type="submit" value="UPDATE">
                        </div>
                      </div>

                    <?php echo form_close(); ?> 
        
   
    
    

    <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
   



<script type="text/javascript">

    function validation()
    {
     var tranTypename =  document.getElementById("tranjectiontype").value;
     var tranjectionname =  document.getElementById("tranjection").value;
     var amount =  document.getElementById("table").value;
  
       var tranTypenamefn = tranjectiofunType();
       var tranjectionnamefn = tranjectiofun();
       var amountfn = isMObileNumber();
       var btn = document.getElementById('myBtn');
        if (tranTypename === ''|| tranjectionname === ''|| amount === '' || tranTypenamefn === false || tranjectionnamefn === false|| amountfn === false)
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



    
     
     
     <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#upimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function(){
        readURL(this);
    });
  </script>

    
</body>
</html>

