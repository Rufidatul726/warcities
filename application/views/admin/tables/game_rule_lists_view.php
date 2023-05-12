
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
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    <!--<script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid">
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateGameRules'); ?>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 col-md-offset-3">
                    <h1>Rules for - <?php echo $gamename; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3 col-md-offset-1">     
                    <textarea id="mytextarea" cols="60" rows="30" name="rulesDescription"><?php echo $rulesDescription; ?></textarea>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3 col-md-offset-1">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
            <input class="inputBox" type="hidden" name="id" value="<?php echo $id; ?>" >
            <input class="inputBox" type="hidden" name="table_id" value="<?php echo $table_id; ?>" >
            <input class="inputBox" type="hidden" name="gamename" value="<?php echo $gamename; ?>" >
        <?php echo form_close(); ?>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: "#mytextarea",
        width: "1200",
        height: "700",
        branding: false
      });
    </script>
</body>

</html>