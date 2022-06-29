<?php
/**
 * FileName:Http.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2022/6/29 0029
 * Time:16:15
 */
declare(strict_types=1);

namespace HuYing\Qdgapisdk;

use HuYing\Qdgapisdk\Exceptions\ApiSdkHttpException;

/**
 * NameSpace: HuYing\Qdgapisdk
 * ClassName: Http
 * 描述:http工具类
 */
class Http {
    /**
     * @param string $url
     * @param array $data
     * @param array $header
     * @return bool|string
     * @throws \HuYing\Qdgapisdk\Exceptions\ApiSdkHttpException
     */
    public static function httpGet(string $url, array $data = [], array $header = []) {
        return self::httpRequest("get", $url, $data, $header);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $header
     * @return bool|string
     * @throws \HuYing\Qdgapisdk\Exceptions\ApiSdkHttpException
     */
    public static function httpPost(string $url, array $data = [], array $header = []) {
        return self::httpRequest("post", $url, $data, $header);
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @param array $header
     * @return bool|string
     * @throws \HuYing\Qdgapisdk\Exceptions\ApiSdkHttpException
     */
    private static function httpRequest(string $method, string $url, array $data, array $header = []) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        if ("post" === strtolower($method)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_URL, $url);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url . "?" . http_build_query($data));
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $errmsg = curl_error($ch);
        $errcode = curl_errno($ch);
        $curlInfo = curl_getinfo($ch);
        if ($curlInfo['http_code'] !== 200) {
            curl_close($ch);
            throw new ApiSdkHttpException($errmsg ?: "响应出现错误!请检查参数设置");
        }
        if (curl_error($ch) || $output == false || $errcode != 0) {
            curl_close($ch);
            throw new ApiSdkHttpException($errmsg ?: "请求出现错误!请检查参数设置");
        }
        curl_close($ch);
        return $output;
    }
}

















