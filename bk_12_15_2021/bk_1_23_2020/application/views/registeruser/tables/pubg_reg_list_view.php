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
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    
    
    
    
    
    
    
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <br>
    <h1 class="text-center"> PUBG REGISTRATION LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    
     <?php // echo anchor('admin/Admin_Load_controller/tournametListDeactivate/' . $newtablename . '/' . $id . '', 'DISABLE ', 'class="btn btn-default"'); ?>
    <div class="table-responsive">
        
  
    
    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">NAME</th>
                            <th class="column-title text-center">EMAIL </th>
                            <th class="column-title text-center"> MOBILE</th>
                           
                            <th class="column-title text-center"> PAYMENT STATUS </th>
                            <th class="column-title text-center"> VIEW TEAM</th>
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>
                        
                         <?php date_default_timezone_set("Asia/Dhaka"); ?>
                         <?php $currentdate = date('Y-m-d'); ?>
                         <?php $currentdatenew = strtotime($currentdate); ?>
                         <?php $uID = $userID; ?>
                        
                   <?php $newtablename = $TableName; ?>
                <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $email = $row['email']; ?>
                      <?php $mobile = $row['mobile']; ?>
                      <?php $platfrom  = $row['platfrom']; ?>
                      <?php $map = $row['map']; ?>
                      <?php $team = $row['team']; ?>
                      <?php $mode = $row['mode']; ?>  
                      <?php $subTournametId = $row['subtorunamentId']; ?>  
                      <?php $paymet = $row['playerPaymentSatus']; ?>  
                        
                        
                        <?php foreach ($sub_tournament as $row): ?>
                          <?php $subTid = $row['id']; ?>
                          <?php $eDate = $row['endDate']; ?>
                          <?php $newEndDate = strtotime($eDate); ?>
                     
                     <?php if ($subTid === $subTournametId): ?>    
                        
                       <?php if ($newEndDate >= $currentdatenew): ?>     
                        
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td style="vertical-align: middle;" class="text-center "><?php echo $no; ?></td>
                            <td style="vertical-align: middle;" class=" text-center "><?php echo $name; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $email; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $mobile; ?> </td>
                            
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $paymet; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center">
                                
                               <?php echo anchor('reguser/Reguser_Load_controller/TeamView/' . $uID . '/' . $subTid . '', 'VIEW <i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-warning btn-xs"'); ?>  &nbsp;
                                
                            </td>
                            
                             <td style="vertical-align: middle;" class="text-center ">
                                                    <?php echo anchor('reguser/Reguser_Load_controller/paymentLoad/' . $newtablename . '/' . $id . '', 'ADD PAY <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-success btn-xs"'); ?>&nbsp; 
                                                    <?php echo anchor('reguser/edit/RegUser_Edit_conrtroller/pubgListEdit/' . $newtablename . '/' . $id . '', 'EDIT <i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info btn-xs"'); ?>  &nbsp;
                                                    <?php echo anchor('reguser/delate/Admin_Erase_Conrtroller/delateAnySingelTableData/' . $newtablename . '/' . $id . '', 'DELETE <i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger btn-xs"'); ?>&nbsp; 
                                                    <?php echo anchor('reguser/edit/RegUser_Edit_conrtroller/paymentLoad/' . $newtablename . '/' . $id . '', 'EDIT PAY <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-success btn-xs"'); ?>&nbsp; 
                                <br><hr>
                                 <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-dark" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $result; ?>/<?php echo $subTid; ?>">Result</a>
                                 <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-primary"target="_blank"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $subTid; ?>">Fixture</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $subTid; ?>">Rules</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-info" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $point; ?>/<?php echo $subTid; ?>">Point</a>
                               
                                   
                            
                            </td>
                            
                          </tr>
                          
                          

                        </tbody>
                        
                         <?php else: ?>
                        
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td style="vertical-align: middle;" class="text-center "><?php echo $no; ?></td>
                            <td style="vertical-align: middle;" class=" text-center "><?php echo $name; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $email; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $mobile; ?> </td>
                           
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $paymet; ?> </td>
                             <td style="vertical-align: middle;" class=" text-center"> REGISTRATION CLOSE <br><hr>
                           
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-primary"target="_blank"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $subTid; ?>">Fixture</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $subTid; ?>">Rules</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-dark" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $result; ?>/<?php echo $subTid; ?>">Result</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-info" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $point; ?>/<?php echo $subTid; ?>">Point</a>    

                              
                            </td>
                          </tr>
                          
                          

                        </tbody>
                        
                        
                        
                        
                        
                        <?php endif; ?>   
                        
                        <?php endif; ?>     
                        
                        
                        
                        
                        
                          <?php endforeach; ?>    
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
     </div>
    
</body>
</html>

