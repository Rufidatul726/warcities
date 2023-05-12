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
    <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<!--    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>-->
     <link href="<?= base_url() ?>asset/css/hover-min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>
    
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
         <?php foreach ($sub_cotent as $row): ?>
                <?php $message = $row['comment']; ?>
               <?php endforeach; ?>    
    <div class="container">
        <p class="text-center">
            
            <?php echo  $message; ?>    
        </p>
    </div>
    
</body>
</html>

