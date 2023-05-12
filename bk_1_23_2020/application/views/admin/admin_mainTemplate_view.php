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
   
    <link href="<?= base_url()?>asset/css/admin/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/nprogress.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/green.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" type="text/css"/>
    <!--<link href="<?= base_url()?>asset/css/daterangepicker.css" rel="stylesheet" type="text/css"/>-->
    <link href="<?= base_url()?>asset/css/custom.min.css" rel="stylesheet" type="text/css"/>
    
    
    

      <script src="<?= base_url() ?>asset/js/umd/popper.js" type="text/javascript"></script>
    
    
   

</head>
 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>admin/Admin_Load_controller/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>TOURNAMENT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                   <?php $pic = $this->session->userdata('image');?> 
                <img src="<?= $pic ;?>" alt="nopic" class="img-circle profile_img">
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                
               <?php $name = $this->session->userdata('name');?> 
                <h2><?php echo $name ;?> </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Games</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i>User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
<!--                      <li><a href="<?php echo base_url() ?>admin/Admin_Load_controller/gameAddForm">Add Game</a></li>-->
                      <li><a href="<?php echo base_url() ?>admin/Admin_Load_controller/userListView">User List</a></li>
                    
                    </ul>
                  </li>
                 
   
                </ul>
              </div>
                
                
            
             
                 <div class="menu_section">
                <h3>TOURNAMENT</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-trophy"></i> Tournament <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a  href="<?php echo base_url() ?>admin/Admin_Load_controller/tournamentRegForm"  > ADD TOURNAMENT</a></li>
                       <li><a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametList">TOURNAMENT LIST</a></li>
                      <li><a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametListDetails">TOURNAMENT DETAILS</a></li>
                     </ul>
                  </li>
                 
                </ul>
              </div>
                
                
              <div class="menu_section">
                <h3>MESSAGE</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-envelope"></i> Message <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a  href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametListMessage"  > Add Message</a></li>
                      </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i> Request List <span class="fa fa-chevron-down"></span></a>
                   <ul class="nav child_menu">
                     <li ><a  href="<?php echo base_url() ?>admin/Admin_Load_controller/requestForTournamet"  > Tournament</a></li>
                     </ul>
                  </li>
                </ul>
              </div>
                
                
                
                 <div class="menu_section">
                <h3>SLIDER</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-image"></i> SLIDE <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a  href="<?php echo base_url() ?>admin/Admin_Load_controller/addslide"  > Add Slide</a></li>
                      </ul>
                  </li>
                 
                </ul>
              </div>
                
                
                
                
                
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
            <!-- /menu footer buttons -->
          </div>
        </div>

          
          
          
          
          
          
          
          
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              
              
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                  
                 
                  
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= $pic ;?>"alt=""><?php echo $name ;?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo base_url() ?>admin/Admin_Load_controller/profile"> Profile</a></li>
                    <li>
                      
                    </li>
                    
                    <li><a href="<?php echo base_url() ?>Call_controller/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
              
              
              
              
            
              
              
              
              
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          
          
        
          <!-- /top tiles -->
           <?php echo $main_content; ?>

          <br />
     
         


      
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Admin Template by <a href="http://www.brainchildbd.com/">BRAINCHILD</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     
     
     <script src="<?= base_url()?>asset/js/admin/jquery.min.js" type="text/javascript"></script>
 
<!--      <script src="<?= base_url()?>asset/js/admin/Popper.js" type="text/javascript"></script>-->
     
     <script src="<?= base_url()?>asset/js/admin/bootstrap.min.js" type="text/javascript"></script>
    

<script src="<?= base_url()?>asset/js/admin/fastclick.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/nprogress.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/Chart.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/gauge.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/bootstrap-progressbar.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/icheck.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/skycons.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/date.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/moment.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/daterangepicker.js" type="text/javascript"></script>
<script src="<?= base_url()?>asset/js/admin/custom.min.js" type="text/javascript"></script>

 </body>
</html>

