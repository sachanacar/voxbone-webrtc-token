<?php


$username = ''; // Voxbone account name
$secret = ''; // Voxbone webrtc password

function cleanHmacDigest($hmac) {
    while ((strlen($hmac) % 4 != 0)) {
        $hmac .= '=';
    }
    $hmac = str_replace(' ', '+', $hmac);
    return $hmac;
};


$expires = time() + 300;
$text = $expires . ':' . $username;
$key = cleanHmacDigest(base64_encode(hash_hmac('sha1', $text, $secret, true)));

// Structure output array
$output = array('key'=>$key,'expires'=>$expires,'username'=>$username);

// Output as JSON
header('Content-Type: application/json');
echo json_encode($output);

?>