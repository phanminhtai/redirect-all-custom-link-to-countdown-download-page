<a href="https://toolfree.net/tao-web-3d-carousel-online/">Test 1</a>
<a href="https://drive.google.com/file/d/XXXXXXXXXXXXXXXXXXXXXX/view">Test 2</a>
<script>
// function encode rot13
function rot13(str) {
  var input     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  var output    = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
  var index     = x => input.indexOf(x);
  var translate = x => index(x) > -1 ? output[index(x)] : x;
  return str.split('').map(translate).join('');
}
// Get all link tag <a>
var getlinkdriver = document.getElementsByTagName("a");
// Replace all links 
for (var i = 0; i < getlinkdriver.length; i++) {
    // Check link google driver
    if(getlinkdriver[i].href.slice(0, 24)=="https://drive.google.com" || getlinkdriver[i].href.slice(0, 23)=="http://drive.google.com"){
    // Encode rot13 and replace :// to ADEDTDHKRBFASDNGFSDHGHAZFKSRXDFDXFFSGDGHAWEHEZSYIIOIQSRTXGHJR
    getlinkdriver[i].href = "https://yourwebsite.com/redirect.php?url=" + rot13(getlinkdriver[i].href).replace("://", "ADEDTDHKRBFASDNGFSDHGHAZFKSRXDFDXFFSGDGHAWEHEZSYIIOIQSRTXGHJR");
}
}
</script>
