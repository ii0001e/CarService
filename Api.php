<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://car-data.p.rapidapi.com/cars');
$request->setRequestMethod('GET');
$request->setQuery(new http\QueryString([
    'limit' => '10',
    'page' => '0'
]));

$request->setHeaders([
    'X-RapidAPI-Key' => '76e2cf634bmshb45db7d5c61c0f3p10a181jsneadcd9778bf1',
    'X-RapidAPI-Host' => 'car-data.p.rapidapi.com'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();

