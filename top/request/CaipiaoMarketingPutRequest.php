<?php
/**
 * TOP API: taobao.caipiao.marketing.put request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CaipiaoMarketingPutRequest
{
	/** 
	 * 活动详情设置
	 **/
	private $detail;
	
	private $apiParas = array();
	
	public function setDetail($detail)
	{
		$this->detail = $detail;
		$this->apiParas["detail"] = $detail;
	}

	public function getDetail()
	{
		return $this->detail;
	}

	public function getApiMethodName()
	{
		return "taobao.caipiao.marketing.put";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
