<?php
/**
 * TOP API: taobao.qianniu.kefueval.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class QianniuKefuevalGetRequest
{
	/** 
	 * 开始时间，格式yyyyMMddHHmmss
	 **/
	private $btime;
	
	/** 
	 * 结束时间,格式yyyyMMddHHmmss
	 **/
	private $etime;
	
	/** 
	 * 客服的nick，多个用逗号分隔，不要超过10个，带cntaobao的长nick
	 **/
	private $queryIds;
	
	private $apiParas = array();
	
	public function setBtime($btime)
	{
		$this->btime = $btime;
		$this->apiParas["btime"] = $btime;
	}

	public function getBtime()
	{
		return $this->btime;
	}

	public function setEtime($etime)
	{
		$this->etime = $etime;
		$this->apiParas["etime"] = $etime;
	}

	public function getEtime()
	{
		return $this->etime;
	}

	public function setQueryIds($queryIds)
	{
		$this->queryIds = $queryIds;
		$this->apiParas["query_ids"] = $queryIds;
	}

	public function getQueryIds()
	{
		return $this->queryIds;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.kefueval.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->btime,"btime");
		RequestCheckUtil::checkNotNull($this->etime,"etime");
		RequestCheckUtil::checkNotNull($this->queryIds,"queryIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
