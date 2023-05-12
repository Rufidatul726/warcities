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


<!--<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
<link href="<?= base_url() ?>asset/css/admin/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>


<script src="<?= base_url() ?>asset/js/admin/datepicker/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="<?= base_url() ?>asset/js/admin/jquery-ui.js" type="text/javascript"></script>
<script src="<?= base_url() ?>asset/js/admin/datepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>

</head>
<body>
 <body>
    <div class="container-fluid">
       
            
                <div class="headerlink">
                    <h2 class="text-center fromHeading">ADD PICTURE</h2>
                </div>
        
        
        <div class="row">
             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">

            </div>
            
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center" style="background-color: white;">
                 
                
                <?php $attributes = array('id' => 'myform', 'name' => 'myform','onsubmit' => 'return  validation()'); ?>
                    <?php echo form_open_multipart('admin/validation/Add_Game_Form_Validate_Controller/uploadMultipleImage', $attributes); ?>
                        
                    
                         <h3 class="text-center">Picture</h3>
                      
                           
                            <input class="text-center mt-5" type="file" name="image[]"multiple="multiple" required="" multiple id="gallery-photo-add" onblur="">
                              <div class="gallery" id="gallery" width="100px" height="100px"></div>
                               <div  id="imageerror"></div>
                           
                        
                     
                     <input  type="hidden" name="table" value="<?php echo $tablename; ?>">
                   
                        
             
                     <br>
                   <button class="btn btn-info text-center mt-5" type="submit">ADD</button>
    
             
                  <?php echo form_close(); ?> 
                 
                 
                 
                 
                 
                 
                 
             </div>
            
            
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">

            </div>
            
            
            
        </div>
        
        
        
        <br>
        <br>
                   
          
        
        
        
        <div class="row mt-5">
            
            <?php $no = 1; ?>
            <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title text-center">NO </th>
                            <th class="column-title text-center">PIC</th>
                            
                            <th class="column-title text-center">ACTION </th>
                           
                            
                          </tr>
                        </thead>

                <?php $tableName = $tablename ?>
               <?php foreach ($sub_t_ID as $row): ?>
                      <?php $pic = $row['location']; ?>
                   <?php $id = $row['id']; ?>
                      
                     
                    
                        
                        <tbody>
                          <tr class="even pointer">
                            
                           <td><?php echo $no; ?> </td>
                         <td>  <img class="img-thumbnail" width="150px" alt="এই খবর এর জন্য কোন ছবি আপলোড করা হয় নি। " src="<?php echo $pic; ?>"/></td>
                            
                            
                            <td class="text-center "><?php echo anchor('admin/delate/Admin_Erase_Conrtroller/delatnewsMultipic/' . $tableName . '/' . $id . '', 'DELETE <i class="fa fa-trash" aria-hidden="true"></i>', 'class="btn btn-danger"'); ?> <hr>
                                                     
                            </td>
                          </tr>
                          
                          

                        </tbody>
                      
                        
                        
                        
                        <?php $no = $no + 1; ?>
                     <?php endforeach; ?>      
                      </table>
            
           
            
   
            
            
    </div>
        
        
        
    </div>

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
                    }

                    else
                        localStorage.removeItem('firstLoad');
                }
            })();


    </script>
    
    



    
  <script type="text/javascript">
  
 $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, '#gallery');
    });
});
  
</script>
    
    
    
     <script>
     function validation()
     {
         
       var image =  document.getElementById("image").value;  
       
     

        if ( image === '' )
        {


            return false;

        } 
     }
        
        
        
    </script>
    

    
</html>