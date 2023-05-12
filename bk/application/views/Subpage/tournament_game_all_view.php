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
        <br><br><br><br><br><br>
        <?php $no = 1; ?>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4  text-sm-center text-md-center text-lg-center text-xs-center">
                        <!-- <a class="btn btn-danger btn-block" href="<?php echo base_url() ?>Call_controller/subGameLoad/<?php echo ''; ?>">ON GOING TOURNAMENT</a> -->
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4">

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 col-sm-offset-4 col-md-offset-4 text-sm-center text-md-center text-lg-center text-xs-center">
                        <!-- <a class="btn btn-danger btn-block" href="<?php echo base_url() ?>Call_controller/subGameLoadpast/<?php echo ''; ?>">PAST TOURNAMENT</a> -->
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12  text-sm-center text-md-center text-lg-center text-xs-center">
                        <!-- <h2 class="heading text-center text-danger fontSelect"><?= $GameName; ?></h2> -->
                    </div>


                </div>
                <br>

                
               <div class="table-responsive">   
                
                <table class="table">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th  class="d-none d-md-table-cell" scope="col">Reg Start</th>
                            <th  class="d-none d-md-table-cell" scope="col">Reg End</th>
                            <th scope="col">Total Player</th>
                            <th   class="d-none d-md-table-cell" scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <?php date_default_timezone_set("Asia/Dhaka"); ?>
                    <?php $currentdate = date('Y-m-d'); ?>
                    <?php $currentdatenew = strtotime($currentdate); ?>

                    
                    
                    <?php if (empty($recordcount)) : ?>
                            
                        <?php foreach ($sub_cotent as $row): ?>
                            <?php $Tname = $row['tournamentName']; ?>
                            <?php $id = $row['id']; ?>
                            <?php $sDate = $row['startDate']; ?>
                            <?php $eDate = $row['endDate']; ?>
                            <?php $Mid = $row['mainTournamentId']; ?>
                            <?php $tperson = $row['totalPerson']; ?>
                            <?php $status = $row['status']; ?>
                            <?php $location = $row['pic']; ?>
                            <?php $newEndDate = strtotime($eDate); ?>
                    
                    
                                 <?php if ($newEndDate >= $currentDate) : ?>
                                            <tbody class="text-center">

                                                    <tr>
                                                        <th style="vertical-align: middle;" scope="row"><?php echo $no; ?></th>
                                                        <td style="vertical-align: middle;">
                                                            <img class="text-center img-thumbnail" src="<?php echo $location; ?>" alt="" width="100 px" height="100 px" /><br>
                                                            <span class="fontSelect text-danger text-center"> <?php echo $Tname; ?> </span>
                                                        </td>
                                                        <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                        <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                        <td style="vertical-align: middle;"><span class="text-danger"><?php echo $tperson; ?></span></td>
                                                        <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $status; ?></td>

                                                        <?php if ($status === "ACTIVE") : ?>
                                                            <td style="vertical-align: middle;">
                                                                <?php echo anchor('Call_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                <br><hr>
                                                                     
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>
                                                                
                                                            </td>
                                                        <?php else: ?>
                                                            <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                <br><hr>
                                                                     
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>
                                                                
                                                            
                                                            </td>

                                                        <?php endif; ?>


                                                    </tr>
                                                <?php $no = $no+1; ?>    

                                             </tbody>
                                    
                                 <?php endif; ?>
                    
                    
                    
                    
                        <?php endforeach; ?>
                                  
                     <?php else : ?>

                                                 <?php foreach ($sub_cotent as $row): ?>
                                                     <?php $Tname = $row['tournamentName']; ?>
                                                     <?php $id = $row['id']; ?>
                                                     <?php $sDate = $row['startDate']; ?>
                                                     <?php $eDate = $row['endDate']; ?>
                                                     <?php $Mid = $row['mainTournamentId']; ?>
                                                     <?php $tperson = $row['totalPerson']; ?>
                                                     <?php $status = $row['status']; ?>
                                                     <?php $location = $row['pic']; ?>
                                                     <?php $newEndDate = strtotime($eDate); ?>					
                                                 
                                                         
                                                  <?php if ($newEndDate >= $currentDate) : ?>       
                                                        
                                                         <?php foreach ($recordcount as $row): ?>    
                                                             <?php $subtorunamentId = $row['subtorunamentId']; ?>
                                                             <?php $totalCount = $row['totalCount']; ?>
                                                             <?php if ($id === $subtorunamentId) : ?>
                                                                
                                                             <tbody class="text-center">

                                                                 <tr>
                                                                                         <th style="vertical-align: middle;" scope="row"><?php echo $no; ?></th>
                                                                                         <td style="vertical-align: middle;">
                                                                                             <img class="text-center img-thumbnail" src="<?php echo $location; ?>" alt="" width="100 px" height="100 px" /><br>
                                                                                             <span class="fontSelect text-danger text-center"> <?php echo $Tname; ?> </span>
                                                                                         </td>
                                                                                         <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                                                         <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                                                            <td style="vertical-align: middle;"><span class="text-success"><?php echo $totalCount; ?>/<span class="text-danger"><?php echo $tperson; ?></span></td>
                                                                                         <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $status; ?></td>

                                                                                         <?php if ($status === "ACTIVE") : ?>
                                                                                             <td style="vertical-align: middle;">
                                                                                                        <?php echo anchor('Call_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                                                            <br><hr>

                                                                                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                                                              <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>

                                                                                             
                                                                                             </td>
                                                                                         <?php else: ?>
                                                                                             <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                                              <br><hr>

                                                                                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                                                              <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>

                                                                                             </td>

                                                                                         <?php endif; ?>


                                                                 </tr>
                                                             </tbody>
                                                               <?php $no = $no+1; ?> 
                                             
                                                             <?php endif; ?>
                                                         <?php endforeach; ?>
                                                                  
                                                        
                                                             
                                                   <?php endif; ?>
                                                         
                                                       
                                                  <?php endforeach; ?>
                       
                                            
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                       <?php foreach ($sub_cotent as $row): ?>
                                                     <?php $Tname = $row['tournamentName']; ?>
                                                     <?php $id = $row['id']; ?>
                                                     <?php $sDate = $row['startDate']; ?>
                                                     <?php $eDate = $row['endDate']; ?>
                                                     <?php $Mid = $row['mainTournamentId']; ?>
                                                     <?php $tperson = $row['totalPerson']; ?>
                                                     <?php $status = $row['status']; ?>
                                                     <?php $location = $row['pic']; ?>
                                                     <?php $newEndDate = strtotime($eDate); ?>					
                                                 
                                                         
                                                  <?php if ($newEndDate >= $currentDate) : ?>       
                                                        
                                                         <?php foreach ($recordcount as $row): ?>    
                                                             <?php $subtorunamentId = $row['subtorunamentId']; ?>
                                                             <?php $totalCount = $row['totalCount']; ?>
                                                             <?php if ($id === $subtorunamentId) : ?>
                                                                
                                                                    
                                                               <?php  goto end; ?>
                                             
                                                             <?php endif; ?>
                                                             
                                                         <?php endforeach; ?>
                                                                  
                                                        
                                                             
                                                             <tbody class="text-center">

                                                                 <tr>
                                                                                         <th style="vertical-align: middle;" scope="row"><?php echo $no; ?></th>
                                                                                         <td style="vertical-align: middle;">
                                                                                             <img class="text-center img-thumbnail" src="<?php echo $location; ?>" alt="" width="100 px" height="100 px" /><br>
                                                                                             <span class="fontSelect text-danger text-center"> <?php echo $Tname; ?> </span>
                                                                                         </td>
                                                                                         <td  class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                                                         <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                                                            <td style="vertical-align: middle;"><span class="text-success"><?php echo 0; ?>/<span class="text-danger"><?php echo $tperson; ?></span></td>
                                                                                         <td class="d-none d-md-table-cell" style="vertical-align: middle;"><?php echo $status; ?></td>

                                                                                         <?php if ($status === "ACTIVE") : ?>
                                                                                             <td style="vertical-align: middle;">
                                                                                                 <?php echo anchor('Call_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                                            <br><hr>
                                                                     
                                                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                                                  <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>

                                                                                             
                                                                                             
                                                                                             </td>
                                                                                         <?php else: ?>
                                                                                             <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                                             <br><hr>
                                                                     
                                                                                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                                                      <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>Call_controller/fileDownload/<?php echo $point; ?>/<?php echo $id; ?>">Point</a>
                                                                                             
                                                                                             </td>

                                                                                         <?php endif; ?>


                                                                 </tr>
                                                             </tbody>
                                                             
                                                             
                                                             
                                                             
                                                           <?php $no = $no+1; ?>   
                                                   <?php endif; ?>
                                                         
                                                        <?php  end: ?>
                                                  <?php endforeach; ?>                      
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                         
                     <?php endif; ?>
                                 
                                 
                           
                      
                   
                  </table>
                
               </div> 
                
                
                
            </div>
        </div>