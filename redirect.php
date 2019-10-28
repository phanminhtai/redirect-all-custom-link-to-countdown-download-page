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
// Auto redirect countdown link
<h3>
 Wait <span id="countdown">9</span> s
</h3>
<script type="text/javascript">
    var seconds = 8;
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            window.location = "<?php echo $url;?>";
        } else {
            document.getElementById("countdown").innerHTML = seconds;
            window.setTimeout("countdown()", 1000);
        }
    }
    countdown();
</script>
