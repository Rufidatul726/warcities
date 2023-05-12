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
    <h1 class="text-center">Leader Board List</h1>
    <br>
    <div class="row">
      <?php foreach ($sub_cotent as $row2): ?>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <?php $no = 1; ?>
        <h5 class="text-center" style="color: black;"><span class="heading-for-tab"></span></h5>
        <a href="<?php echo base_url() ?>admin/Admin_Load_controller/leaderBoardtListBySingleGame/<?php echo $row2['id']?>/<?php echo $row2['tournamentName']; ?>" class="btn btn-primary btn-sm btn-block">See All -- <span style="font-weight: bolder; font-size: 15px;"><?php echo $row2['tournamentName']; ?><span></a>
        <!-- <input type="hidden" name="game_name" value="<?php echo $row2['tournamentName']; ?>"> -->
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              <th class="column-title text-center">NO </th>
              <th class="column-title text-center">Logo </th>
              <th class="column-title text-center">Team </th>
              <th class="column-title text-center">Score </th>
              <th class="column-title text-center">Edit </th>
            </tr>
          </thead>
          <?php $newtablename = $TableName; ?>
          <?php $subtablename = "subtournament"; ?>                  
          <?php foreach ($leader_board as $row): if ($row['game'] == $row2['id']){ ?>         
          <tbody>
            <tr class="even pointer">                      
              <td class=" text-center"><?php echo $no; ?> </td>
              <td class=" text-center">
                  <img class="img-thumbnail" src="<?php echo $row['logo']; ?>" height="35" width="35">  
              </td>
              <td class=" text-center "><?php echo $row['team']; ?> </td>
              <td class=" text-center "><?php echo "50"; ?> </td>
              <td class=" text-center "> <a href="<?php echo base_url() ?>admin/Admin_Load_controller/editLeaderboardTournamentRegForm/<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a></td>
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
      <?php endforeach; ?>
    </div>
</body>
</html>