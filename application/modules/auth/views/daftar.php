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
<div class="authentication-theme auth-style_2">
<div class="row inner-wrapper">
<div class="col-md-7 banner-section">
<div class="atas" style="position:absolute;top:10px;left:50px;">
<img src="<?php echo base_url() ?>assetslogin/banner.png" style="width:40%; margin-left:35%;">
</div>
<div class="auth_footer text-center" style="width:100%;margin-top:50%;">
<div class="bawah" style="margin-bottom:-5%;">

</div>


</div>

</div>
<div class="col-md-5 form-section" style="margin-top:5%">
<div class="form-group input-rounded">
<h4 style="color:red;"><?php echo $this->session->flashdata('err_message');?></h4>
</div>
 <?php
 echo form_open_multipart('auth/daftar', 'role="form" class="form-horizontal"');
 ?>
<div class="form-group input-rounded">
<label>Nama</label>
<input type="text" class="form-control" name="nama" required>
</div>

<div class="form-group input-rounded">
<label>No HP</label>
<input type="number" class="form-control" name="nohp" required>
</div>
<div class="form-group input-rounded">
<label>Perusahaan</label>
<input type="text" class="form-control" name="perusahaan" required>
</div>
<div class="form-group input-rounded">
<label>Email</label>
<input type="email" class="form-control" name="email" id="email" required>
</div>
<div class="form-group input-rounded">
<label>Ketik Ulang Email</label>
<input type="email" class="form-control" name="username_confirm" id="username_confirm" oninput="check2(this)" >
<script language='javascript' type='text/javascript'>
    function check2(input) {
        if (input.value != document.getElementById('email').value) {
            input.setCustomValidity('Email Harus Sama.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
</div>
<div class="form-group input-rounded">
<label>Password</label>
<input type="password" minlength="6" class="form-control" name="password" id="password" required>
</div>
<div class="form-group input-rounded">
<label>Ketik Ulang Password</label>
<input type="password" class="form-control" name="password_confirm" id="password_confirm" oninput="check(this)">
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Harus Sama.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
</div>
<div class="form-inline">
</div>
<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Daftar</button>

</form>
</br>

<?php echo anchor('auth','<button class="btn btn-danger btn-block" style="width:340px;">Kembali</button>'); ?>
</br>
</br>
</br>
</div>
</div>
</div><!--page body ends --><!-- SCRIPT LOADING START FORM HERE /////////////--><!-- plugins:js --><script src="<?php echo base_url() ?>assetslogin/core.js"></script><script src="<?php echo base_url() ?>assetslogin/vendor.addons.js"></script><!-- endinject --><!-- Vendor Js For This Page Ends--><!-- Vendor Js For This Page Ends--><script src="<?php echo base_url() ?>assetslogin/script.js"></script></body>
</html>