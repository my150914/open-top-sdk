<?php
/**
 * TOP API: taobao.wangwang.eservice.chatrelation.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class WangwangEserviceChatrelationGetRequest
{
	/** 
	 * 请求参数
	 **/
	private $chatRelationRequest;
	
	private $apiParas = array();
	
	public function setChatRelationRequest($chatRelationRequest)
	{
		$this->chatRelationRequest = $chatRelationRequest;
		$this->apiParas["chat_relation_request"] = $chatRelationRequest;
	}

	public function getChatRelationRequest()
	{
		return $this->chatRelationRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.chatrelation.get";
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
