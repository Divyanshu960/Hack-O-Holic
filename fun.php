function str_openssl_enc($str,$iv){
    $key='1234567890priyanshu!@#$%^&*';
    $chipper="AES-128-CTR";
    $option=0;
    $str=openssl_encrypt($str,$chipper,$key,$option,$iv);
    return $str;
}



in submit 

$iv=openssl_random_pseudo_bytes(16);
$name=str_openssl_enc($name,$iv)
$email=str_openssl_enc($email,$iv)

$iv=bin2hex($iv);


function str_openssl_dec($str,$iv){
    $key='1234567890priyanshu!@#$%^&*';
    $chipper="AES-128-CTR";
    $option=0;
    $str=openssl_decrypt($str,$chipper,$key,$option,$iv);
    return $str;
}


make iv table in database type text
refer screen shot for uploading iv refrance



show main
$iv=hex2bin($row['iv']);
$name=str_openssl_dec($row['name'],$iv);
$email=str_openssl_dec($row['email'],$iv);

check echo again