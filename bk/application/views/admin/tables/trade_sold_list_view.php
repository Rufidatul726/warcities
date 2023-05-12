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
    <h1 class="text-center"> SOLD TRADE LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    
     
        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">GAME NAME</th>
                            <th class="column-title text-center">SELL TYPE</th>
                            <th class="column-title text-center">TITLE</th>
                            <th class="column-title text-center">GET PRICE</th>
                            <th class="column-title text-center">SELL STATUS</th>
                            <th class="column-title text-center">BUY DATE</th>
                            <th class="column-title text-center">SEND MONEY TO SELLER</th>
                            <th class="column-title text-center">COMPLAIN</th>
                            
                           
                           
                            
                          </tr>
                        </thead>

                 <?php $newtablename = $TableName; ?>
                <?php foreach ($sub_cotent as $row): ?>
                <?php $Name = $row['gamename']; ?>
                 <?php $gameName = str_replace("%20"," ",$Name); ?>
                        
                        
                                <?php $showprice = $row['shoprice']; ?>
                                <?php $Heading= $row['heading']; ?>
                                <?php $itemName= $row['itemname']; ?>
                                <?php $buyDate= $row['buydate']; ?>
                                <?php $complain= $row['complain']; ?>
                                <?php $adminPayment= $row['adminpayment']; ?>
                               
                                <?php $getprice= $row['getprice']; ?>
                                <?php $status= $row['status']; ?>
                                
                          
                                <?php $id = $row['id']; ?>       
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $gameName; ?> </td>
                            <td class=" text-center "><?php echo $itemName; ?> </td>
                            <td class=" text-center "><?php echo $Heading; ?> </td>
                            <td class=" text-center "><?php echo $getprice; ?> </td>
                            <td class=" text-center "><?php echo $status; ?> </td>
                            <td class=" text-center "><?php echo $buyDate; ?> </td>
                            <td class=" text-center "><?php echo $adminPayment; ?> </td>
                            <td class=" text-center "><?php echo $complain; ?> </td>
                            
                            
                          </tr>
                          
                          

                        </tbody>
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
   
    
</body>
</html>

