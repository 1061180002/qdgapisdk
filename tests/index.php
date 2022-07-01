<?php
require_once __DIR__."/../vendor/autoload.php";

use HuYingKeJi\Qdgapisdk\Apis\UserRoleCommissionRequest;
use HuYingKeJi\Qdgapisdk\ApiSdkClient;

$client = new ApiSdkClient("qdgf2a6bd1f67cdd3b4","1593a92e4f73fc49247b1c0a8d9845e0");
$req = new UserRoleCommissionRequest();
$req->setOpenid("0All7mWFhhybrv07n2oQLA==");
$resp = $client->execute($req);

var_dump($resp);
