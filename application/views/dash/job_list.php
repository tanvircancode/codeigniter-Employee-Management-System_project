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
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
						if($view_all_jobs != FALSE){
						  foreach ($view_all_jobs->result() as $job) { ?>
							<tr>
								<td><?php echo $job->j_id; ?> </td>
								<td><?php echo $job->j_name; ?> </td>
								<td><a href="<?php echo site_url();?>jobs/update_job/<?php echo $job->j_id; ?>"  class="btn btn-warning btn-block btn-xs">Edit</a></td>
								<td><a href="<?php echo site_url();?>jobs/delete_job_process/<?php echo $job->j_id; ?>" class="btn btn-danger btn-block btn-xs">Delete</a></td>
							</tr>
							
							<?php }
						}
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