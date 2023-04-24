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
        <link href="<?= base_url() ?>asset/css/bodyCustom.css" rel="stylesheet" type="text/css"/>

   
          


    </head>
    <body>
        <br><br><br><br><br><br>
        <?php $no = 1; ?>
        <div class="container-fluid">
            <div class="container">
                
                <br>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12  text-sm-center text-md-center text-lg-center text-xs-center">
                        <h1 class="heading text-danger fontSelect text-center"><?= $GameName; ?></h1>
                    </div>


                </div>
                <br>

                
               <div class="table-responsive">   
                
              <table class="table table-striped jambo_table bulk_action">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Reg Start</th>
                            <th class="text-center"scope="col">Reg End</th>
                            <th class="text-center"scope="col">Total Player</th>
                            <th class="text-center"scope="col">Status</th>
                            <th class="text-center"scope="col">Action</th>
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
                                                        <th style="vertical-align: middle;" class="text-center" scope="row"><?php echo $no; ?></th>
                                                        <td style="vertical-align: middle;">
                                                            <img class="text-center img-thumbnail" src="<?php echo $location; ?>" alt="" width="100 px" height="100 px" /><br>
                                                            <span class="fontSelect text-danger text-center"> <?php echo $Tname; ?> </span>
                                                        </td>
                                                        <td style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                        <td style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                        <td style="vertical-align: middle;"><span class="text-danger"><?php echo $tperson; ?></span></td>
                                                        <td style="vertical-align: middle;"><?php echo $status; ?></td>

                                                        <?php if ($status === "ACTIVE") : ?>
                                                            <td style="vertical-align: middle;">
                                                                <?php echo anchor('reguser/Reguser_Load_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                <br><hr>
                                                                     
                                                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger"target="_blank"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                
                                                            </td>
                                                        <?php else: ?>
                                                            <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                <br><hr>
                                                                     
                                                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger"target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger"target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>
                                                                
                                                            
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
                                                                                         <td style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                                                         <td style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                                                            <td style="vertical-align: middle;"><span class="text-success"><?php echo $totalCount; ?>/<span class="text-danger"><?php echo $tperson; ?></span></td>
                                                                                         <td style="vertical-align: middle;"><?php echo $status; ?></td>

                                                                                         <?php if ($status === "ACTIVE") : ?>
                                                                                             <td style="vertical-align: middle;">
                                                                                                        <?php echo anchor('reguser/Reguser_Load_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                                                            <br><hr>

                                                                                                            <a style="width: 40px;padding:1px 1px; "target="_blank" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                            <a style="width: 40px;padding:1px 1px; "target="_blank" class="btn btn-sm btn-xs-block btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>

                                                                                             
                                                                                             </td>
                                                                                         <?php else: ?>
                                                                                             <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                                              <br><hr>

                                                                                                            <a style="width: 40px;padding:1px 1px; " target="_blank" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                            <a style="width: 40px;padding:1px 1px; " target="_blank" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>

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
                                                                                         <td style="vertical-align: middle;"><?php echo $sDate; ?></td>
                                                                                         <td style="vertical-align: middle;"><?php echo $eDate; ?></td>
                                                                                            <td style="vertical-align: middle;"><span class="text-success"><?php echo 0; ?>/<span class="text-danger"><?php echo $tperson; ?></span></td>
                                                                                         <td style="vertical-align: middle;"><?php echo $status; ?></td>

                                                                                         <?php if ($status === "ACTIVE") : ?>
                                                                                             <td style="vertical-align: middle;">
                                                                                                 <?php echo anchor('reguser/Reguser_Load_controller/registration/' . $TableName . '/' . $Tname . '/' . $id . '', 'REGISTER <i class="fa fa-registered" aria-hidden="true"></i>', 'class="btn btn-dark"'); ?>
                                                                                            <br><hr>
                                                                     
                                                                                                <a style="width: 40px;padding:1px 1px; " target="_blank" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                <a style="width: 40px;padding:1px 1px; " target="_blank" class="btn btn-sm btn-danger" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>

                                                                                             
                                                                                             
                                                                                             </td>
                                                                                         <?php else: ?>
                                                                                             <td style="vertical-align: middle;">REGISTRATION CLOSE
                                                                                             <br><hr>
                                                                     
                                                                                             <a style="width: 40px;padding:1px 1px; " class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $id; ?>">Fixture</a>
                                                                                                    <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $id; ?>">Rules</a>

                                                                                             
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