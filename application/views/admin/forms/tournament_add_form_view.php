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
        <link href="<?= base_url() ?>asset/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?= base_url() ?>asset/js/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/jquery-ui.js" type="text/javascript"></script>
    </head>
    <body>

        <h1 class="text-center"> TOURNAMENT GAME ADD FORM</h1>
        <br>
        <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateAddGame', $attributes); ?>
        <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Game Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="name" name="gamename" required="required" class="form-control col-md-7 col-xs-12" onblur="gameName()">  <span id="nameError"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Start Date <span class="required">*</span>
            </label>
            <div class=" input-append date form_datetime col-md-6 col-sm-6 col-xs-12">
                <input size="16" type="text" name="sdate" id="startDate" value="" readonly class="form-control col-md-7 col-xs-12">
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">End Date <span class="required">*</span></label>
            <div class=" input-append date form_datetime col-md-6 col-sm-6 col-xs-12">
                <input size="16" type="text" name="edate" id="endDate" value="" readonly class="form-control col-md-7 col-xs-12">
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Event Start Date <span class="required">*</span></label>
            <div class=" input-append date form_datetime col-md-6 col-sm-6 col-xs-12">
                <input size="16" type="text" name="eventStartdate" id="eventStartdate" value="" readonly class="form-control col-md-7 col-xs-12">
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Entry Fee? <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="entryFeeStatus">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Player <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="table" required="required" class="form-control col-md-7 col-xs-12" onblur="isMObileNumber()">  <span id="tableError"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="image" required=""  id="image" onblur="return screenShot();">
                <div  id="imageerror"></div>
                <hr>
                <img src="" id="upimg" width="500px" height="300px">
            </div>
        </div>
        <input class="inputBox" type="hidden" name="mainid" value="<?php echo $subTid; ?>" >
        <div class="ln_solid"></div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

        <?php echo form_close(); ?>
        <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
        <script type="text/javascript">
            var date = new Date();
            date.setDate(date.getDate());
            $(".form_datetime").datetimepicker({
                pickTime: false,
                minView: 2,
                format: 'yyyy-mm-dd',
                startDate: date,
                autoclose: true

            });
        </script>

        <script type="text/javascript">
            function validation(){
                var name = document.getElementById("name").value;
                var sDate = document.getElementById("startDate").value;
                var eDate = document.getElementById("endDate").value;
                var tableName = document.getElementById("table").value;
                var namefunction = gameName();
                var tableNamefunction = isMObileNumber();
                if (name === '' || sDate === '' || eDate === '' || tableName === '' || namefunction === false || tableNamefunction === false){
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

        <script type="text/javascript">
            function screenShot() {
                var img = document.getElementById("image").value;
                if (img === "") {
                    document.getElementById('imageerror').style.color = "red";
                    document.getElementById('imageerror').innerHTML = 'must select a picture';
                    return false;
                }
                document.getElementById('imageerror').style.color = "green";
                document.getElementById('imageerror').innerHTML = 'ok';
                return true;
            }
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
            $("#image").change(function () {
                readURL(this);
            });
        </script>
    </body>
</html>

