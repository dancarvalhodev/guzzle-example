<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://httpbin.org',
    'timeout'  => 2.0,
    'auth' => ['fulano@gmail.com', 'fulaninho2006*']
]);

$response = $client->get('http://httpbin.org/basic-auth/fulano@gmail.com/fulaninho2006*');

//$response = $client->post('http://httpbin.org/post', [
//    'multipart' => [
//        [
//            'name' => 'texto',
//            'contents' => 'Um texto muito legal'
//        ]
//    ]
//]);

$body = $response->getBody();

var_dump(json_decode($body));