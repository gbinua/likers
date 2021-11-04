<?php @system("clear");
$b = "[0;92m";
$yellow = "\e[1;97m" ;
echo "$b          
█ LYKA BOT FOR FAST FARMING AND EARNING";
echo "
█•ERROR FIXED ✓ | •BUG FIXED ✓ | •MULTIPLE POSTS ✓";
$green = "[0;92m";
echo "$green
";
echo "=========================================================";
$green = "\e[0;92m" ;
echo "$yellow    LYKA FARM $green ✓ $yellow (GoodyB)
$green=========================================================
 $yellow NEED 4 MAIN USERNAME NA MAY 10 POST EVERYDAY PARA    
   YUN ANG i'MAMAXRATE NG MGA DUMMY ACCOUNT MO
$green=========================================================
  $yellow LYKA AUTO MAX RATE, AUTO POST, AUTO Moment
               AND AUTO HARVEST
             100% NO HACKING PLUG!!
$green=========================================================";
$ow = "\e[0;92m";
echo "$ow
";
$dummyarray = [];
$NoofDum = readline('ilang Dummy Account ang gusto mong Gamitin?: ');
for ($x = 0;$x < $NoofDum;$x++) {
    $Dummy = readline('Enter Dummy Username: ');
    array_push($dummyarray, "$Dummy",);
}
";
";
echo "---------------------------------------------------";

