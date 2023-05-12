<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Template">
    <meta name="author" content="BrainChild">    
  

    <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="<?= base_url()?>asset/css/login.css" rel="stylesheet" type="text/css" />
    <script href="<?= base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"></script>



</head>
<body>
    <br><br><br><br><br>
<div class="row">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <img class="img-responsive"src="<?= base_url() ?>asset/image/Background_image/service/success.png" alt=""/>

        <div class="text-center">
            <button onclick="goBack()" class="btn">Go Back</button>
        </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

    </div>
</div>
    <input type="hidden" id="refresh" value="no">

</body>

<script>
    function goBack() {
        window.history.back();
    }
</script>


<script>
    window.onload = function () {
        if (!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
        }
    }
</script>    