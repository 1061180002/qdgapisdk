<?php
/**
 * FileName:Signer.php
 * Author:ZhangZhe
 * Email:1061180002@qq.com
 * Date:2022/6/29 0029
 * Time:16:10
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgapisdk;

class Signer {

    public static function generateSign(array $body, string $secret): string {
        $str = "";
        foreach ($body as $key => $item) {
            $str .= $key . $item;
        }
        $str .= $secret;
        return strtolower(md5($str));
    }

    public static function checkSign(array $content, string $secret): bool {
        $array = $content;
        $sign = $array['sign'];
        unset($array["sign"]);
        ksort($array);
        $str = "";
        foreach ($array as $key => $val) {
            $str .= $key . $val;
        }
        $str .= $secret;
        $sig = strtoupper(md5($str));
        return $sign == $sig;
    }
}
