/* Decoded by unphp.net */

<?  @system("clear");
$b = "[1;35m";
echo "$b 
";
echo
=====================================
";
echo "
";
$user = readline('UN: ');
$pass = readline('PW: ');
$blue = "[1;32m";
echo "$blue";
$letters = array_merge(range('a','z'),range('0','9'));
$ba = $letters[rand(0,35)];
$ca = $letters[rand(0,35)];
$ra = $letters[rand(0,35)];
$da = $letters[rand(0,35)];
$ea = $letters[rand(0,35)];
$fa = $letters[rand(0,35)];
$ga = $letters[rand(0,35)];
$ha = $letters[rand(0,35)];
$ia = $letters[rand(0,35)];
$ja = $letters[rand(0,35)];
$ka = $letters[rand(0,35)];
$la = $letters[rand(0,35)];
$ma = $letters[rand(0,35)];
$na = $letters[rand(0,35)];
$oa = $letters[rand(0,35)];
$pa = $letters[rand(0,35)];
$glue = "$ba$ca$da$ea$fa$ga$ha$ia$ja$ka$la$ma$ra$oa$pa$da";
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.7 (com.thingsilikeapp; build:807 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "countryCode": "US",
   "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "27"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "DUMMY $vuser was logged in
";  
$urlm = "https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $guid = $jsonm["data"]["id"];
    $vvuser = $jsonm["data"]["userName"];
    $phone = $jsonm["data"]["phoneNumber"];
echo "The OTP will be sent to $phone";
echo "
";
///////////////////////////////////////////////
$urlm = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $stat = $jsonm["data"]["isWalletActivated"];
    
   $urll = "https://users.mylykaapps.com/api/v3/users/ValidatePhoneNumber";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "phoneNumber": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/GenerateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);

