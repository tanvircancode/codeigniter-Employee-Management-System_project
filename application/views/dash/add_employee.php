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

		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<?php $this->load->view('dash/inc/sidebar');?>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="panel-heading">Name</div>
					<div class="panel-body">
						<?php echo form_open('employees/add_employee_process' , 'class="form-horizontal"'); ?>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" name="e_name" class="form-control input-sm" id="inputEmail3" placeholder="Name">
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email ID</label>
								<div class="col-sm-10">
									<input type="email" name="e_email" class="form-control input-sm" id="inputEmail3" placeholder="Email">
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="number" name="e_phone" class="form-control input-sm" id="inputEmail3" placeholder="Phone">
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Select Job</label>
								<div class="col-sm-10">
									<select name="e_job" class="form-control input-sm">
									  <option value="-">-</option>
									  <?php
									   $show_all_jobs = $this->db->get('jobs');
                                         // if($show_all_jobs != FALSE){
                                         	foreach ($show_all_jobs->result() as $job) { ?>
                                              <option value="<?php echo $job->j_name; ?>">
                                              	<?php echo $job->j_name; ?>
                                              </option>
                                             
                                         	<?php }
                                         // }
									  ?>
									</select>
									
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="submit" name="add_employee" class="btn btn-sm btn-success"value="Add Employee">
								</div>
							</div>
					
					</div>
				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>