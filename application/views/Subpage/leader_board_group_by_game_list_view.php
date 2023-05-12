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
        <link href="<?= base_url() ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>
<!--    <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
        <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <br><br><br>
        <h1 class="text-center">Leader Board List</h1>
        <div class="container-fluid">
            <br>
            <div class="row">
                <?php foreach ($sub_cotent as $row2): ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="table-responsive">
                        <h5 class="text-center" style="color: black;"><span class="heading-for-tab"></span></h5>
                        <a href="<?php echo base_url() ?>Call_controller/leaderBoardtListBySingleGame/<?php echo $row2['id']?>/<?php echo $row2['tournamentName']; ?>" class="btn btn-primary btn-sm btn-block">See All -- <span style="font-weight: bolder; font-size: 15px;"><?php echo $row2['tournamentName']; ?><span></a>
                        <table class="table">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col"></th>
                                    <th class="d-none d-md-table-cell" scope="col">Team</th>
                                    <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                foreach ($leader_board as $row): if ($row['game'] == $row2['id']){
                            ?>
                            <tbody class="text-center">
                                <tr>
                                    <th style="vertical-align: middle;" scope="row"><?php echo $no; ?></th>
                                    <td style="vertical-align: middle;">
                                        <img class="text-center img-thumbnail" src="<?php echo $row['logo']; ?>" alt="" width="60" height="60" /><br>
                                    </td>
                                    <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $row['team']; ?></td>
                                    <td class="d-none d-md-table-cell" style="vertical-align: middle;">
                                        <span class="badge badge-dark">
                                            <?php echo (floatval($row['semi']) + floatval($row['runnerup']) + floatval($row['final'])); ?>  
                                        </span>
                                    </td>
                                </tr>
                            </tbody> 
                            <?php $no = $no + 1; ?>
                            <?php } ?>
                            <?php
                              if ($no == 5){
                                break;
                              }
                              endforeach; 
                            ?>
                        </table>     
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>           
            </div>
        </div>