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
    <br>
    <h1 class="text-center">Leader Board - <?php echo str_replace("%20", " ", $tournamentName); ?></h1>
    <br>
    <div class="row">
      
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php $no = 1; ?>
        <h5 class="text-center" style="color: black;"><span class="heading-for-tab"></span></h5>
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title text-center">NO </th>
              <th class="column-title text-center">Logo </th>
              <th class="column-title text-center">Team </th>
              <th class="column-title text-center">Leader </th>
              <th class="column-title text-center">Semi Final Score </th>
              <th class="column-title text-center">Runners Up Score </th>
              <th class="column-title text-center"> Champion Score</th>
              <th class="column-title text-center">Total Score </th>
              <th class="column-title text-center">Tournament Name </th>
              <th class="column-title text-center">Edit </th>
            </tr>
          </thead>
          <?php $newtablename = $TableName; ?>
          <?php $subtablename = "subtournament"; ?>                  
          <?php foreach ($leader_board as $row): ?>         
          <tbody>
            <tr class="even pointer">                      
              <td class=" text-center"><?php echo $no; ?> </td>
              <td class=" text-center">
                  <img class="img-thumbnail" src="<?php echo $row['logo']; ?>" height="35" width="35">  
              </td>
              <td class=" text-center "><?php echo $row['team']; ?> </td>
              <td class=" text-center "><?php echo $row['leader']; ?> </td>
              <td class=" text-center "><?php echo $row['semi']; ?> </td>
              <td class=" text-center "><?php echo $row['runnerup']; ?> </td>
              <td class=" text-center "><?php echo $row['final']; ?> </td>
              <td class=" text-center ">
                <span class="badge badge-info"><?php echo (floatval($row['semi']) + floatval($row['runnerup']) + floatval($row['final'])); ?></span>
              </td>
              <td class=" text-center "><?php echo $row['tournament']; ?> </td>
              <td class=" text-center "> <a href="<?php echo base_url() ?>admin/Admin_Load_controller/editLeaderboardTournamentRegForm/<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a></td>
            </tr>
          </tbody>
            <?php $no = $no + 1; ?>
            <?php
              if ($no == 5){
                break;
              }
              endforeach; 
            ?>     
        </table>
        <a href="<?php echo base_url() ?>admin/Admin_Load_controller/leaderBoardtListGroupByGame" class="btn btn-primary btn-sm">Back</a>
      </div>
    </div>
</body>
</html>