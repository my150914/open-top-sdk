<?php
/**
 * TOP API: taobao.qianniu.cloudkefu.onlinestatuslog.get request
 * 
 * @author auto create
 * @since 1.0, 2018.10.08
 */
class QianniuCloudkefuOnlinestatuslogGetRequest
{
	/** 
	 * 子帐号列表，最多10个
	 **/
	private $accountIds;
	
	/** 
	 * 查询结束日期，只有日期有效，时间忽略
	 **/
	private $endDate;
	
	/** 
	 * 查询开始日期，只有日期有效，时间忽略
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setAccountIds($accountIds)
	{
		$this->accountIds = $accountIds;
		$this->apiParas["account_ids"] = $accountIds;
	}

	public function getAccountIds()
	{
		return $this->accountIds;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.cloudkefu.onlinestatuslog.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accountIds,"accountIds");
		RequestCheckUtil::checkMaxListSize($this->accountIds,5,"accountIds");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
