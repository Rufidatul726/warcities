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
    
    
    
    
    
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <br>
    <h1 class="text-center"> ITEM LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    
     
        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">GAME NAME </th>
                            
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>

                 <?php $newtablename = $TableName; ?>
                <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['gamename']; ?>
                <?php $id = $row['id']; ?>
                        
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $gameName; ?> </td>
                            
                            <td class="text-center "><?php echo anchor('admin/edit/Admin_Edit_conrtroller/itemListEdit/' . $newtablename . '/' . $id . '', 'EDIT <i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info"'); ?> &nbsp; <?php echo anchor('admin/delate/Admin_Erase_Conrtroller/delateTournamentGame/' . $newtablename . '/' . $id . '', 'DELETE <i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger"'); ?> </td>
                            
                          </tr>
                          
                          

                        </tbody>
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
   
    
</body>
</html>

