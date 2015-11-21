<?php
ini_set('display_errors', 1);
require_once('BigDataApplication.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "4230900963-O61AlmcRtsn6WsaZq1n0KbpaYa6vUZIaJfefEeW",
    'oauth_access_token_secret' => "YI3TAzkyvZIIEV8s78CFXo7v7gPeuAmDfbVRpQ4klsw7q",
    'consumer_key' => "uRF0o2s6h0de2FAfcvPhmz1Fa",
    'consumer_secret' => "tUNf7DQQ7Tfr7SE9UWvUsGiae3ZF1ahjo0vNzWxEijNIs6hhKS"
);
/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';
/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);
/** Perform a POST request and echo the response **/
$twitter = new BigDataApplication($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/followers/ids.json';
$getfield = '?screen_name=BigDataProject';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>
