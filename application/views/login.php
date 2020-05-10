
 <!DOCTYPE html>
 <html>
 	<head>
 		<title>InstaBot</title>

 		<!-- CSS -->
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/all.css">

 		<!-- javascript -->
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/js/bootstrap.min.js">
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/js/bootstrap.js">
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/js/bootstrap.bundle.js">
 		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/js/jquery.lim.min.js">

 	</head>
 	<body>
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
 					<div class="card card-sign my-5">
 						<div class="card-body">
 							<h4 class="card-title text-center">Web Nahwu</h4>
 							<form action="<?php echo site_url('Login/auth'); ?>" class="form-sign">
 								<div class="form-label-group">
 									<input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
 									
 								</div>
 								<div class="form-label-group">
 									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
 									
 								</div>
 								<button class="btn btn--primary btn-block text-uppercase" type="submit">Sign In</button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</body>
 </html>