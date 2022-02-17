<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CBT Eduinspira</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="<?php echo base_url() ?>assetsx/style.css">
<script src="<?php echo base_url() ?>assetsx/screenfull.js"></script>

</head>
     <script>
function mKeyF11(){
   if ((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)) {
           if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }
}
</script>
<body onLoad="mKeyF11();">
<?php $ip = getHostByName(getHostName()); ?>
<!-- partial:index.partial.html -->
<img src="http://<?php echo $ip ?>/wp-content/themes/unbk/images/logo.png" class="logo" width="192">

<div class="browser">
	<p>-</p>
	
	<img src="http://<?php echo $ip ?>/wp-content/themes/unbk/images/Banner.png" class="logo" width="192">
  <h1 style="color:black;font-family: Arial, Helvetica, sans-serif;">Alamat ujian ada dibawah</h1>
  
</div>

<h1>http://<?php echo $ip ?>/</h1>
<p>Silahkan kunjungi alamat diatas untuk memulai Ujian. Jika alamat ujian belum berubah setelah anda terkoneksi dengan jaringan wifi atau Kabel LAN maka silahkan klik tombol Refresh Server</a>.</p>
<button style="border-radius: 2px; background-color: #4FC44B; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" onclick="window.location.href='<?php echo base_url() ?>auth/refresh'">Refresh Server</button>
<button style="border-radius: 2px; background-color: #4C92F7; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" onclick="window.location.href='<?php echo base_url() ?>auth/depan'">Masuk Ke Halaman Admin</button>
<button style="border-radius: 2px; background-color: #F05465; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" onclick="window.location.href='<?php echo base_url() ?>auth/mati'">Matikan Server</button>
</body>

</html>
