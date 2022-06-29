<?php
/**
 * FileName:UserRoleCommissionRequest.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2022/6/29 0029
 * Time:17:02
 */
declare(strict_types=1);

namespace HuYing\Qdgapisdk\Apis;

use HuYing\Qdgapisdk\ApiReqInterface;

class UserRoleCommissionRequest implements ApiReqInterface {
    private string $openid;
    private array $apiParams;

    /**
     * @return string
     */
    public function getOpenid(): string {
        return $this->openid;
    }

    /**
     * @param string $openid
     */
    public function setOpenid(string $openid): void {
        $this->openid = $openid;
        $this->apiParams["openid"] = $openid;
    }

    public function getApiParams(): array {
        return $this->apiParams;
    }

    public function getUri(): string {
        return "/app/user_info";
    }

    public function getHttpMethod(): string {
        return "post";
    }
}
