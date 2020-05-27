<?php
// Your PHP installation needs cUrl support, which not all PHP installations
// include by default.
// To run under docker:
// docker run -v $PWD:/code php:7.3.2-alpine php /code/code_sample.php
class sms{
function send_message ( $post_body, $url, $username, $password) {
  $ch = curl_init( );
  $headers = array(
  'Content-Type:application/json',
  'Authorization:Basic '. base64_encode("$username:$password")
  );
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt ( $ch, CURLOPT_URL, $url );
  curl_setopt ( $ch, CURLOPT_POST, 1 );
  curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
  curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
  // Allow cUrl functions 20 seconds to execute
  curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
  // Wait 10 seconds while trying to connect
  curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
  $output = array();
  $output['server_response'] = curl_exec( $ch );
  $curl_info = curl_getinfo( $ch );
  $output['http_status'] = $curl_info[ 'http_code' ];
  $output['error'] = curl_error($ch);
  curl_close( $ch );
  return $output;
} 
}




/*if ($result['http_status'] != 201) {
  print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
} else {
  print "Response " . $result['server_response'];
  // Use json_decode($result['server_response']) to work with the response further
}*/


?>  