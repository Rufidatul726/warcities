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
        <?php $newgamename = $gamename; ?>
    
     <?php $newid = $id; ?>
     <?php $name2 = str_replace("%20"," ",$newgamename); ?>
    <br>
    <h1 class="text-center"><?php echo $name2; ?>  REGISTRATION LIST (DUO) </h1>
    <br>
    
          <?php $no = 1; ?>
 
    <div class="container-fluid">
        
    
    
        <div class="row">
        
         <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3">
             
        <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  screenShot()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateGameDetails', $attributes); ?>
            
             <?php $newTableName = "rules"; ?>
             <div class="form-group">
                 <label class="control-label " for="first-name">Rules & Regulation <span class="required">*</span>
                 </label>
                 <div class="form-group">
                     <input type="file" name="image" required=""  id="image" onblur="return screenShot();">
                     <div  id="imageerror"></div>

                 </div>

             </div>  
             
                <input class="inputBox" type="hidden" name="id" value="<?php echo $newid; ?>" >
                <input class="inputBox" type="hidden" name="table" value="<?php echo $newTableName; ?>" >
                <input class="inputBox" type="hidden" name="gamename" value="<?php echo $name2; ?>" >
             
                <button type="submit" class="btn btn-success">Submit</button>
              <?php echo form_close(); ?>
                 <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>admin/delate/Admin_Erase_Conrtroller/delateAnyDataContent/<?php echo $newTableName; ?>/<?php echo $id; ?>">Delete <i class="fa fa-trash"></i></a>
        </div>
        
        
        
        <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3">
            <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  resultscreenshot()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateGameDetails', $attributes); ?>
            
             <?php $newTableName = "result"; ?>
             <div class="form-group">
                 <label class="control-label " for="first-name">Result <span class="required">*</span>
                 </label>
                 <div class="form-group">
                     <input type="file" name="image" required=""  id="result" onblur="return resultscreenshot();">
                     <div  id="resulterror"></div>

                 </div>

             </div>  
             
                <input class="inputBox" type="hidden" name="id" value="<?php echo $newid; ?>" >
                <input class="inputBox" type="hidden" name="table" value="<?php echo $newTableName; ?>" >
                <input class="inputBox" type="hidden" name="gamename" value="<?php echo $name2; ?>" >
             
                <button type="submit" class="btn btn-success">Submit</button>
              <?php echo form_close(); ?> 
                 <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>admin/delate/Admin_Erase_Conrtroller/delateAnyDataContent/<?php echo $newTableName; ?>/<?php echo $id; ?>">Delete <i class="fa fa-trash"></i></a>
        </div>
        
        
        
        <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3">
             
        <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  fixturescreenShot()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateGameDetails', $attributes); ?>
            
             <?php $newTableName = "fixture"; ?>
             <div class="form-group">
                 <label class="control-label " for="first-name">Fixture<span class="required">*</span>
                 </label>
                 <div class="form-group">
                     <input type="file" name="image" required=""  id="rulesimage" onblur="return fixturescreenShot();">
                     <div  id="fiximageerror"></div>

                 </div>

             </div>  
             
                <input class="inputBox" type="hidden" name="id" value="<?php echo $newid; ?>" >
                <input class="inputBox" type="hidden" name="table" value="<?php echo $newTableName; ?>" >
                <input class="inputBox" type="hidden" name="gamename" value="<?php echo $name2; ?>" >
             
                <button type="submit" class="btn btn-success">Submit</button>
              <?php echo form_close(); ?> 
                 <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>admin/delate/Admin_Erase_Conrtroller/delateAnyDataContent/<?php echo $newTableName; ?>/<?php echo $id; ?>">Delete <i class="fa fa-trash"></i></a>
        </div>
            
            
            
        <div class="text-center col-md-3 col-sm-3 col-xs-3 col-lg-3">
             
        <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  pointscreenshot()'); ?>
        <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/validateGameDetails', $attributes); ?>
            
             <?php $newTableName = "point"; ?>
             <div class="form-group">
                 <label class="control-label " for="first-name">Point<span class="required">*</span>
                 </label>
                 <div class="form-group">
                     <input type="file" name="image" required=""  id="pointimage" onblur="return pointscreenshot();">
                     <div  id="pointerror"></div>

                 </div>

             </div>  
             
                <input class="inputBox" type="hidden" name="id" value="<?php echo $newid; ?>" >
                <input class="inputBox" type="hidden" name="table" value="<?php echo $newTableName; ?>" >
                <input class="inputBox" type="hidden" name="gamename" value="<?php echo $name2; ?>" >
             
                <button type="submit" class="btn btn-success">Submit</button>
              <?php echo form_close(); ?> 
                
                <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>admin/delate/Admin_Erase_Conrtroller/delateAnyDataContent/<?php echo $newTableName; ?>/<?php echo $id; ?>">Delete <i class="fa fa-trash"></i></a>
        </div>   
            
        
        
    </div>
    
  </div> 
    
   
    
    
    
    <br>
    
    <div class="table-responsive">
    
    
        <table class="table table-striped jambo_table bulk_action table-responsive">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">NAME</th>
                            <th class="column-title text-center">EMAIL </th>
                            <th class="column-title text-center">PUBG NAME </th>
                            <th class="column-title text-center">TAG ID</th>
                            <th class="column-title text-center"> MOBILE</th>
                            <th class="column-title text-center"> PLATFORM</th>
                            <th class="column-title text-center"> MAP</th>
                            <th class="column-title text-center"> GAME TYPE</th>
                            <th class="column-title text-center"> TEAM </th>
                            <th class="column-title text-center"> PLAYER LIST </th>
                            <th class="column-title text-center"> MODE </th>
                            <th class="column-title text-center"> PAYMENT STATUS </th>
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>

                 <?php $newtablename = $TableName; ?>
                 <?php $pubgsubTable = $pubgTable; ?>
                <?php foreach ($sub_cotent as $row): ?>
                     <?php $name = $row['name']; ?>
                      <?php $id = $row['id']; ?>
                      <?php $email = $row['email']; ?>
                      <?php $pubname = $row['pubname']; ?>
                      <?php $pubgNumber= $row['pubnumber']; ?>
                      <?php $mobile = $row['mobile']; ?>
                      <?php $platfrom  = $row['platfrom']; ?>
                      <?php $map = $row['map']; ?>
                      <?php $team = $row['team']; ?>
                      <?php $mode = $row['mode']; ?>  
                      <?php $userid = $row['userid']; ?>  
                      <?php $teamName= $row['teamname']; ?>  
                      <?php $payment = $row['playerPaymentSatus']; ?> 
                        
                     
                  
                        
                        
                        <tbody>
                          <tr class="even pointer">
                            
                              <td style="vertical-align: middle;" class="text-center "><?php echo $no; ?></td>
                            <td style="vertical-align: middle;" class=" text-center "><?php echo $name; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $email; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $pubname; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $pubgNumber; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $mobile; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $platfrom; ?> </td>
                            
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $map; ?> </td>
                              <td style="vertical-align: middle;" class=" text-center"><?php echo $team; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $teamName; ?> </td>
                          
                            
                     
                              <?php foreach ($sub_player as $row): ?>
                                     <?php $playerid = $row['id']; ?>
                                      <?php $pubgid = $row['pubgid']; ?>
                                      <?php $mainid = $row['teamleadid']; ?>
                                      <?php $subtid = $row['subtid']; ?>
                           
                            <?php if ($userid === $mainid): ?>
                       
                                <td style="vertical-align: middle;" class=" text-center">
                             
                                  
                                    <?php echo $pubgid; ?> <wbr>
                               
                                <?php echo anchor('admin/edit/Admin_Edit_conrtroller/pubgDuoTeamListEdit/' . $pubgsubTable . '/' . $playerid . '', '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info btn-xs"'); ?>
                              
                                </td>
                         
                        
                      
                           <?php endif; ?>
                            
                              <?php endforeach; ?>      
                        
                            
                            
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $mode; ?> </td>
                            <td style="vertical-align: middle;" class=" text-center"><?php echo $payment; ?> </td>
                            
                            
                            <td class="text-center ">
                                                    <?php echo anchor('admin/edit/Admin_Edit_conrtroller/pubgDuoListEdit/' . $newtablename . '/' . $id . '', 'EDIT <i class="fa fa-pencil-square-o" aria-hidden="true"></i>', 'class="btn btn-info"'); ?>  &nbsp;
                                                    <?php echo anchor('admin/delate/Admin_Erase_Conrtroller/delateAnySingelTableData/' . $newtablename . '/' . $id . '', 'DELETE <i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger"'); ?>
                                                    <?php echo anchor('admin/edit/Admin_Edit_conrtroller/payMentConfirm/' . $newtablename . '/' . $id . '', 'PAYMENT <i class="fa fa-money" aria-hidden="true"></i>', 'class="btn btn-success"'); ?> 
                                                    
                            </td>
                            
                          </tr>
                          
                          

                        </tbody>
                        
                       
                        
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
    
    </div>
    
        
   
    
