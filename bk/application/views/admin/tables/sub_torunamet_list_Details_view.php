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
    
    
     <link href="<?= base_url() ?>asset/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
     <script src="<?= base_url() ?>asset/js/jquery-1.8.3.min.js" type="text/javascript"></script>
     <!--<script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
   
     <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>asset/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
   

</head>
<body>
    <?php $Name = str_replace("%20", " ", $Name); ?>
    <br>
    <h1 class="text-center"><?php  echo $Name; ?> TOURNAMENT GAME LIST</h1>
     <?php $newtablename = $TableName; ?>
    <br>
    
          <?php $no = 1; ?>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                
              
    
            </div>
            
     <?php $attributes = array('id' => 'demo-form2', 'class' => 'form-horizontal form-label-left', 'name' => 'myform', 'onsubmit' => 'return  validation()'); ?>
        <?php echo form_open_multipart('admin/Admin_Load_controller/searchSubtournametListDetails', $attributes); ?>        
    
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
        
         <div class=" input-append date form_datetime col-md-6 col-sm-6 col-xs-12">

                <input size="16" type="text" name="date" id="endDate" value="" readonly class="form-control col-md-7 col-xs-12">
                <span class="add-on"><i class="icon-th"></i></span>

          </div>
        <input class="inputBox" type="hidden" name="tablename" value="<?php echo $newtablename; ?>" >
        <input class="inputBox" type="hidden" name="idName" value="<?php echo $nnid; ?>" >
        <input class="inputBox" type="hidden" name="gamename" value="<?php echo $Name; ?>" >
        
        
        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> search</button>
        
    </div>
            
        <?php echo form_close(); ?>        
            
        </div>
    </div>
        <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">GAME NAME </th>
                            <th class="column-title text-center">STATUS </th>
                            <th class="column-title text-center">START DATE </th>
                            <th class="column-title text-center">END DATE</th>
                            <th class="column-title text-center">TOTAL PERSON</th>
                          
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>

                
                 <?php $subtablename = "subtournament"; ?>
                        
                <?php foreach ($sub_cotent as $row): ?>
                <?php $gameName = $row['tournamentName']; ?>
                <?php $id = $row['id']; ?>
                <?php $sdate = $row['startDate']; ?>
                <?php $edate = $row['endDate']; ?>
                <?php $person = $row['totalPerson']; ?>
                        
                        <?php $status = $row['status']; ?>
                        
                        <tbody>
                          <tr class="even pointer">
                            
                            <td class="text-center "><?php echo $no; ?></td>
                            <td class=" text-center "><?php echo $gameName; ?> </td>
                            <td class=" text-center"><?php echo $status; ?> </td>
                            <td class=" text-center"><?php echo $sdate; ?> </td>
                            <td class=" text-center"><?php echo $edate; ?> </td>
                            <td class=" text-center"><?php echo $person; ?> </td>
                          
                            <td class="text-center "><?php echo anchor('admin/Admin_Load_controller/gameRegList/' . $newtablename . '/'.$Name.'/' . $id . '', 'DETAILS <i class="fa fa-list" aria-hidden="true"></i>', 'class="btn btn-primary"'); ?>&nbsp;
                            
                            </td>
                            
                          </tr>
                          
                          

                        </tbody>
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
        
   
    
</body>

<script type="text/javascript">

                    var date = new Date();
                  
                    $(".form_datetime").datetimepicker({
                        pickTime: false,
                        minView: 2,
                        format: 'yyyy-mm-dd',
                       
                        autoclose: true

                    });
</script>


<script type="text/javascript">

            function validation()
            {
                
                var eDate = document.getElementById("endDate").value;
           
               




                if ( eDate === '')
                {


                    return false;

                }

            }

</script>

</html>

