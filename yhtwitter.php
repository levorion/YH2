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

// EXAMPLE AUTHORIZATION REQUEST TOKEN

POST /oauth/request_token HTTP/1.1
User-Agent: themattharris' HTTP Client
Host: api.twitter.com
Accept: */*
Authorization: 
        OAuth oauth_callback="http%3A%2F%2Fwww.strongwooddrums.com%2Fyh%2Fyhtwitter.php",
              oauth_consumer_key=" bvBsXMrvNW119vda02HJNGNcs",
              oauth_nonce="ea9ec8429b68d6b77cd5600adbbb0456",
              oauth_signature="F1Li3tvehgcraF8DMJ7OyxO4w9Y%3D",
              oauth_signature_method="HMAC-SHA1",
              oauth_timestamp="1318467427",
              oauth_version="1.0"



302 redirect to: https://api.twitter.com/oauth/authenticate?oauth_token=NPcudxy0yU5T3tBzho7iCotZ3cnetKwcTIRlX0iwRl0 with the oauth_token received


//EXAMPLE AUTH REQUEST TOKEN TO SET USER STATUS (create tweet) 
POST /1/statuses/update.json?include_entities=true HTTP/1.1
Accept: */*
Connection: close
User-Agent: OAuth gem v0.4.4
Content-Type: application/x-www-form-urlencoded
Authorization: 
        OAuth oauth_consumer_key="xvz1evFS4wEEPTGEFPHBog", 
              oauth_nonce="kYjzVBB8Y0ZFabxSWbWovY3uYSQ2pTgmZeNu2VS4cg", 
              oauth_signature="tnnArxj06cWHq44gCs1OSKk%2FjLY%3D", 
              oauth_signature_method="HMAC-SHA1", 
              oauth_timestamp="1318622958", 
              oauth_token="370773112-GmHxMAgYyLbNEtIKZeRNFsMKPR9EyMZeS9weJAEb", 
              oauth_version="1.0"
Content-Length: 76
Host: api.twitter.com

status=Hello%20Ladies%20%2b%20Gentlemen%2c%20a%20signed%20OAuth%20request%21


//EXAMPLE AUTH REQUEST TOKEN TO SET USER STATUS (create tweet) WORKING MODEL UPDATED WITH YES HELLO INFORMATION
POST /1/statuses/update.json?include_entities=true HTTP/1.1
Accept: */*
Connection: close
User-Agent: OAuth gem v0.4.4
Content-Type: application/x-www-form-urlencoded
Authorization: 
        OAuth oauth_consumer_key="bvBsXMrvNW119vda02HJNGNcs", 
              oauth_nonce="kYjzVBB8Y0ZFabxSWbWovY3uYSQ2pTgmZeNu2VS4cg", 
              oauth_signature="tnnArxj06cWHq44gCs1OSKk%2FjLY%3D", 
              oauth_signature_method="HMAC-SHA1", 
              oauth_timestamp="1318622958", 
              oauth_token="370773112-GmHxMAgYyLbNEtIKZeRNFsMKPR9EyMZeS9weJAEb", 
              oauth_version="1.0"
Content-Length: 76
Host: api.twitter.com

status=Hello%20Ladies%20%2b%20Gentlemen%2c%20a%20signed%20OAuth%20request%21


// EXAMPLE TO CREATE SIGNATURE:
POST /1/statuses/update.json?include_entities=true HTTP/1.1
Accept: */*
Connection: close
User-Agent: OAuth gem v0.4.4
Content-Type: application/x-www-form-urlencoded
Content-Length: 76
Host: api.twitter.com

status=Hello%20Ladies%20%2b%20Gentlemen%2c%20a%20signed%20OAuth%20request%21

              
              