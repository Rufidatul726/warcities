<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
<head>
       <?php echo $map['js']; ?>
      <title>Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Template">
<meta name="author" content="BrainChild">    
    <link rel="icon" href="<?= base_url()?>asset/image/icone/Fevicon.png" type="image/gif" />
    <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/mainPageStyle.css" rel="stylesheet" type="text/css"/>
    
    <script src="<?= base_url()?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url()?>aasset/js/jquery-1.10.2.min.js" type="text/javascript"></script>
  


    <script src="<?= base_url()?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    
   

</head>
<body>
    <div class="container-fluid">
        
                <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">GAME TRADE</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--      <ul class="nav navbar-nav ">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>-->
        
        <ul class="nav navbar-nav navbar-center">
            <li><a href="#">HOME</a></li>
            <li><a href="#">GAME LIST</a></li>
            <li><a href="#">DOCUMENTATION</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>

        
        
        
<!--      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#" style="font-size: 9px">LOGIN IN</a></li>
          <li><a href="#"style="font-size: 10px; border: 0.6px solid #0f25c1; border-radius: 25px;
 " class="">REGISTER</a>
</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
            
    <h3 id="home"></h3>
    <br>
    <div class="container-fluid " style="margin-top: 30px;">
        
        
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active" style="height:800px;">
        
        <img class="img-responsive"  src="<?= base_url()?>asset/image/Background_image/slider/1.jpg" alt="First slide">
    </div>
    <div class="item ">
      <img class="img-responsive" src="<?= base_url()?>asset/image/Background_image/slider/2.jpg" alt="Second slide">
    </div>
    <div class="item ">
      <img class="img-responsive" src="<?= base_url()?>asset/image/Background_image/slider/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
            
                </div>
                
    <h3 id="tranding"></h3>
        <div id="tranding" class="container-fluid">
            <h3 class="text-center"> TRENDING GAMES</h3>
            <div class="cardgame">
            <div class=" cardgame  ">
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
            <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
            <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
                <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
                <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
                <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
                <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
                <div class=" cardgame " >
  <img class="card-img-top" src="<?= base_url()?>asset/image/Background_image/slider/images.jpg" alt="Card image cap">
  
</div>
            
            </div>
            <h4 class="text-center ">SEE ALL</h4>
        </div>
     
    
    
    <h3 id="contact"></h3>
        <div class="container-fluid">
        <div class="contactsection">
             <?php echo $map['html']; ?>
        </div>
         </div>
    </div>
   
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>