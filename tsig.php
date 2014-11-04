<?php

//Generate random 32 bit string for oauth_nonce
$rand=mt_rand(1000000000,2147483647);
$nonce=md5(base64_encode($rand));

//Generate timestamp
$timestamp=time();

$urlback=rawurlencode('http://www.strongwooddrums.com/yh/yhtwitter.php');

$key=bvBsXMrvNW119vda02HJNGNcs;
$secret=zC8sDQHho9aYT9CvasBJrBopB7B3jMFVGUv5SecsL42TQBqpQB;
$method=HMAC-SHA1;
$token=2858956378-Roa3IsRfGw2FEnJaPUSvMXQb38E4TOmUhUHCn1E;


$top="POST https://api.twitter.com/oauth/request_token HTTP/1.1 \r\n Accept: */* \r\n "
$params="include_entities=true&oauth_callback=".$urlback."&oauth_consumer_key=".$key."&oauth_nonce=".$nonce."&oauth_signature_method=".$method."&oauth_timestamp=".$timestamp;


$sigbase="POST";
$sigbase.="&";
$sigbase.=rawurlencode('https://api.twitter.com/oauth/request_token');
$sigbase.="&";
$sigbase.=rawurlencode($params);

$signingkey=rawurlencode(zC8sDQHho9aYT9CvasBJrBopB7B3jMFVGUv5SecsL42TQBqpQB)."&".rawurlencode(a59pjrt2jfPSlslHWQdlDkJMZDchRwTCXoYEYRNabS0Yd);
$algo=sha1;
$rawsig=hash_hmac($algo,$sigbase,$signingkey);
$finalsig=base64_encode($rawsig);


POST https://api.twitter.com/oauth/request_token HTTP/1.1
Accept: */*
OAuth oauth_nonce="K7ny27JTpKVsTgdyLdDfmQQWVLERj2zAK5BslRsqyw", 
oauth_callback="http%3A%2F%2Fmyapp.com%3A3005%2Ftwitter%2Fprocess_callback", 
oauth_signature_method="HMAC-SHA1", 
oauth_timestamp="1300228849", 
oauth_consumer_key="OqEqJeafRSF11jBMStrZz", 
oauth_signature="Pc%2BMLdv028fxCErFyi8KXFM%2BddU%3D", 
oauth_version="1.0"