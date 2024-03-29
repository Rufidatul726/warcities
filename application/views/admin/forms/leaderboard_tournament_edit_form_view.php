<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo '<pre>';print_r($sub_cotent);die();
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
        <h1 class="text-center"> Tournament Leader Score Edit Form</h1>
        <br>
        <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateEditTournamentLeaderBoard', $attributes); ?>
        <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Game Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- <input type="text" id="name" name="gamename" required="required" class="form-control col-md-7 col-xs-12" onblur="gameName()">  <span id="nameError"></span> -->
                <select name="game_name" class="form-control col-md-7 col-xs-12">
                    <?php foreach ($sub_cotent_tournament as $row): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['tournamentName']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>


        
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tournament Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="tournament_name" class="form-control col-md-7 col-xs-12">
                    <?php foreach ($sub_cotent_subtournament as $row): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['tournamentName']; ?></option>
                    <?php endforeach ?>
            </select>
            </div>

        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="team_name">Team Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="team_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($sub_cotent['team']) ? $sub_cotent['team'] : "" ?>">
            </div>
        </div>
        <input type="hidden" value="<?php echo isset($sub_cotent['id']) ? $sub_cotent['id'] : "" ?>" name="lb_id">
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="leader_score">Leader Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="leader_score" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($sub_cotent['leader']) ? $sub_cotent['leader'] : "" ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="semi_final_score">Semi Final Score <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="semi_final_score" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($sub_cotent['semi']) ? $sub_cotent['semi'] : "" ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Runner Up Score <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="runner_up_score" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($sub_cotent['runnerup']) ? $sub_cotent['runnerup'] : "" ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="final_score">Final Score <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="table" name="final_score" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($sub_cotent['final']) ? $sub_cotent['final'] : "" ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="image" required=""  id="image" onblur="return screenShot();">
                <div  id="imageerror"></div>
                <hr>
                <img src="<?php echo isset($sub_cotent['logo']) ? $sub_cotent['logo'] : "" ?>" id="upimg" width="500px" height="300px">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        <?php echo form_close(); ?> 
        <script src="<?= base_url() ?>asset/js/admin/formValidation.js" type="text/javascript"></script>
        <script type="text/javascript">

            function validation()
            {
                var name = document.getElementById("name").value;
                var tableName = document.getElementById("table").value;
                var namefunction = gameName();
                var tableNamefunction = tableName();
                if (name === '' ||  tableName === '' || namefunction === false || tableNamefunction === false)
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

