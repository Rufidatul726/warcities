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
    <link href="<?= base_url()?>asset/font-awesome-4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="row">
		<h1>DASHBOARD</h1>
	</div>
	<hr>
	
		<div class="row">
			<?php if ($this->session->userdata('role') == 'ADMIN') { ?>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						Create Tournament
					</div>
					<a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournamentRegForm">
						<div class="panel-footer"> <i class="glyphicon glyphicon-pencil"></i> Click Here To Create Tournament</div>
					</a>
				</div> 
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						Tournament Details
					</div>
					<a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametListDetails">
						<div class="panel-footer"><i class="glyphicon glyphicon-pencil"></i> Click Here To View Tournament Details</div>
					</a>
				</div> 
			</div>

			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						Game List
					</div>
					<a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametList">
						<div class="panel-footer"> <i class="glyphicon glyphicon-pencil"></i> Click Here To View Game List</div>
					</a>
				</div> 
			</div>

			<?php }if ($this->session->userdata('role') == 'ADMIN' || $this->session->userdata('role') == 'subeditor') { ?>
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-body bg-primary">
							<?php 
								if($this->session->userdata('role') == 'ADMIN') echo "Editor s Tournament Details";
								else
									echo "My Tournament Details";
							?>
						</div>
						<a href="<?php echo base_url() ?>admin/Admin_Load_controller/tournametListDetails/<?php echo 'yeap'; ?>">
							<div class="panel-footer"> <i class="glyphicon glyphicon-pencil"></i> Click Here To View Tournament List</div>
						</a>
					</div> 
				</div>
			<?php } ?>
		</div>
	
</body>
</html>

