<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Template">
    <meta name="author" content="BrainChild">    
    <link href="<?= base_url() ?>asset/css/regDatabaseForm.css" rel="stylesheet" type="text/css"/>

    <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>



</head>
<body>
     <br><br><br> <br><br>
    <div class="row">
        
  
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

    </div>

    <div class=" text-center col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img class="img-responsive"src="<?= base_url() ?>asset/image/Background_image/service/error.png" alt=""/>

        <div class="text-center">
            <button onclick="goBack()">Go Back</button>
        </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

    </div>

 </div>

</body>

<script>
    function goBack() {
        window.history.back();
    }
</script>


