<?php
// Check sever request, you can also use another way
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$checklink = str_replace( ' ', '', $_GET['url'] );
if ($checklink != "") {
    // replace ADEDTDHKRBFASDNGFSDHGHAZFKSRXDFDXFFSGDGHAWEHEZSYIIOIQSRTXGHJR to :// and decode rot13
    $url=str_replace('ADEDTDHKRBFASDNGFSDHGHAZFKSRXDFDXFFSGDGHAWEHEZSYIIOIQSRTXGHJR','://', $_GET['url']);
    $url=str_rot13($url);
}
else{
    header("Location: https://yourwebsite.com");
    die();
}
}
else{
    header("Location: https://yourwebsite.com");
    die();
}
?>
// Echo link
<a href="<?php echo $url;?>">Get link</a>
