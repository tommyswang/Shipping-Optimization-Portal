<?php
$id = $_GET['select'];

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://24.189.66.225/backend/nodeBackend/'.$id.'',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
]);

// Send the request & save response to $resp
$resp = curl_exec($curl);
echo '<embed style=width:100% height:100% src = '.$resp.'></embed>';
// Close request to clear up some resources
curl_close($curl);





 ?>
