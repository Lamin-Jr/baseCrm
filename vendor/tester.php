<?php 
require 'autoload.php';

$client = new \BaseCRM\Client(['accessToken' => 'ab917617d7c8fcb0d7de34cd62dea705a26b2008b5dae2aa1dc7638fe1c83dcc']);
// $client->deals; // \BaseCRM\DealsService

$deals_array = $client->deals->all(["items"=>[]]);
$data_Amount = count($deals_array);
$deals_meta = $client->deals;

print_r ($deals_array[0]["data"]["id"]);

?>