";
";
$pass = readline('Enter Dummy Password: ');
echo "$yellow
";
$user2 = readline('1• ENTER MAIN USERNAME: ');
$user322 = readline('2• ENTER MAIN USERNAME: ');
$user122 = readline('3• ENTER MAIN USERNAME: ');
$user022 = readline('4• ENTER MAIN USERNAME: ');
foreach ($dummyarray as $user) {
    $green = "[1;32m";
    echo "$green";
    sleep(0);
    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $dataa = <<<DATA
{
  "countryCode": "US",
  "device": {
    "deviceId": "๖ۣۜT๖ۣۜ.¶•y๖ۣۜp๖ۣۜe๖ۣۜ,",
    "deviceImei": "๖ۣۜe87b๖ۣ๖ۣۜT๖ۣۜsj2ac",
    "deviceModel": "Unknown",
    "deviceName": "android",
    "deviceOs": "Android 12",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "28"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $psycho = "";
    $rhons = uniqid();
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "$vuser was logged in
";
    $url = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "user-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
  "device": {
    "deviceId": "¶9,3æ25b1`๖ۣۜT๖ۣۜ¶ec18",
    "deviceImei": "¶๖ۣۜT๖ۣۜ¶`fa52ec18",
    "deviceModel": "Realme GT Edition",
    "deviceName": "android",
    "deviceOs": "Android Q",
    "isEmulator": false,
    "osVersion": "30"
  },
  "group": "",
  "userId": $psycho
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
    //var_dump($respbal);
    $jsonbal = json_decode($respbal);
    $tg = $jsonbal->data->totalGem;
    echo "
DUMMY BALANCE : $tg GEMS
";
    echo " 
$vuser  RATING POST OF $user2
";
    if ($status == 0) {
        echo "mali password ng dummy 
";
        //echo $bearer;
        //////
        
    }
    if ($status == 1) {
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user2&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
        //var_dump($respm);
        $jsonm = json_decode($respm, true);
        $uid = $jsonm["data"]["0"]["id"];
        $vvuser = $jsonm["data"]["0"]["userName"];
        //cho $vvuser;
        //echo $uid;
        
    }
    if ($user2 == $vvuser) {
        $nt = "eyJhbGciOiJSUzI1NiIsImtpZCI6IjNjYmMyMTA1NGY0MDczYThjNzRmMTFiYzQ5ZmM0OTMxIiwidHlwIjoiYXQrand0In0.eyJuYmYiOjE2MzA0MDIxMTMsImV4cCI6MTYzMjk5NDExMywiaXNzIjoiaHR0cHM6Ly9pZGVudGl0eS5teWx5a2FhcHBzLmNvbSIsImF1ZCI6ImFwaTEiLCJjbGllbnRfaWQiOiJyby5jbGllbnQiLCJzdWIiOiIxYzMzZDc4My01YWMyLTRhMTUtYmNhYy0xNDMzZWU4Y2JmYjMiLCJhdXRoX3RpbWUiOjE2MzA0MDIxMDksImlkcCI6ImxvY2FsIiwibmFtZSI6ImdtYWthcHVzbyIsInVzZXJuYW1lIjoiZ21ha2FwdXNvIiwiaWQiOiI3MDAwMDIyMjAwNDYiLCJqdGkiOiJQSi11LTBZMUFHa0ZlVWJwSThoZWpRIiwic2NvcGUiOlsiYXBpMSIsIm9mZmxpbmVfYWNjZXNzIl0sImFtciI6WyJwd2QiXX0.UFbPW4aF8yCotbBzdPYzrI310t18co3Q2DJc8I1IZS8pDlIlSHv0kILZZTpvhmj6DbkieK97QmgJCArdTLftrh_7WxIe0GIno6ddDCVnJqpikULyKsxvENmDBSYOImzKs1GQeA-mIeR8NM7iYG8dBtnl0XInczP4R3aOwLWrHKLSX_iFdTVWuqwR-1h7Bxejni0sipG3pNw4_7zf6GMROm6Nl45uVG7Xh97nPdLChqe1ppPsqi__BMXoP0ClV-lwyAgc8cyw3CTqqJeEJ0cYwX9XeKcH6PoUlEtOs8ls3vJ35hVp3ptia8Delz7WDIyxqOXBSaYk11gO9_s-k2ymUg";
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $p0 = $arr["data"]["0"]["id"];
        $p1 = $arr["data"]["1"]["id"];
        $p2 = $arr["data"]["2"]["id"];
        $p3 = $arr["data"]["3"]["id"];
        $p4 = $arr["data"]["4"]["id"];
        $p5 = $arr["data"]["5"]["id"];
        $p6 = $arr["data"]["6"]["id"];
        $p7 = $arr["data"]["7"]["id"];
        $p8 = $arr["data"]["8"]["id"];
        $p9 = $arr["data"]["9"]["id"];
        $p10 = $arr["data"]["10"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs";
    } elseif ($stat == 1) $yelow = "[1;32m";
    echo "$yelow";
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA

  "device": {
    "deviceId": "d¶d41dê๖ۣۜbjzT๖ۣۜ",
      "deviceImei": "dd41d๖ۣۜT๖ۣۜ¶6697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme ¶¶",
      "deviceOs":"๖ۣۜT๖ۣۜ",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p0,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    $yelow = "[1;32m";
    echo "$yelow";
    echo "
";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{

  "device": {
      "deviceId": "๖ۣۜjs๖ۣۜT๖ۣۜt72hT๖ۣۜ",
      "deviceImei": "dd41dê03æ86697",
      "deviceModel": "4c8a๖ۣۜT๖ۣۜ1d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android ŪTĪ",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p1,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "083æ86697×%",
      "deviceImei": "0æ86697×%",
      "deviceModel": "4¶cda48a×39f5¶ë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p2,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": ".d41dê๖ۣۜT๖ۣۜæ86697",
      "deviceImei": "d41dê๖ۣۜT๖ۣۜæ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p3,
  "rate": 5,
  "userid": $uid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "ad41dê083æ86๖ۣۜT๖ۣۜ",
      "deviceImei": "dd41dê💎๖ۣۜT๖ۣۜ",
      "deviceModel": "4cd8a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p4,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $var_v04n18m16m22e = 0;
    $e = "[1;32m";
    echo "$e";
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "๖ۣۜT๖ۣۜ💎083æ86697",
      "deviceImei": "6i1dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p5,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎๖ۣۜT๖ۣۜj86697",
      "deviceImei": "dd41dêd883æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p6,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dêà083æ86697",
      "deviceImei": "dd41dêú83æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p7,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    $ulD = 700012840455;
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "736dh083æ86697",
      "deviceImei": "dàqī083æ86œ97",
      "deviceModel": "4cda48a3ē1d1f5eë",
      "deviceName": "Realme C21",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p8,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p9,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $e = "[1;32m";
    echo "$e";
    $curl110 = curl_init($url);
    curl_setopt($curl110, CURLOPT_URL, $url);
    curl_setopt($curl110, CURLOPT_POST, true);
    curl_setopt($curl110, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl110, CURLOPT_HTTPHEADER, $headers);
    $data110 = <<<DATA
{
	
  "device": {
    "deviceId": "¶πd41dêm083æ86697",
      "deviceImei": "π¶41dêm083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "©®",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $p10,
  "rate": 5,
  "userid": $uid
}
DATA;
    curl_setopt($curl110, CURLOPT_POSTFIELDS, $data110);
    $resp110 = curl_exec($curl110);
    curl_close($curl110);
    //var_dump($resp2);
    $json110 = json_decode($resp110);
    echo $json110->message;
    echo "
";
    $yell = "[1;32m";
    echo "$yell
";
    echo "=====================================================";
    $e = "[1;32m";
    echo "$e";
    //  $';
    echo "$ow";
    echo "
$vuser is RATING $user022
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user022&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $buid = $jsonm["data"]["0"]["id"];
    $bvvuser = $jsonm["data"]["0"]["userName"];
    //cho $bvvuser;
    //echo $buid;
    if ($user022 == $bvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$buid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $op0 = $arr["data"]["0"]["id"];
        $op1 = $arr["data"]["1"]["id"];
        $op2 = $arr["data"]["2"]["id"];
        $op3 = $arr["data"]["3"]["id"];
        $op4 = $arr["data"]["4"]["id"];
        $op5 = $arr["data"]["5"]["id"];
        $op6 = $arr["data"]["6"]["id"];
        $op7 = $arr["data"]["7"]["id"];
        $op8 = $arr["data"]["8"]["id"];
        $op9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op0,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
	
  "device": {
    "deviceId": "d¶41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme CII",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op1,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "d¶41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C1",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op2,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C2",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op3,
  "rate": 5,
   "userid": $buid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C3",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op4,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C4",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op5,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C5",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op6,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C6",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op7,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C7",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op8,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C8",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $op9,
  "rate": 5,
   "userid": $buid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    echo "=====================================================";
    $l = " \e[0;92m";
    echo "$l";
    //  $';
    $ow = "\e[0;92m";
    echo "$ow";
    echo "
$vuser is RATING $user122
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user122&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $fuid = $jsonm["data"]["0"]["id"];
    $fvvuser = $jsonm["data"]["0"]["userName"];
    //cho $fvvuser;
    //echo $fuid;
    if ($user122 == $fvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$fuid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $lp0 = $arr["data"]["0"]["id"];
        $lp1 = $arr["data"]["1"]["id"];
        $lp2 = $arr["data"]["2"]["id"];
        $lp3 = $arr["data"]["3"]["id"];
        $lp4 = $arr["data"]["4"]["id"];
        $lp5 = $arr["data"]["5"]["id"];
        $lp6 = $arr["data"]["6"]["id"];
        $lp7 = $arr["data"]["7"]["id"];
        $lp8 = $arr["data"]["8"]["id"];
        $lp9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data0 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
 },
  "postId": $lp0,
  "rate": 5,
  "userid": $fuid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data0);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
	
  "device": {
    "deviceId":"dd41dê💎083æ86697",
      "deviceImei":"dd41dê💎083æ86697",
      "deviceModel":"4cda48a391d1f5eë",
      "deviceName":"Realme 1",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp1,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 2",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp2,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 3",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp3,
  "rate": 5,
   "userid": $fuid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 4",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp4,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 5",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp5,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "ad41dê💎083æ86697",
      "deviceImei": "md41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 6",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp6,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ866397",
      "deviceImei": "dd41dê💎083æ826697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C7",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp7,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ8669¶7",
      "deviceImei": "dd41dê💎08¶3æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 8",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp8,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86697^%",
      "deviceImei": "dd41dê💎083æ86697$5",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme 9",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $lp9,
  "rate": 5,
   "userid": $fuid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    echo "=====================================================";
    $y = "\e[0;92m";
    echo "$y";
    //  $';
    $ow = "\e[0;92m";
    echo "$ow";
    echo "
$vuser is RATING $user322
";
    $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$user322&os=android&pageIndex=1&pageSize=16";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $huid = $jsonm["data"]["0"]["id"];
    $hvvuser = $jsonm["data"]["0"]["userName"];
    //cho $hvvuser;
    //echo $huid;
    if ($user322 == $hvvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$huid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
        //var_dump($respd,true);
        $arr = json_decode($respd, true);
        $hp0 = $arr["data"]["0"]["id"];
        $hp1 = $arr["data"]["1"]["id"];
        $hp2 = $arr["data"]["2"]["id"];
        $hp3 = $arr["data"]["3"]["id"];
        $hp4 = $arr["data"]["4"]["id"];
        $hp5 = $arr["data"]["5"]["id"];
        $hp6 = $arr["data"]["6"]["id"];
        $hp7 = $arr["data"]["7"]["id"];
        $hp8 = $arr["data"]["8"]["id"];
        $hp9 = $arr["data"]["9"]["id"];
    }
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "check your inputs
";
    } elseif ($stat == 1) $e = "\e[0;92m";
    echo "$e";
    sleep(1);
    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array("authorization:Bearer $bearer", "User-Agent:Lyka\/3.6.48 (com.thingsilikeapp; build:848 Android Q 30))", "deviceos: android Q", "Content-Type: application/json",);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data0 = <<<DATA
{
	
  "device": {
    "deviceId": "dd4™1dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ™86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp0,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data0);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo $json->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl2 = curl_init($url);
    curl_setopt($curl2, CURLOPT_URL, $url);
    curl_setopt($curl2, CURLOPT_POST, true);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);
    $data2 = <<<DATA
{
  
  "device": {
    "deviceId": "dd41dê¥💎083æ86697",
      "deviceImei": "dd41dê¢💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp1,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl2, CURLOPT_POSTFIELDS, $data2);
    $resp2 = curl_exec($curl2);
    curl_close($curl2);
    //var_dump($resp2);
    $json2 = json_decode($resp2);
    echo $json2->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl3 = curl_init($url);
    curl_setopt($curl3, CURLOPT_URL, $url);
    curl_setopt($curl3, CURLOPT_POST, true);
    curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl3, CURLOPT_HTTPHEADER, $headers);
    $data3 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê€💎083æ86697",
      "deviceImei": "dd41dê~💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp2,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl3, CURLOPT_POSTFIELDS, $data3);
    $resp3 = curl_exec($curl3);
    curl_close($curl3);
    //var_dump($resp2);
    $json3 = json_decode($resp3);
    echo $json3->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $css = 0.50;
    sleep(1);
    $curl4 = curl_init($url);
    curl_setopt($curl4, CURLOPT_URL, $url);
    curl_setopt($curl4, CURLOPT_POST, true);
    curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl4, CURLOPT_HTTPHEADER, $headers);
    $data4 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41^dê💎083æ86697",
      "deviceImei": "dd4`1dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp3,
  "rate": 5,
   "userid": $huid 
}
DATA;
    curl_setopt($curl4, CURLOPT_POSTFIELDS, $data4);
    $resp4 = curl_exec($curl4);
    curl_close($curl4);
    //var_dump($resp2);
    $json4 = json_decode($resp4);
    echo $json4->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl5 = curl_init($url);
    curl_setopt($curl5, CURLOPT_URL, $url);
    curl_setopt($curl5, CURLOPT_POST, true);
    curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl5, CURLOPT_HTTPHEADER, $headers);
    $data5 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê•💎083æ86697",
      "deviceImei": "dd•41dê💎083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp4,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl5, CURLOPT_POSTFIELDS, $data5);
    $resp5 = curl_exec($curl5);
    curl_close($curl5);
    //var_dump($resp2);
    $json5 = json_decode($resp5);
    echo $json5->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl6 = curl_init($url);
    curl_setopt($curl6, CURLOPT_URL, $url);
    curl_setopt($curl6, CURLOPT_POST, true);
    curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl6, CURLOPT_HTTPHEADER, $headers);
    $data6 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê💎083æ86•697",
      "deviceImei": "dd41dê💎08•3æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp5,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl6, CURLOPT_POSTFIELDS, $data6);
    $resp6 = curl_exec($curl6);
    curl_close($curl6);
    //var_dump($resp2);
    $json6 = json_decode($resp6);
    echo $json6->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl7 = curl_init($url);
    curl_setopt($curl7, CURLOPT_URL, $url);
    curl_setopt($curl7, CURLOPT_POST, true);
    curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl7, CURLOPT_HTTPHEADER, $headers);
    $data7 = <<<DATA
{
	
  "device": {
    "deviceId": "dd4•1dê💎083æ866•97",
      "deviceImei": "dd41dê💎083æ•86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp6,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl7, CURLOPT_POSTFIELDS, $data7);
    $resp7 = curl_exec($curl7);
    curl_close($curl7);
    //var_dump($resp2);
    $json7 = json_decode($resp7);
    echo $json7->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl8 = curl_init($url);
    curl_setopt($curl8, CURLOPT_URL, $url);
    curl_setopt($curl8, CURLOPT_POST, true);
    curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl8, CURLOPT_HTTPHEADER, $headers);
    $data8 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê•💎•083æ86697",
      "deviceImei": "dd41dê💎•083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp7,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl8, CURLOPT_POSTFIELDS, $data8);
    $resp8 = curl_exec($curl8);
    curl_close($curl8);
    //var_dump($resp2);
    $json8 = json_decode($resp8);
    echo $json8->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl9 = curl_init($url);
    curl_setopt($curl9, CURLOPT_URL, $url);
    curl_setopt($curl9, CURLOPT_POST, true);
    curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl9, CURLOPT_HTTPHEADER, $headers);
    $data9 = <<<DATA
{
	
  "device": {
    "deviceId": "dd41dê|💎|083æ86697",
      "deviceImei": "dd41dê💎|083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp8,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl9, CURLOPT_POSTFIELDS, $data9);
    $resp9 = curl_exec($curl9);
    curl_close($curl9);
    //var_dump($resp2);
    $json9 = json_decode($resp9);
    echo $json9->message;
    echo "
";
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    sleep(1);
    $curl10 = curl_init($url);
    curl_setopt($curl10, CURLOPT_URL, $url);
    curl_setopt($curl10, CURLOPT_POST, true);
    curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl10, CURLOPT_HTTPHEADER, $headers);
    $data10 = <<<DATA
{
	
  "device": {
    "deviceId": "dd4|1dê💎083æ86697",
      "deviceImei": "dd41dê💎083æ8|6697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme C11",
      "deviceOs":"Android Q",
      "isEmulator":false,
      "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
      "osVersion": "30"
  },
  "postId": $hp9,
  "rate": 5,
   "userid": $huid
}
DATA;
    curl_setopt($curl10, CURLOPT_POSTFIELDS, $data10);
    $resp10 = curl_exec($curl10);
    curl_close($curl10);
    //var_dump($resp2);
    $json10 = json_decode($resp10);
    echo $json10->message;
    echo "
";
    $device_id = '$rhons';
    addPosts($vuser, $bearer, $device_id);
    addMoments($vuser, $bearer, $device_id);
    $yell = "[0;32m";
    echo "$yell
";
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":' . $var_v04n18m16m22e . ',"device":{
      "deviceId": "⁰⅒41dê83æ86|`697",
      "deviceImei": "üd41`|083æ86697",
      "deviceModel": "4cda48a391d1f5eë",
      "deviceName": "Realme F",
      "deviceOs": "Android Q",
      "isEmulator": false,
      "notificationToken": "eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR",
      "osVersion": "30"
    },
      "recipientId":' . $ulD . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);
    $jsonbals = json_decode($respbals);
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal2 = curl_init($urlbal2);
    curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
    curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
    $headersbal2 = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
    //for debug only!
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
    $respbal2 = curl_exec($curlbal2);
    curl_close($curlbal2);
    //var_dump($respbal);
    $jsonbal2 = json_decode($respbal2);
    $tg2 = $jsonbal2->data->totalGem;
    $fbal = $tg2 - $tg;
    echo "
DUMMY BALANCE $tg2 GEMS

";
    echo "
Added gems to dummy: +$fbal GEMS
";
    ///////////
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $tg2 . '","device":{"deviceId":"fc×be87b62342f°bac.","deviceImei":"fc×be87b62342f°bac.","deviceModel":"Xiaomi Redmi Note 10","deviceName":"android","deviceOs":"Android O_MR1","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uid . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);
    $jsonbals = json_decode($respbals);
    echo $jsonbals->message;
    echo "
";
    echo "=====================================================";
    $yellow = "\e[0;92m";
    echo "$yellow";
    echo "
";
}
function addPosts($user, $bearer, $device_id) {
    echo "

 Adding moments to $user 
}
}
";
 
 function getUserId($rDevID, $mcCookie){
        $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);

        return $getUID->data->id;
    }

    function getX($urlx, $gdevID, $cooks = ""){
        $getURL = $urlx;
        $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $getHeader = array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent",
            "authorization: Bearer $cooks",
            "x-clientid: $gdevID",
            );
            $getCurl = curl_init($getURL);
            curl_setopt($getCurl, CURLOPT_URL, $getURL);
            curl_setopt($getCurl, CURLOPT_HTTPGET, true);
            curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
            sleep(3);
            $getResp = curl_exec($getCurl);
            curl_close($getCurl);
            $getjson = json_decode($getResp);

            return $getjson;
    }

    function postX($urlx, $payloader, $cooks = ""){
        $postURL = $urlx;
        $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $postHeader = !$cooks 
            ? array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent") 
            : array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $uAgent","authorization: Bearer $cooks") ;
            $postCurl = curl_init($postURL);
            curl_setopt($postCurl, CURLOPT_URL, $postURL);
            curl_setopt($postCurl, CURLOPT_POST, true);
            curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
            curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
            curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
            sleep(3);
            $postResp = curl_exec($postCurl);
            curl_close($postCurl);
            $postjson = json_decode($postResp);

            return $postjson;
    }

    function payload($devIDx, $xtraPay, $rTokenx = ""){
        $valdata = <<<DATA
                {"device": {
                    "deviceId": "$devIDx",
                    "deviceImei": "",
                    "deviceModel": "Xiaomi Redmi Note 5",
                    "deviceName": "android",
                    "deviceOs": "Android R ",
                    "isEmulator": false,
                    "osVersion": "30",
                    "notificationToken": "$rTokenx"
                },
                "countryCode": "US",
                $xtraPay
                }
                DATA; 

        return $valdata;
    }
