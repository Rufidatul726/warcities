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
    <h1 class="text-center"> PUBG TEAM REGISTRATION LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    
     <?php // echo anchor('admin/Admin_Load_controller/tournametListDeactivate/' . $newtablename . '/' . $id . '', 'DISABLE ', 'class="btn btn-default"'); ?>
    <div class="table-responsive">
        
  
    
    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">TEAM NAME</th>
                            <th class="column-title text-center">PUBG ID </th>
                            
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>
                        
                         <?php date_default_timezone_set("Asia/Dhaka"); ?>
                         <?php $currentdate = date('Y-m-d'); ?>
                      
                        
                   <?php $newtablename = $TableName; ?>
                  <?php foreach ($sub_cotent as $row): ?>
                     <?php $pubgid = $row['pubgid']; ?>
                     <?php $name= $row['teamname']; ?>
                      <?php $id = $row['id']; ?>
                      
                     
                     
                   
                        
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td style="vertical-align: middle;" class="text-center "><?php echo $no; ?></td>
                            <td style="vertical-align: middle;" class="text-center "><?php echo $name; ?></td>
                            <td style="vertical-align: middle;" class=" text-center "><?php echo $pubgid; ?> </td>
                           
                            
                            
                             <td style="vertical-align: middle;" class="text-center ">
                                                    
                                                    <?php echo anchor('reguser/edit/RegUser_Edit_conrtroller/pubgTeamListEdit/' . $newtablename . '/' . $id . '', 'EDIT <i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info btn-xs"'); ?>  &nbsp;
                                                    
                             
                            </td>
                            
                          </tr>
                          
                          

                        </tbody>
                        
                        
                        
                        
                        
                        
                  <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
     </div>
    
</body>
</html>

