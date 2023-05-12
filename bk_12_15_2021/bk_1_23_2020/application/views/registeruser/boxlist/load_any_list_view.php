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
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />
        <link href="<?= base_url() ?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="row text-center">
            <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $id = $row['id']; ?>    
                        <?php $status = $row['status']; ?> 
                        <?php $tablename = $row['tablename']; ?>
             <?php if ($status === 'ACTIVE'): ?>
            
           <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/subGameLoad/<?php echo $id; ?>">
            <div class="listbox">
                <h1 style="line-height: 50px; padding: 10px 10px; font-size: 30px;"> <?php echo $gameName; ?> </h1>
            </div>
            </a>
        <?php endif; ?>
          <?php endforeach; ?>   
        </div>
            <hr>
        <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $id = $row['id']; ?>    
                        <?php $status = $row['status']; ?> 
                        <?php $tablename = $row['tablename']; ?>
             <?php if ($status === 'ACTIVE'): ?>
            
            <div class="media">
                <div class="media-left">
                 <img src="<?php echo $row['piclocation'] ?>" class="media-object" style="width:100px;height:60px">
                </div>
                <div class="media-body">
                 <h4 class="media-heading"><?php echo $gameName; ?></h4>
                 <p>  <a href="<?php echo base_url() ?>reguser/Reguser_Load_controller/subGameLoad/<?php echo $id; ?>">Click Here To Load Sub Game</a> </p>
                </div>
            </div>
            <hr>
        <?php endif; ?>
          <?php endforeach; ?>
    </body>
</html>

