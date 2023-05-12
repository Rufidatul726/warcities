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
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />
        <link href="<?= base_url() ?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>

        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>



<!--        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>



    </head>
    <body>
        
        
                     

        <div class="row text-center">
            
            <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $tableid = $row['id']; ?>
                        <?php $tablename = $row['tablename']; ?>
            
            
           <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/messageLoad/<?php echo $tablename; ?>/<?php echo $gameName; ?>/<?php echo $tableid; ?>">
            <div class="listbox">


                <h1 style="line-height: 50px; padding: 10px 10px; font-size: 30px;"> <?php echo $gameName; ?> </h1>

            </div>
            </a>

        
          <?php endforeach; ?>   
            
            
        </div>






    </body>
</html>

