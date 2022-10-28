<?php
/**
 * Worker: qdgapisdk
 * Author: Zhangzhe
 * DateTime: 2022/10/28 0028 13:44
 */
declare(strict_types=1);

namespace HuYingKeJi\Qdgapisdk\Apis;

use HuYingKeJi\Qdgapisdk\ApiReqInterface;

class WeChatPayRequest implements ApiReqInterface {
	/**
	 * @var string 渠道鸽openid
	 */
	private string $openid;
	/**
	 * @var array 总数据
	 */
	private array $apiParams;
	/**
	 * @var string 订单号
	 */
	private string $orderNo;
	/**
	 * @var string 回调地址
	 */
	private string $notify;
	/**
	 * @var string 介绍
	 */
	private string $description;
	/**
	 * @var string 过期时间
	 */
	private string $timeExpire;
	/**
	 * @var int 支付金额
	 */
	private int $total;
	/**
	 * @var string 支付类型 H5 MP_APP APP JSAPI
	 */
	private string $payType;

	/**
	 * @param string $payType
	 */
	public function setPayType(string $payType): void {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}


	/**
	 * @param string $description
	 */
	public function setDescription(string $description): void {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}

	/**
	 * @param string $time_expire
	 */
	public function setTimeExpire(string $timeExpire): void {
		$this->timeExpire = $timeExpire;
		$this->apiParams["timeExpire"] = $timeExpire;
	}

	/**
	 * @param int $total
	 */
	public function setTotal(int $total): void {
		$this->total = $total;
		$this->apiParams["total"] = $total;
	}

	/**
	 * @param string $notify
	 */
	public function setNotify(string $notify): void {
		$this->notify = $notify;
		$this->apiParams["notify"] = $notify;
	}


	/**
	 * @param string $orderNo
	 */
	public function setOrderNo(string $orderNo): void {
		$this->apiParams["orderNo"] = $orderNo;
		$this->orderNo = $orderNo;
	}


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
	 * 请求地址
	 * @return array
	 */
	public function getApiParams(): array {
		return $this->apiParams;
	}

	public function getUri(): string {
		return "/qdg/wechat_pay";
	}

	public function getHttpMethod(): string {
		return "post";
	}
}