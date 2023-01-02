<?php
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;32m";
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$n_truoc = date("d");
$ngay = date("d"); $thang = date("m"); $nam = date("Y"); $a=date('d');  $b=date("m"); $thoigian=date('d/m'); $day = []; $day= date('d-m-y'); $today = date("d-m-y"); $d = date("d-m");$ip = file_get_contents('http://kiemtraip.com/raw.php');
$sr = "\033[1;97m➻❥\033[1;92m ";
$maugi="\033[1;35m";
$white= "\033[1;37m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$gt = 1.4;
$ip = file_get_contents("http://kiemtraip.com/raw.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time=date("h:i");


$dem = 1;
function dk(){
  for ($l = 0; $l < 15; $l++){
    echo "\033[1;91m= ";
    usleep(6000);
    echo "\033[1;97m= ";
    usleep(6000);
  }
  echo "\n";
};
$den = "\033[1;90m";
$do = "\033[1;91m";
$sr = $white." ➻❥ ".$luc;
$BWhite = "\033[1;97m";
$BRed = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$dem = 1;
   for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo "
\033[1;96m               ______   __  __  __  __      ____    __  __  _____   __  __  ____      
\033[1;95m      /'\_/`\/\__  _\ /\ \/\ \/\ \/\ \    /\  _`\ /\ \/\ \/\  __`\/\ \/\ \/\  _`\    
\033[1;97m     /\      \/_/\ \/ \ \ `\\ \ \ \_\ \   \ \ \/\ \ \ \ \ \ \ \/\ \ \ `\\ \ \ \L\_\  
\033[1;33m     \ \ \__\ \ \ \ \  \ \ , ` \ \  _  \   \ \ \ \ \ \ \ \ \ \ \ \ \ \ , ` \ \ \L_L  
\033[1;32m      \ \ \_/\ \ \_\ \__\ \ \`\ \ \ \ \ \   \ \ \_\ \ \ \_\ \ \ \_\ \ \ \`\ \ \ \/, \
\033[1;37m       \ \_\\ \_\/\_____\\ \_\ \_\ \_\ \_\   \ \____/\ \_____\ \_____\ \_\ \_\ \____/
\033[1;36m        \/_/ \/_/\/_____/ \/_/\/_/\/_/\/_/    \/___/  \/_____/\/_____/\/_/\/_/\/___/ \n ";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo"   \033[1;37m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓ \n";
echo"      \033[0;41m\033[1;37m\033[1;93m🔥Hôm Nay\033[0;41m ";echo"\033[0;41m\033[1;36m$weekday ";echo"\033[0;41m\033[1;33mNgày "; echo"\033[0;41m\033[1;36m$ngay ";echo"\033[0;41m\033[1;33mTháng "; echo"\033[0;41m\033[1;36m$thang ";echo"\033[0;41m\033[1;33mNăm "; echo"\033[0;41m\033[1;36m$nam$end🔥\033[0;00m"; echo "\n";
echo "      \033[1;97m\033[1;40m➻❥ Chúc Bạn\033[1;97m\033[1;97m \033[1;92mXem Video Vui Vẻ\n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Vip\033[1;97m\033[1;97m \033[1;92mBy Minh Duong XYZ \n";
echo "      $sr\033[1;97m\033[1;40mIP Tool Của Bạn:\033[1;92m $ip\n";
echo"   \033[1;37m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ \n";
echo "                 \033[1;47;31mTool Share By Minh Duong © 2021\033[0m\n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $luc."▂";
}echo"\n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo "$sr Nhập Token Facebook : ".$vang;
$tokenfb = trim(fgets(STDIN));
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
$check = check_token($tokenfb);
$check2 = json_decode(file_get_contents("https://graph.facebook.com/me/?access_token=$tokenfb"),true);
if (strpos($check, 'id') != false){
  $idfb = $check2['hometown']['id'];
  $namefb = $check2['name'];
  in_ra("\033[1;97m╭═════════════════════════════════════════════════════╮
\033[1;97m| \033[1;92mChạy Facebook : \033[1;36m$namefb | \033[1;92mID : \033[1;36m$idfb
\033[1;97m╰═════════════════════════════════════════════════════╯\n");
} else {
  in_ra("$sr Token Đã Die Hoặc Bị Văng Khỏi Web !!\n");
  exit();
}
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
in_ra("\r$sr Đang Tìm ID PAGE");
$check3 = json_decode(file_get_contents('https://graph.facebook.com/me/accounts?access_token='.$tokenfb), true);$check4 = file_get_contents('https://graph.facebook.com/me/accounts?access_token='.$tokenfb);if (strpos($check4, "id") != true){
  in_ra("$sr Hãy Tạo Page Trước Khi Sử Dụng Tool\n$sr Không Tìm Thấy Page Nào Cả !!\n");
  exit();
} else {
  $list_page = [];
  $sopage = 0;
  while (true){
    if (strpos($check4, $sopage) != true){
      break;
    } else {
      #if (strpos($check4, 'name'))
      $page = $check3['data'][$sopage]['id'];
      if ($page != ''){
      array_push($list_page, $page);}
      $sopage++;
    }
  }
}
in_ra(' | '.$sr."Tìm Thấy ".count($list_page)." ID Page !!!\n");
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
for ($xx = 0; $xx < count($list_page); $xx++){
  in_ra($sr."ID Page [".($xx+1)."] : ".$list_page[$xx]."\n");
}
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
in_ra("$sr Nhập [1] Dùng ID Page Trên\n");
in_ra("$sr Nhập [2] Chọn ID Page\n");
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
in_ra("$sr Chọn Số : ".$vang);
$chedo = trim(fgets(STDIN));
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
if ($chedo == '1'){
  $list_page_sd = $list_page;
} else {
  for ($xc = 1; $xc <= 999; $xc++){
    in_ra("$sr Nhập ID Page Thứ $xc : ".$vang);
    $cv = trim(fgets(STDIN));
    $list_page_sd = [];
    if ($cv != ''){
      array_push($list_page_sd, $cv);
    } else {
      break;
    }
    for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
  }
}
in_ra("$sr Nhập ID Bài Viết : ".$vang);
$idbv = trim(fgets(STDIN));
in_ra("$sr Delay Mỗi Lần Share : ".$vang);
$delay = trim(fgets(STDIN));
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
in_ra("$sr Ẩn Nhiệm Vụ Lỗi (Enter/n) : ".$vang);
$an = trim(fgets(STDIN));
@system('clear');
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
echo"   \033[1;37m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓ \n";
echo"      \033[0;41m\033[1;37m\033[1;93m🔥Hôm Nay\033[0;41m ";echo"\033[0;41m\033[1;36m$weekday ";echo"\033[0;41m\033[1;33mNgày "; echo"\033[0;41m\033[1;36m$ngay ";echo"\033[0;41m\033[1;33mTháng "; echo"\033[0;41m\033[1;36m$thang ";echo"\033[0;41m\033[1;33mNăm "; echo"\033[0;41m\033[1;36m$nam$end🔥\033[0;00m"; echo "\n";
echo "      \033[1;97m\033[1;40m➻❥ Chúc Bạn\033[1;97m\033[1;97m \033[1;92mXem Video Vui Vẻ\n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Được Khởi Động Vào\033[1;97m\033[1;97m: \033[1;92m".$tim.date("H:i:s")."\033[1;92m \n";
echo "      \033[1;97m\033[1;40m➻❥ Tool Vip\033[1;97m\033[1;97m \033[1;92mBy Minh Duong XYZ \n";
echo "      $sr\033[1;97m\033[1;40mIP Tool Của Bạn:\033[1;92m $ip\n";
echo"   \033[1;37m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛ \n";
for ($makep=30;$makep > 0;$makep--){
echo $trang."▂";
usleep(2500);
echo $do."▂";
}echo"\n";
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
in_ra("\033[1;97m╭═════════════════════════════════════════════════════╮
\033[1;97m| \033[1;92mChạy Facebook : \033[1;36m$namefb | \033[1;92mID : \033[1;36m$idfb
\033[1;97m╰═════════════════════════════════════════════════════╯\n");
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
for ($xx = 0; $xx < count($list_page); $xx++){
  in_ra($sr."ID Page [".($xx+1)."] : ".$list_page[$xx]."\n");
}
for ($l = 0; $l < 14; $l++){
    echo "\033[1;91m=";
    usleep(6000);
    echo $vang."=";
    usleep(6000);
    echo $den."=";
    usleep(6000);
    echo "\033[1;97m=";
    usleep(6000);}
    echo"\n";
    
$hai = 'magic';
while ($hai == 'magic'){
   for ($xx = 0; $xx < count($list_page); $xx++){
   $idpage = $list_page_sd[$xx];
   $tokenpage1 = get_token($idpage, $tokenfb);
   if (strpos($tokenpage1, 'access_token')){
     $tj = json_decode($tokenpage1, true);
     $tokenpage = $tj['access_token'];
     $share = file_get_contents("http://hobeoit.club/tool/sharehbit.php?token_page=$tokenpage&id=$idbv");
       if (strpos($share, 'error')){
       if ($an == ''){echo "\r";} else {
       thatbai($dem, $idpage);}
       } elseif (strpos($share, 'id')){
       $idshare = json_decode($share, true)['id'];
       thanhcong($idshare, $dem);
       $dem++;
     } elseif (strpos($share, 'data')){
       if ($an == ''){echo "\r";} else {
       thatbai($dem, $idpage);}
     } else { in_ra("\r Lỗi Không Xác Định");};
   }
}
delay($delay);
}
function delay($delay){
      $time = $delay; 
    for ( $x = $time; $x--; $x ) {
       echo "                                                      \r";
       echo "\033[1;33mM\033[1;36mi\033[0;31myn\033[1;97mh\033[1;31m-\033mD\033[1;32mu\033[1;33mo\033[1;34mn\033[136mg\033[1;32m <~> 〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$x." \e[1;33mgiây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\033[1;33mM\033[1;36mi\033[0;31myn\033[1;97mh\033[1;31m-\033mD\033[1;32mu\033[1;33mo\033[1;34mn\033[136mg\033[1;32m <~> 〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$x." \e[1;33mgiây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\033[1;33mM\033[1;36mi\033[0;31myn\033[1;97mh\033[1;31m-\033mD\033[1;32mu\033[1;33mo\033[1;34mn\033[136mg\033[1;32m <~> 〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$x." \e[1;33mgiây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\033[1;33mM\033[1;36mi\033[0;31myn\033[1;97mh\033[1;31m-\033mD\033[1;32mu\033[1;33mo\033[1;34mn\033[136mg\033[1;32m <~> 〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$x." \e[1;33mgiây";
       usleep(185000);
       echo "\r";
       echo "                                                      \r";
       echo "\033[1;33mM\033[1;36mi\033[0;31myn\033[1;97mh\033[1;31m-\033mD\033[1;32mu\033[1;33mo\033[1;34mn\033[136mg\033[1;32m <~> 〘\e[1;31m▉\e[1;32m■\e[1;33m■\e[1;34m■\e[1;35m■\e[1;37m〙".$x." \e[1;33mgiây";
       usleep(185000);
       echo "\r";
}
}
function share($id, $access_token) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = curl_exec($ch);
curl_close($ch);
   return $a;
}
function get_token($idpage, $tokenfb){
  $a = file_get_contents('https://graph.facebook.com/v3.1/'.$idpage.'?fields=access_token&access_token='.$tokenfb);
  return $a;
}
function thanhcong($id, $dem){
  echo "\r";
  echo "                                                      \r";
  $t = random_int(31,37);
  $mau = "\e[1;$t"."m";
    $a = "\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m ● \033[1;96m".date("H:i:s")."\033[1;91m ●$mau SUCCESS\033[1;91m ● \033[1;97m".$id." \033[1;91m \e[0m\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(5000);
    }
}
function thatbai($dem, $idpage){
  echo "\r";
  echo "                                                      \r";
  $t = random_int(31,37);
  $mau = "\e[1;$t"."m";
    $a = "\r\033[1;91m[\033[1;".rand(31, 37)."m Minh Duong \033[1;91m]\033[1;93m[\033[1;93m".$dem."\033[1;93m]\033[1;91m ● \033[1;96m".date("H:i:s")."\033[1;91m ● ERROR ● $idpage\e[0m\n";
    $len = strlen($a);
    echo "\r";
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(5000);
    }
}

function lay($link){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://id.traodoisub.com/api.php');
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.56 Safari/537.36');
  $da = 'link='.$link;
  curl_setopt($ch, CURLOPT_POSTFIELDS, $da);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $jk = curl_exec($ch);
  curl_close($ch);
  return $jk;
}
function in_ra($a){
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(6000);
    }
}
function check_token($token){
  $check = file_get_contents('https://graph.facebook.com/me/accounts?access_token='.$token);
  return $check;
}