<?php
/**
 * FileName:UserRoleCommissionRequest.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2022/6/29 0029
 * Time:17:02
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgapisdk\Apis;

use HuYingKeJi\Qdgapisdk\ApiReqInterface;

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

    /**
     * 请求地址
     * @return array
     */
    public function getApiParams(): array {
        return $this->apiParams;
    }

    public function getUri(): string {
        return "/qdg/user_tree_path";
    }

    public function getHttpMethod(): string {
        return "post";
    }
}
