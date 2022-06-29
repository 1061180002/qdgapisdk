<?php
require_once __DIR__."/../vendor/autoload.php";

use HuYing\Qdgapisdk\Apis\UserRoleCommissionRequest;
use HuYing\Qdgapisdk\ApiSdkClient;

$client = new ApiSdkClient("<appKey>","<appSecret>");
$req = new UserRoleCommissionRequest();
$req->setOpenid("openid");
$resp = $client->execute($req);

var_dump($resp);
