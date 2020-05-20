<?php
if (isset($this->session->userdata['logged_in'])) {
  redirect('beranda');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bendahara - PPMH</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/theme/yellow.css">
  <link rel="icon" href="<?php echo base_url(); ?>template/image/book.png" type="image/x-icon">
</head>
<body>

  <div class="app app-default">
 <form action="<?php echo site_url('login/auth'); ?>" method="post" role="form">
<div class="app-container app-login">

  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
     
      <div class="app-block">
        <div class="app-right-section">
          <div class="app-brand">
			<center><img src="<?php echo base_url(); ?>template/image/book.png" style="width: 150px; height: 150px; float: middle;"> </a>
		</center>
		<br>
		<center>Web Nahwu<br>Challenges</center>
		
		</div>
          <div class="app-info">
            
            <ul class="list">
			  <li>
               <div class="title"><strong><h3 style="float: left;">Panduan Login</h3></strong></div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="title">Masukkan <b>Username</b> pada form inputan.</div>
              </li>
              <li>
                <div class="icon">
                  <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="title">Masukkan <b>Password</b> pada form inputan.</div>
              </li>
			</ul>
          </div>
        </div>
        <div class="app-form">
          <div class="form-suggestion">
           <h1><strong>LOGIN</strong></h1>
          </div>
		  <br>
         
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user"></i></span>
                <input type="text" require class="form-control" name="username" placeholder="Masukkan Username">
              </div>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-key" ></i></span>
                <input type="password" require class="form-control" name="password" placeholder="Masukkan Password">
              </div>
              
              <div class="text-center">
                 <input type="submit" id="loginbtn" class="btn btn-sm btn-submit"  style="width: 100%; background-color:#009A35; color:#ffffff;" value="Login">
              </div>
        </form>
        </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/vendor.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/assets/js/app.js"></script>

</body>
</html>