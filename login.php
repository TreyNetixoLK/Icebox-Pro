<?php include ("app/appdata/connection.php"); ?>
<?php include ("app/appdata/logval.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-clearmin.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/roboto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <title>ICEBOX Pro | Login</title>
    <!-- favicons
================================================== -->
<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png">
  </head>
  <body class="cm-login">

    <div class="text-center" style="padding:90px 0 30px 0;background:#fff;border-bottom:1px solid #ddd">
      <img src="assets/img/logo3.png" width="300" height="150">
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3" style="margin:40px auto; float:none;">
      <form method="post" action="">
	<div class="col-xs-12">
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
	      <input type="text" name="txtusername" class="form-control" placeholder="Username">
	    </div>
          </div>
          <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
	      <input type="password" name="txtpassword" class="form-control" placeholder="Password">
	    </div>
          </div>
        </div>
        <div align="center">
        <div style="width:200px;">
          <button type="submit" class="btn btn-block btn-primary" name="btn_Login">Sign in</button>
        </div>
      </form>
      <br /><br />
        <?php echo $msg; ?>
      </div>
    </div>

  </body>
</html>
