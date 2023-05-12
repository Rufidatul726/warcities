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
    
    
    
    
    
    
 
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    
    <br>
    <h1 class="text-center"> PAYMENT CONFIRM LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    
     
        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">NAME</th>
                            <th class="column-title text-center">MOBILE</th>
                            <th class="column-title text-center">EMAIL</th>
                            <th class="column-title text-center">TRANSECTION METHOD</th>
                            <th class="column-title text-center">TRANSECTION ID</th>
                            <th class="column-title text-center">AMOUNT</th>
                            <th class="column-title text-center">STATUS</th>
                            <th class="column-title text-center">ACTION</th>
                           
                            </tr>
                        </thead>

                 <?php $newtablename = $tablename; ?>
                 <?php $Paid = "PAID"; ?>
                 <?php $UnPaid = "UNPAID"; ?>
                <?php foreach ($sub_cotent as $row): ?>
               
                                <?php $name = $row['name']; ?>
                                <?php $email= $row['email']; ?>
                                <?php $mobile= $row['mobile']; ?>
                                <?php $tranType= $row['trantype']; ?>
                                <?php $tranId= $row['tranjectionid']; ?>
                                <?php $amount= $row['totalamount']; ?>
                                  <?php $id = $row['id']; ?>
                         <?php $status= $row['playerPaymentSatus']; ?>
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $name; ?> </td>
                            <td class=" text-center "><?php echo $mobile; ?> </td>
                            <td class=" text-center "><?php echo $email; ?> </td>
                            <td class=" text-center "><?php echo $tranType; ?> </td>
                            <td class=" text-center "><?php echo $tranId; ?> </td>
                            <td class=" text-center "><?php echo $amount; ?> </td>
                            <td class=" text-center "><?php echo $status; ?> </td>
                            
                             <td class="text-center "><?php echo anchor('admin/validation/Add_Game_Form_Validate_Controller/validatePaymentConfirm/' . $newtablename . '/' . $id . '/' . $Paid . '', 'PAID <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-info"'); ?>  &nbsp;
                                                    <?php echo anchor('admin/validation/Add_Game_Form_Validate_Controller/validatePaymentConfirm/' . $newtablename . '/' . $id . '/' . $UnPaid . '', 'UNPAID <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-danger"'); ?> 
                            </td>
                             
                          </tr>
                        
                        </tbody>
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
   
    
</body>
</html>

