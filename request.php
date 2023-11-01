<?php
$target=$_GET['number'];
error_reporting(0);
$sum=strlen($target);
if($sum==10){
   

    $url = "http://localhost/bomber/smsbomber.php"; // دامنه خود را جایگذاری کنید
    $data = [
    'targetnumber'=> $target
    ];
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);

    die(json_encode(
        array(
            "status"=>"true" ,
            "target"=>"$target" ,
            "message"=> "درخواست تخریب شماره با موفقیت ثبت گردید ، برای حمله مجدد صفحه را رفرش کنید" 
      
            )
        , JSON_UNESCAPED_UNICODE
      )); 
      
    }else{
      die(json_encode(
        array(
            "status"=>"false" ,
            "target"=>"$target" ,
            "message"=> "طول شماره باید 10 رقم باشد و نباید با 0 شروع شود" 
      
            )
        , JSON_UNESCAPED_UNICODE
      )); 
    }

  

?>

