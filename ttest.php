<form name="submitForm" method="POST" action="/servlet/ServletName">
    <input type="hidden" name="param1" value="param1Value">
    <A HREF="javascript:document.submitForm.submit()"><img src=twittersignin.png></A>
</form>

<a href=directhere.php> <img src=twittersignin.png> </a>


//Generate random 32 bit string for oauth_nonce
$rand=mt_rand(1000000000,2147483647);
$nonce=md5(base64_encode($rand));
echo $nonce;

//Generate timestamp
$timestamp=time();

$urlback=urlencode('http://www.strongwooddrums.com/yh/yhtwitter.php');

//Create authoization request here: 


$top ="POST /oauth/request_token HTTP/1.1 \r\n User-Agent: Yes Hello \r\n Host: api.twitter.com \r\n Accept: */* \r\n Authorization: \r\n"
$callback="OAuth oauth_callback=\"http%3A%2F%2Fwww.strongwooddrums.com%2Fyh%2Fyhtwitter.php\","
$key="oauth_consumer_key=\"bvBsXMrvNW119vda02HJNGNcs\","
$addnonce="oauth_nonce=\"".$nonce."\","


// EXAMPLE AUTHORIZATION REQUEST TOKEN

POST /oauth/request_token HTTP/1.1
User-Agent: themattharris' HTTP Client
Host: api.twitter.com
Accept: */*
Authorization: 
        OAuth oauth_callback="http%3A%2F%2Fwww.strongwooddrums.com%2Fyh%2Fyhtwitter.php",
              oauth_consumer_key="bvBsXMrvNW119vda02HJNGNcs",
              oauth_nonce="ea9ec8429b68d6b77cd5600adbbb0456",
              oauth_signature="F1Li3tvehgcraF8DMJ7OyxO4w9Y%3D",
              oauth_signature_method="HMAC-SHA1",
              oauth_timestamp="1318467427",
              oauth_version="1.0"



302 redirect to: https://api.twitter.com/oauth/authenticate?oauth_token=NPcudxy0yU5T3tBzho7iCotZ3cnetKwcTIRlX0iwRl0 with the oauth_token received