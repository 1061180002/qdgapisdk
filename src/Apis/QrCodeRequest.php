<?php
/**
 * Worker: qdgapisdk
 * Author: Zhangzhe
 * DateTime: 2022/11/3 0003 14:26
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgapisdk\Apis;

use HuYingKeJi\Qdgapisdk\ApiReqInterface;

class QrCodeRequest implements ApiReqInterface {
	private string $openid;
	private array $apiParams;
	private string $content;

	/**
	 * @param string $openid
	 */
	public function setOpenid(string $openid): void {
		$this->openid = $openid;
		$this->apiParams["openid"] = $openid;
	}

	/**
	 * @param array $apiParams
	 */
	public function setApiParams(array $apiParams): void {
		$this->apiParams = $apiParams;
	}

	/**
	 * @param string $content
	 */
	public function setContent(string $content): void {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}


	public function getApiParams(): array {
		return $this->apiParams;
	}

	public function getUri(): string {
		return "/qdg/qrcode_generate";
	}

	public function getHttpMethod(): string {
		return "post";
	}
}