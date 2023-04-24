<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
<head>
    
    <title>Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Template">
<meta name="author" content="BrainChild">    
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    
    
    
    
    
    
<!--    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
     <?php $newgamename = $gamename; ?>
    
     
    
     <?php $name2 = str_replace("%20"," ",$newgamename); ?>
    
    
     
    
    
    
    <br>
    <h1 class="text-center">  <?php echo $name2 ;?> MESSAGE LIST</h1>
    <br>
    
          <?php $no = 1; ?>
    

    
     <br>
    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">GAME NAME</th>
                            <th class="column-title text-center">PAYMENT</th>
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>
                           
                
                <?php foreach ($tournamentdata as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      
                      <?php $subTournametId = $row['subtorunamentId']; ?> 
                      <?php $payment = $row['playerPaymentSatus']; ?> 
                       
                         <?php foreach ($subournamentdata as $value): ?>
                          <?php $subTid = $value['id']; ?>
                          <?php $subTourName = $value['tournamentName']; ?>
                         
                         
                     
                    <?php if ($subTid === $subTournametId): ?>    
                         <?php foreach ($messagedata as $mvalue): ?>
                         <?php $messageId = $mvalue['id']; ?>
                          <?php $subTouridMessage= $mvalue['subtorunamentId']; ?>
                        
                         <?php if ($subTournametId === $subTouridMessage): ?>    
                        <tbody>
                          <tr class="even pointer">
                            
                            <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $subTourName; ?> </td>
                            
                            <td class=" text-center"><?php echo $payment; ?> </td>
                            
                            
                            <td class="text-center ">
                                                     <?php echo anchor('reguser/Reguser_Load_controller/seeMassage/' . $messageId . '', 'view <i class="fa fa-eye" aria-hidden="true"></i>', 'class="btn btn-success"'); ?>&nbsp; 
                                                     

                             </td>
                            
                            
                           
                          </tr>
                          
                          

                        </tbody>
                        
                         <?php endif; ?> 
                          <?php endforeach; ?>    
                        <?php endif; ?> 
                         <?php endforeach; ?>    
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
   
    
</body>
     
        <script type='text/javascript'>

    (function ()
    {
        if (window.localStorage)
        {
            if (!localStorage.getItem('firstLoad'))
            {
                localStorage[ 'firstLoad' ] = true;
                window.location.reload();
            } else
                localStorage.removeItem('firstLoad');
        }
    })();


</script>

        
        
        
        
        
</html>