</body>



<script type="text/javascript">

            function screenShot() {

                var img = document.getElementById("image").value;

                if (img === "") {
                    document.getElementById('imageerror').style.color = "red";
                    document.getElementById('imageerror').innerHTML = 'must select a file';
                    return false;
                }
                document.getElementById('imageerror').style.color = "green";
                document.getElementById('imageerror').innerHTML = 'ok';
                return true;
            }
        </script>

    <script type="text/javascript">

            function fixturescreenShot() {

                var img = document.getElementById("rulesimage").value;

                if (img === "") {
                    document.getElementById('fiximageerror').style.color = "red";
                    document.getElementById('fiximageerror').innerHTML = 'must select a file';
                    return false;
                }
                document.getElementById('fiximageerror').style.color = "green";
                document.getElementById('fiximageerror').innerHTML = 'ok';
                return true;
            }
        </script>

<script type="text/javascript">

            function pointscreenshot() {

                var img = document.getElementById("pointimage").value;

                if (img === "") {
                    document.getElementById('pointerror').style.color = "red";
                    document.getElementById('pointerror').innerHTML = 'must select a file';
                    return false;
                }
                document.getElementById('pointerror').style.color = "green";
                document.getElementById('pointerror').innerHTML = 'ok';
                return true;
            }
        </script>



 
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

