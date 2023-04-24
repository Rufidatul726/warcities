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
    <link href="<?= base_url()?>asset/css/loading.css" rel="stylesheet" type="text/css"/>
    
    <script>
window.addEventListener("load", function(){

     var load_screen = document.getElementById("loader");
     load_screen.style.display = 'none';
});
</script>

    
</head>
<body>
  
    
    <div class="loader" id="loader">
        <span class="Nspan">G</span>
  <span class="Nspan">A</span>
  <span class="Nspan">M</span>
  <span class="Nspan">E</span>
  <span class="Nspan">S</span>
  <span class="Nspan">T</span>
  <span class="Nspan">R</span>
  <span class="Nspan">A</span>
  <span class="Nspan">D</span>
  <span class="Nspan">E</span>
  
  <div class="covers">
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
    <span class="Nspan"></span>
  </div>
   </div> 
    
        
          
            <?php echo $header; ?>
   
    <br> 
    <br>
            <?php echo $boday; ?>
   
        
        
             <?php echo $footer; ?>
        
         
    
    
    
        
        
         
    
  
</body>
</html>