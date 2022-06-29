### 渠道鸽平台api接口SDK

安装

```shell
composer require huying/qdgapisdk
```

样例

```phpregexp
required __DIR__."/../verdor/autoload.php";

use HuYing\Qdgapisdk\Apis\UserRoleCommissionRequest;
use HuYing\Qdgapisdk\ApiSdkClient;

$client = new ApiSdkClient("<appKey>","<appSecret>");
$req = new UserRoleCommissionRequest();
$req->setOpenid("openid");
$resp = $client->execute($req);

var_dump($resp);
```
