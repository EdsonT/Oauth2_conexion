<?
ini_set('display_errors', 'On');
error_reporting(E_ALL);

require('config.php');

//$url = "https://accounts.google.com/o/oauth2/auth";
$url = "https://graph.facebook.com/oauth/authorize";
// build the HTTP GET query
$params = array(
    "response_type" => "code",
    "client_id" => $oauth2_client_id,
    "redirect_uri" => $oauth2_redirect,
    "scope" => "https://www.googleapis.com/auth/calendar"
    );
 
$request_to = $url . '?' . http_build_query($params);
 
// forward the user to the login access page on the OAuth 2 server
header("Location: " . $request_to);

?>