$son = json_decode($respp);
$jsonn = json_decode($respp, true);
$reqid = $jsonn["data"]["requestId"];
echo $son->message;
echo "
";
$otp = readline('pleas input OTP; ');
echo "
";

   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/ValidateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "code": "$otp",
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "requestId": "$reqid",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonxn = json_decode($respp, true);
$sign = $jsonxn["data"]["signedToken"];
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
$url= "https://users.mylykaapps.com/api/v3/users/ChangePhoneNumberV2";
            $delHeader = array("authorization: Bearer $bearer","Content-Type: application/json", "deviceos:android","user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
            
            $deleteCurl = curl_init($url);
            curl_setopt($deleteCurl, CURLOPT_URL, $url);
            curl_setopt($deleteCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($deleteCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($deleteCurl, CURLOPT_HTTPHEADER, $delHeader);
            $deldata = <<<DATA
            {"code":"$otp","country":"PH","countryCode":"PH","device":{"deviceId":"$glue","deviceImei":"$glue","deviceModel":"OPPO CPH1920","deviceName":"android","deviceOs":"Android O ","isEmulator":false,"osVersion":"27"},"phoneNumber":"$phone","signedToken":"$sign"}
            DATA;  
                curl_setopt($deleteCurl, CURLOPT_POSTFIELDS, $deldata);
                $deleteResp = curl_exec($deleteCurl);
                curl_close($deleteCurl);
                $deljson = json_decode($deleteResp);
echo $deljson->message;
echo "
";
                $urlwa = "https://wallets.mylykaapps.com/api/v3/wallets/activatewallet";
$curlwa = curl_init($urlwa);
curl_setopt($curlwa, CURLOPT_URL, $urlwa);
curl_setopt($curlwa, CURLOPT_POST, true);
curl_setopt($curlwa, CURLOPT_RETURNTRANSFER, true);
$headerswa = array("authorization:Bearer $bearer", "user-agent: Lyka/3.6.36 (com.thingsilikeapp; build:836 Android P 29))", "deviceos: android", "Content-Type: application/json",);
curl_setopt($curlwa, CURLOPT_HTTPHEADER, $headerswa);
$datawa = <<<DATA
{
  "device": {
         "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "osVersion": "29"
  }
}
DATA;
curl_setopt($curlwa, CURLOPT_POSTFIELDS, $datawa);
$respwa = curl_exec($curlwa);
curl_close($curlwa);
//var_dump($respwa);
$jsonwa = json_decode($respwa);
$statuswa = $jsonwa->status;
$acstatus = $jsonwa->message;
echo $acstatus;
echo "
"; ?>
/* Decoded by unphp.net */

<?  @system("clear");
$b = "[1;35m";
echo "$b 
";
echo
=====================================
";
echo "
";
$user = readline('UN: ');
$pass = readline('PW: ');
$blue = "[1;32m";
echo "$blue";
$letters = array_merge(range('a','z'),range('0','9'));
$ba = $letters[rand(0,35)];
$ca = $letters[rand(0,35)];
$ra = $letters[rand(0,35)];
$da = $letters[rand(0,35)];
$ea = $letters[rand(0,35)];
$fa = $letters[rand(0,35)];
$ga = $letters[rand(0,35)];
$ha = $letters[rand(0,35)];
$ia = $letters[rand(0,35)];
$ja = $letters[rand(0,35)];
$ka = $letters[rand(0,35)];
$la = $letters[rand(0,35)];
$ma = $letters[rand(0,35)];
$na = $letters[rand(0,35)];
$oa = $letters[rand(0,35)];
$pa = $letters[rand(0,35)];
$glue = "$ba$ca$da$ea$fa$ga$ha$ia$ja$ka$la$ma$ra$oa$pa$da";
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.7 (com.thingsilikeapp; build:807 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "countryCode": "US",
   "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "27"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "DUMMY $vuser was logged in
";  
$urlm = "https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $guid = $jsonm["data"]["id"];
    $vvuser = $jsonm["data"]["userName"];
    $phone = $jsonm["data"]["phoneNumber"];
echo "The OTP will be sent to $phone";
echo "
";
///////////////////////////////////////////////
$urlm = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $stat = $jsonm["data"]["isWalletActivated"];
    
   $urll = "https://users.mylykaapps.com/api/v3/users/ValidatePhoneNumber";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "phoneNumber": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/GenerateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);

$son = json_decode($respp);
$jsonn = json_decode($respp, true);
$reqid = $jsonn["data"]["requestId"];
echo $son->message;
echo "
";
$otp = readline('pleas input OTP; ');
echo "
";

   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/ValidateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "code": "$otp",
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "requestId": "$reqid",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonxn = json_decode($respp, true);
$sign = $jsonxn["data"]["signedToken"];
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
$url= "https://users.mylykaapps.com/api/v3/users/ChangePhoneNumberV2";
            $delHeader = array("authorization: Bearer $bearer","Content-Type: application/json", "deviceos:android","user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
            
            $deleteCurl = curl_init($url);
            curl_setopt($deleteCurl, CURLOPT_URL, $url);
            curl_setopt($deleteCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($deleteCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($deleteCurl, CURLOPT_HTTPHEADER, $delHeader);
            $deldata = <<<DATA
            {"code":"$otp","country":"PH","countryCode":"PH","device":{"deviceId":"$glue","deviceImei":"$glue","deviceModel":"OPPO CPH1920","deviceName":"android","deviceOs":"Android O ","isEmulator":false,"osVersion":"27"},"phoneNumber":"$phone","signedToken":"$sign"}
            DATA;  
                curl_setopt($deleteCurl, CURLOPT_POSTFIELDS, $deldata);
                $deleteResp = curl_exec($deleteCurl);
                curl_close($deleteCurl);
                $deljson = json_decode($deleteResp);
echo $deljson->message;
echo "
";
                $urlwa = "https://wallets.mylykaapps.com/api/v3/wallets/activatewallet";
$curlwa = curl_init($urlwa);
curl_setopt($curlwa, CURLOPT_URL, $urlwa);
curl_setopt($curlwa, CURLOPT_POST, true);
curl_setopt($curlwa, CURLOPT_RETURNTRANSFER, true);
$headerswa = array("authorization:Bearer $bearer", "user-agent: Lyka/3.6.36 (com.thingsilikeapp; build:836 Android P 29))", "deviceos: android", "Content-Type: application/json",);
curl_setopt($curlwa, CURLOPT_HTTPHEADER, $headerswa);
$datawa = <<<DATA
{
  "device": {
         "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "osVersion": "29"
  }
}
DATA;
curl_setopt($curlwa, CURLOPT_POSTFIELDS, $datawa);
$respwa = curl_exec($curlwa);
curl_close($curlwa);
//var_dump($respwa);
$jsonwa = json_decode($respwa);
$statuswa = $jsonwa->status;
$acstatus = $jsonwa->message;
echo $acstatus;
echo "
"; ?>
/* Decoded by unphp.net */

<?  @system("clear");
$b = "[1;35m";
echo "$b 
";
echo
=====================================
";
echo "
";
$user = readline('UN: ');
$pass = readline('PW: ');
$blue = "[1;32m";
echo "$blue";
$letters = array_merge(range('a','z'),range('0','9'));
$ba = $letters[rand(0,35)];
$ca = $letters[rand(0,35)];
$ra = $letters[rand(0,35)];
$da = $letters[rand(0,35)];
$ea = $letters[rand(0,35)];
$fa = $letters[rand(0,35)];
$ga = $letters[rand(0,35)];
$ha = $letters[rand(0,35)];
$ia = $letters[rand(0,35)];
$ja = $letters[rand(0,35)];
$ka = $letters[rand(0,35)];
$la = $letters[rand(0,35)];
$ma = $letters[rand(0,35)];
$na = $letters[rand(0,35)];
$oa = $letters[rand(0,35)];
$pa = $letters[rand(0,35)];
$glue = "$ba$ca$da$ea$fa$ga$ha$ia$ja$ka$la$ma$ra$oa$pa$da";
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.7 (com.thingsilikeapp; build:807 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "countryCode": "US",
   "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "27"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "DUMMY $vuser was logged in
";  
$urlm = "https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $guid = $jsonm["data"]["id"];
    $vvuser = $jsonm["data"]["userName"];
    $phone = $jsonm["data"]["phoneNumber"];
echo "The OTP will be sent to $phone";
echo "
";
///////////////////////////////////////////////
$urlm = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $stat = $jsonm["data"]["isWalletActivated"];
    
   $urll = "https://users.mylykaapps.com/api/v3/users/ValidatePhoneNumber";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "phoneNumber": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/GenerateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);

$son = json_decode($respp);
$jsonn = json_decode($respp, true);
$reqid = $jsonn["data"]["requestId"];
echo $son->message;
echo "
";
$otp = readline('pleas input OTP; ');
echo "
";

   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/ValidateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "code": "$otp",
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "requestId": "$reqid",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonxn = json_decode($respp, true);
$sign = $jsonxn["data"]["signedToken"];
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
$url= "https://users.mylykaapps.com/api/v3/users/ChangePhoneNumberV2";
            $delHeader = array("authorization: Bearer $bearer","Content-Type: application/json", "deviceos:android","user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
            
            $deleteCurl = curl_init($url);
            curl_setopt($deleteCurl, CURLOPT_URL, $url);
            curl_setopt($deleteCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($deleteCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($deleteCurl, CURLOPT_HTTPHEADER, $delHeader);
            $deldata = <<<DATA
            {"code":"$otp","country":"PH","countryCode":"PH","device":{"deviceId":"$glue","deviceImei":"$glue","deviceModel":"OPPO CPH1920","deviceName":"android","deviceOs":"Android O ","isEmulator":false,"osVersion":"27"},"phoneNumber":"$phone","signedToken":"$sign"}
            DATA;  
                curl_setopt($deleteCurl, CURLOPT_POSTFIELDS, $deldata);
                $deleteResp = curl_exec($deleteCurl);
                curl_close($deleteCurl);
                $deljson = json_decode($deleteResp);
echo $deljson->message;
echo "
";
                $urlwa = "https://wallets.mylykaapps.com/api/v3/wallets/activatewallet";
$curlwa = curl_init($urlwa);
curl_setopt($curlwa, CURLOPT_URL, $urlwa);
curl_setopt($curlwa, CURLOPT_POST, true);
curl_setopt($curlwa, CURLOPT_RETURNTRANSFER, true);
$headerswa = array("authorization:Bearer $bearer", "user-agent: Lyka/3.6.36 (com.thingsilikeapp; build:836 Android P 29))", "deviceos: android", "Content-Type: application/json",);
curl_setopt($curlwa, CURLOPT_HTTPHEADER, $headerswa);
$datawa = <<<DATA
{
  "device": {
         "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "osVersion": "29"
  }
}
DATA;
curl_setopt($curlwa, CURLOPT_POSTFIELDS, $datawa);
$respwa = curl_exec($curlwa);
curl_close($curlwa);
//var_dump($respwa);
$jsonwa = json_decode($respwa);
$statuswa = $jsonwa->status;
$acstatus = $jsonwa->message;
echo $acstatus;
echo "
"; ?>
/* Decoded by unphp.net */

<?  @system("clear");
$b = "[1;35m";
echo "$b 
";
echo
=====================================
";
echo "
";
$user = readline('UN: ');
$pass = readline('PW: ');
$blue = "[1;32m";
echo "$blue";
$letters = array_merge(range('a','z'),range('0','9'));
$ba = $letters[rand(0,35)];
$ca = $letters[rand(0,35)];
$ra = $letters[rand(0,35)];
$da = $letters[rand(0,35)];
$ea = $letters[rand(0,35)];
$fa = $letters[rand(0,35)];
$ga = $letters[rand(0,35)];
$ha = $letters[rand(0,35)];
$ia = $letters[rand(0,35)];
$ja = $letters[rand(0,35)];
$ka = $letters[rand(0,35)];
$la = $letters[rand(0,35)];
$ma = $letters[rand(0,35)];
$na = $letters[rand(0,35)];
$oa = $letters[rand(0,35)];
$pa = $letters[rand(0,35)];
$glue = "$ba$ca$da$ea$fa$ga$ha$ia$ja$ka$la$ma$ra$oa$pa$da";
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.7 (com.thingsilikeapp; build:807 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "countryCode": "US",
   "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "27"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "DUMMY $vuser was logged in
";  
$urlm = "https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $guid = $jsonm["data"]["id"];
    $vvuser = $jsonm["data"]["userName"];
    $phone = $jsonm["data"]["phoneNumber"];
echo "The OTP will be sent to $phone";
echo "
";
///////////////////////////////////////////////
$urlm = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $stat = $jsonm["data"]["isWalletActivated"];
    
   $urll = "https://users.mylykaapps.com/api/v3/users/ValidatePhoneNumber";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "phoneNumber": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/GenerateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);

$son = json_decode($respp);
$jsonn = json_decode($respp, true);
$reqid = $jsonn["data"]["requestId"];
echo $son->message;
echo "
";
$otp = readline('pleas input OTP; ');
echo "
";

   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/ValidateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "code": "$otp",
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "requestId": "$reqid",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonxn = json_decode($respp, true);
$sign = $jsonxn["data"]["signedToken"];
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
$url= "https://users.mylykaapps.com/api/v3/users/ChangePhoneNumberV2";
            $delHeader = array("authorization: Bearer $bearer","Content-Type: application/json", "deviceos:android","user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
            
            $deleteCurl = curl_init($url);
            curl_setopt($deleteCurl, CURLOPT_URL, $url);
            curl_setopt($deleteCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($deleteCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($deleteCurl, CURLOPT_HTTPHEADER, $delHeader);
            $deldata = <<<DATA
            {"code":"$otp","country":"PH","countryCode":"PH","device":{"deviceId":"$glue","deviceImei":"$glue","deviceModel":"OPPO CPH1920","deviceName":"android","deviceOs":"Android O ","isEmulator":false,"osVersion":"27"},"phoneNumber":"$phone","signedToken":"$sign"}
            DATA;  
                curl_setopt($deleteCurl, CURLOPT_POSTFIELDS, $deldata);
                $deleteResp = curl_exec($deleteCurl);
                curl_close($deleteCurl);
                $deljson = json_decode($deleteResp);
echo $deljson->message;
echo "
";
                $urlwa = "https://wallets.mylykaapps.com/api/v3/wallets/activatewallet";
$curlwa = curl_init($urlwa);
curl_setopt($curlwa, CURLOPT_URL, $urlwa);
curl_setopt($curlwa, CURLOPT_POST, true);
curl_setopt($curlwa, CURLOPT_RETURNTRANSFER, true);
$headerswa = array("authorization:Bearer $bearer", "user-agent: Lyka/3.6.36 (com.thingsilikeapp; build:836 Android P 29))", "deviceos: android", "Content-Type: application/json",);
curl_setopt($curlwa, CURLOPT_HTTPHEADER, $headerswa);
$datawa = <<<DATA
{
  "device": {
         "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "osVersion": "29"
  }
}
DATA;
curl_setopt($curlwa, CURLOPT_POSTFIELDS, $datawa);
$respwa = curl_exec($curlwa);
curl_close($curlwa);
//var_dump($respwa);
$jsonwa = json_decode($respwa);
$statuswa = $jsonwa->status;
$acstatus = $jsonwa->message;
echo $acstatus;
echo "
"; ?>
/* Decoded by unphp.net */

<?  @system("clear");
$b = "[1;35m";
echo "$b 
";
echo
=====================================
";
echo "
";
$user = readline('UN: ');
$pass = readline('PW: ');
$blue = "[1;32m";
echo "$blue";
$letters = array_merge(range('a','z'),range('0','9'));
$ba = $letters[rand(0,35)];
$ca = $letters[rand(0,35)];
$ra = $letters[rand(0,35)];
$da = $letters[rand(0,35)];
$ea = $letters[rand(0,35)];
$fa = $letters[rand(0,35)];
$ga = $letters[rand(0,35)];
$ha = $letters[rand(0,35)];
$ia = $letters[rand(0,35)];
$ja = $letters[rand(0,35)];
$ka = $letters[rand(0,35)];
$la = $letters[rand(0,35)];
$ma = $letters[rand(0,35)];
$na = $letters[rand(0,35)];
$oa = $letters[rand(0,35)];
$pa = $letters[rand(0,35)];
$glue = "$ba$ca$da$ea$fa$ga$ha$ia$ja$ka$la$ma$ra$oa$pa$da";
$urll = "https://identity.mylykaapps.com/useraccounts/login";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.7 (com.thingsilikeapp; build:807 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "countryCode": "US",
   "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "27"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
    $respp = curl_exec($curll);
    curl_close($curll);
    //var_dump($respp);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
echo "$msgn
";
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    echo "DUMMY $vuser was logged in
";  
$urlm = "https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $guid = $jsonm["data"]["id"];
    $vvuser = $jsonm["data"]["userName"];
    $phone = $jsonm["data"]["phoneNumber"];
echo "The OTP will be sent to $phone";
echo "
";
///////////////////////////////////////////////
$urlm = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlm = curl_init($urlm);
    curl_setopt($curlm, CURLOPT_URL, $urlm);
    curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
    $headersm = array("user-agent:Lyka/3.6.36 (com.thingsilikeapp; build:836 Android O_MR1 28)", "authorization: Bearer $bearer",);
    curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
    $respm = curl_exec($curlm);
    curl_close($curlm);
    //var_dump($respm);
    $jsonm = json_decode($respm, true);
    $stat = $jsonm["data"]["isWalletActivated"];
    
   $urll = "https://users.mylykaapps.com/api/v3/users/ValidatePhoneNumber";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "phoneNumber": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/GenerateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);

$son = json_decode($respp);
$jsonn = json_decode($respp, true);
$reqid = $jsonn["data"]["requestId"];
echo $son->message;
echo "
";
$otp = readline('pleas input OTP; ');
echo "
";

   $urll = "https://settings.mylykaapps.com/api/v3/otpservices/ValidateOTPV2";
$curll = curl_init($urll);
curl_setopt($curll, CURLOPT_URL, $urll);
curl_setopt($curll, CURLOPT_POST, true);
curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
$headerss = array("authorization: Bearer $bearer","Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
$dataa = <<<DATA
{
  "code": "$otp",
  "device": {
    "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "OPPO CPH1920",
    "deviceName": "android",
    "deviceOs": "Android O ",
    "isEmulator": false,
    "osVersion": "27"
  },
  "reference": "phone",
  "requestId": "$reqid",
  "type": "edit",
  "value": "$phone"
}
DATA;
curl_setopt($curll, CURLOPT_POSTFIELDS, $dataa);
$respp = curl_exec($curll);
curl_close($curll);
//var_dump($respp);
$jsonxn = json_decode($respp, true);
$sign = $jsonxn["data"]["signedToken"];
$jsonn = json_decode($respp);
echo $jsonn->message;
echo "
";
$url= "https://users.mylykaapps.com/api/v3/users/ChangePhoneNumberV2";
            $delHeader = array("authorization: Bearer $bearer","Content-Type: application/json", "deviceos:android","user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
            
            $deleteCurl = curl_init($url);
            curl_setopt($deleteCurl, CURLOPT_URL, $url);
            curl_setopt($deleteCurl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($deleteCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($deleteCurl, CURLOPT_HTTPHEADER, $delHeader);
            $deldata = <<<DATA
            {"code":"$otp","country":"PH","countryCode":"PH","device":{"deviceId":"$glue","deviceImei":"$glue","deviceModel":"OPPO CPH1920","deviceName":"android","deviceOs":"Android O ","isEmulator":false,"osVersion":"27"},"phoneNumber":"$phone","signedToken":"$sign"}
            DATA;  
                curl_setopt($deleteCurl, CURLOPT_POSTFIELDS, $deldata);
                $deleteResp = curl_exec($deleteCurl);
                curl_close($deleteCurl);
                $deljson = json_decode($deleteResp);
echo $deljson->message;
echo "
";
                $urlwa = "https://wallets.mylykaapps.com/api/v3/wallets/activatewallet";
$curlwa = curl_init($urlwa);
curl_setopt($curlwa, CURLOPT_URL, $urlwa);
curl_setopt($curlwa, CURLOPT_POST, true);
curl_setopt($curlwa, CURLOPT_RETURNTRANSFER, true);
$headerswa = array("authorization:Bearer $bearer", "user-agent: Lyka/3.6.36 (com.thingsilikeapp; build:836 Android P 29))", "deviceos: android", "Content-Type: application/json",);
curl_setopt($curlwa, CURLOPT_HTTPHEADER, $headerswa);
$datawa = <<<DATA
{
  "device": {
         "deviceId": "$glue",
    "deviceImei": "$glue",
    "deviceModel": "Xiaomi Redmi Note 10",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "osVersion": "29"
  }
}
DATA;
curl_setopt($curlwa, CURLOPT_POSTFIELDS, $datawa);
$respwa = curl_exec($curlwa);
curl_close($curlwa);
//var_dump($respwa);
$jsonwa = json_decode($respwa);
$statuswa = $jsonwa->status;
$acstatus = $jsonwa->message;
echo $acstatus;
echo "
"; ?>
