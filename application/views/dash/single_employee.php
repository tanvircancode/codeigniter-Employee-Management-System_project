	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	if($_SESSION['u_name'] == '')
	{
		redirect('home','refresh');
	}

	?>
	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 101 Template</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
		
	</head>
	<body>
		<!-- Dash nav -->
		<?php $this->load->view('dash/inc/nav');  ?>
		<!-- Dash nav -->

		<!-- div data -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<?php $this->load->view('dash/inc/sidebar');?>
				</div>
				<div class="col-lg-9 col-md-9">
					<table class="table table-bordered">
						
						<?php
						
                            foreach ($view_single_employee->result() as $employee) { ?>
                               
                            	<tr>
                            		<th>Date</th>
                            		<td><?php echo $employee->e_date; ?></td>
                            	</tr>
                            	<tr>
                            		<th>Name</th>
                            		<td><?php echo $employee->e_name; ?></td>
                            	</tr>
                            	<tr>
                            		<th>Date</th>
                            		<td><?php echo $employee->e_email; ?></td>
                            	</tr>
                            	<tr>
                            		<th>Date</th>
                            		<td><?php echo $employee->e_phone; ?></td>
                            	</tr>
                            	<tr>
                            		<th>Date</th>
                            		<td><?php echo $employee->e_job; ?></td>
                            	</tr>
                            	<tr>
                            		<td colspan="2">
                            			<a href="<?php echo site_url(); ?>employees/update_single_employee/<?php echo $employee->e_id; ?>" class="btn btn-warning btn-sm">Edit</a>
                            		    <a href="<?php echo site_url();?>employees/delete_single_employee/<?php echo $employee->e_id; ?>" class="btn btn-danger btn-sm">Delete</a>
                            		</td>
                            	</tr>
                           <?php }
						?>
					</table> 
				</div>
			</div>
		</div>
		<!-- div data -->
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>