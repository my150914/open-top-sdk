<?php
/**
 * TOP API: alibaba.einvoice.create.result.get request
 * 
 * @author auto create
 * @since 1.0, 2019.04.11
 */
class AlibabaEinvoiceCreateResultGetRequest
{
	/** 
	 * 外部平台店铺名称，需要在阿里发票平台配置，只有当platform_code不为TB和TM时，这个字段才生效。注意：后台配置的店铺平台必须和入参platform_code一致
	 **/
	private $outShopName;
	
	/** 
	 * 收款方税务登记证号
	 **/
	private $payeeRegisterNo;
	
	/** 
	 * 电商平台代码。淘宝：taobao，天猫：tmall
	 **/
	private $platformCode;
	
	/** 
	 * 电商平台对应的订单号
	 **/
	private $platformTid;
	
	/** 
	 * 流水号 (serial_no)和(platform_code,platform_tid)必须填写其中一组,serial_no优先级更高
	 **/
	private $serialNo;
	
	private $apiParas = array();
	
	public function setOutShopName($outShopName)
	{
		$this->outShopName = $outShopName;
		$this->apiParas["out_shop_name"] = $outShopName;
	}

	public function getOutShopName()
	{
		return $this->outShopName;
	}

	public function setPayeeRegisterNo($payeeRegisterNo)
	{
		$this->payeeRegisterNo = $payeeRegisterNo;
		$this->apiParas["payee_register_no"] = $payeeRegisterNo;
	}

	public function getPayeeRegisterNo()
	{
		return $this->payeeRegisterNo;
	}

	public function setPlatformCode($platformCode)
	{
		$this->platformCode = $platformCode;
		$this->apiParas["platform_code"] = $platformCode;
	}

	public function getPlatformCode()
	{
		return $this->platformCode;
	}

	public function setPlatformTid($platformTid)
	{
		$this->platformTid = $platformTid;
		$this->apiParas["platform_tid"] = $platformTid;
	}

	public function getPlatformTid()
	{
		return $this->platformTid;
	}

	public function setSerialNo($serialNo)
	{
		$this->serialNo = $serialNo;
		$this->apiParas["serial_no"] = $serialNo;
	}

	public function getSerialNo()
	{
		return $this->serialNo;
	}

	public function getApiMethodName()
	{
		return "alibaba.einvoice.create.result.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->payeeRegisterNo,"payeeRegisterNo");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
