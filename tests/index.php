<?php
require_once __DIR__."/../vendor/autoload.php";

use HuYingKeJi\Qdgapisdk\Apis\UserRoleCommissionRequest;
use HuYingKeJi\Qdgapisdk\ApiSdkClient;

$client = new ApiSdkClient("<appKey>","<appSecret>");
$req = new UserRoleCommissionRequest();
$req->setOpenid("openid");
$resp = $client->execute($req);

var_dump($resp);
