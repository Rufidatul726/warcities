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
    
    
    
    
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    <div class="container-fluid">
      
    <br>
    <h1 class="text-center"> CLASH OF CLAN REGISTRATION LIST</h1>
    <br>
    
          <?php $no = 1; ?>
     <div class="table-responsive">   
     
        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">NAME</th>
                            <th class="column-title text-center">VILLAGE NAME </th>
                            <th class="column-title text-center"> PERSONAL TAG</th>
                            <th class="column-title text-center"> CLAN NAME</th>
                            <th class="column-title text-center"> CLAN TAG</th>
                            <th class="column-title text-center"> POSITION </th>
                            <th class="column-title text-center"> EMAIL </th>
                            <th class="column-title text-center"> MOBILE </th>
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>

                  <?php date_default_timezone_set("Asia/Dhaka"); ?>
                    <?php $currentdate = date('Y-m-d'); ?>
                    <?php $currentdatenew = strtotime($currentdate); ?>       
                        
                 <?php $newtablename = $TableName; ?>
                <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $email = $row['email']; ?>
                      <?php $mobile = $row['mobile']; ?>
                      <?php $vname = $row['vname']; ?>
                      <?php $ptag = $row['ptag']; ?>
                      <?php $clname = $row['cname']; ?>
                      <?php $ctag = $row['ctag']; ?>  
                      <?php $post = $row['cpos']; ?>  
                      <?php $subTournametId = $row['subtorunamentId']; ?>  
                      <?php $Trantype = $row['trantype']; ?>  
                        
                        
                        
                        
                         <?php foreach ($sub_tournament as $row): ?>
                          <?php $subTid = $row['id']; ?>
                          <?php $eDate = $row['endDate']; ?>
                          <?php $newEndDate = strtotime($eDate); ?>
                           
                     
                    <?php if ($subTid === $subTournametId): ?>    
                        
                          <?php if ($newEndDate >= $currentdatenew): ?>    
                        
                        <tbody>
                          
                            <tr class="even pointer">
                            
                             <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $name; ?> </td>
                            <td class=" text-center"><?php echo $vname; ?> </td>
                            <td class=" text-center"><?php echo $ptag; ?> </td>
                            <td class=" text-center"><?php echo $clname; ?> </td>
                            
                            <td class=" text-center"><?php echo $ctag; ?> </td>
                            
                            <td class=" text-center"><?php echo $post; ?> </td>
                            
                            <td class=" text-center"><?php echo $email; ?> </td>
                            <td class=" text-center"><?php echo $mobile; ?> </td>
                            
                            <td class="text-center ">
                                                    <?php echo anchor('reguser/Reguser_Load_controller/paymentLoad/' . $newtablename . '/' . $id . '', 'ADD PAY <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-success"'); ?>&nbsp; 
                                                    <?php echo anchor('reguser/edit/RegUser_Edit_conrtroller/cocListEdit/' . $newtablename . '/' . $id . '', 'EDIT <i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info"'); ?>  &nbsp;
                                                    <?php echo anchor('reguser/delate/Admin_Erase_Conrtroller/delateAnySingelTableData/' . $newtablename . '/' . $id . '', 'DELETE <i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger"'); ?>&nbsp; 
                                                    <?php echo anchor('reguser/edit/RegUser_Edit_conrtroller/paymentLoad/' . $newtablename . '/' . $id . '', 'EDIT PAY <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-success"'); ?>&nbsp; 
                                <br><hr>
                                 <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-dark" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $result; ?>/<?php echo $subTid; ?>">Result</a>
                                 <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-primary"target="_blank"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $subTid; ?>">Fixture</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $subTid; ?>">Rules</a>
                               
                                   
                            
                            </td>
                            
                            
                            
                           
                            
                          </tr>
                          

                        </tbody>
                        
                        
                        <?php else: ?>
                        
                        <tbody>
                          
                          
                          
                          <tr class="even pointer">
                            
                           <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $name; ?> </td>
                            <td class=" text-center"><?php echo $vname; ?> </td>
                            <td class=" text-center"><?php echo $ptag; ?> </td>
                            <td class=" text-center"><?php echo $clname; ?> </td>
                            
                            <td class=" text-center"><?php echo $ctag; ?> </td>
                            
                            <td class=" text-center"><?php echo $post; ?> </td>
                            
                            <td class=" text-center"><?php echo $email; ?> </td>
                            <td class=" text-center"><?php echo $mobile; ?> </td>
                            <td class=" text-center"> REGISTRATION CLOSE <br><hr>
                           
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-primary"target="_blank"  href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $fixture; ?>/<?php echo $subTid; ?>">Fixture</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $rules; ?>/<?php echo $subTid; ?>">Rules</a>
                                <a style="width: 40px;padding:1px 1px; "class="btn btn-sm btn-dark" target="_blank" href="<?php echo base_url() ?>reguser/Reguser_Load_controller/fileDownload/<?php echo $result; ?>/<?php echo $subTid; ?>">Result</a>
                                                                

                              
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
 
   </div> 
</body>
</html>

