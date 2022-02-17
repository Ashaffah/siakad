<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>Edutraining</title>
<!-- plugins:css -->
<link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/materialdesignicons.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/vendor.addons.css">
<!-- endinject --><!-- vendor css for this page --><!-- End vendor css for this page --><!-- inject:css -->
<link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/style.css"><!-- endinject --><!-- Layout style -->
<link rel="stylesheet" href="<?php echo base_url() ?>assetslogin/style1.css"><!-- Layout style --> <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/assets/images/favicon.png">
</head>
<body>
<div class="authentication-theme auth-style_2" >
<div class="row inner-wrapper">
<div class="col-md-7 banner-section">
<div style="position:absolute;top:10px;left:50px;">
<img src="<?php echo base_url() ?>assetslogin/banner.png" style="width:40%; margin-left:35%;">

</div>
<div class="auth_footer text-center" style="width:100%;margin-top:50%;">


</div>

</div>
<div class="col-md-5 form-section" style="margin-top:5%">
<div class="form-group input-rounded">
<h4 style="color:red;"><?php echo $this->session->flashdata('err_message');?></h4>


</div>
 <?php
 echo form_open_multipart('auth/lupa', 'role="form" class="form-horizontal"');
 ?>

<div class="form-group input-rounded">
<label>No HP</label>
<input type="text" class="form-control" name="nohp">
</div>
<div class="form-group input-rounded">
<label>Email</label>
<input type="email" class="form-control" name="username" id="username">
</div>

<div class="form-inline">
</div>
<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Atur Ulang</button>
</form>
</br>
<?php echo anchor('auth','<button type="button" class="btn btn-danger btn-block">Kembali Ke Halaman Login</button>'); ?>
</br>
</br>
</br>
</div>
</div>
</div><!--page body ends --><!-- SCRIPT LOADING START FORM HERE /////////////--><!-- plugins:js --><script src="<?php echo base_url() ?>assetslogin/core.js"></script><script src="<?php echo base_url() ?>assetslogin/vendor.addons.js"></script><!-- endinject --><!-- Vendor Js For This Page Ends--><!-- Vendor Js For This Page Ends--><script src="<?php echo base_url() ?>assetslogin/script.js"></script></body>
</html>

