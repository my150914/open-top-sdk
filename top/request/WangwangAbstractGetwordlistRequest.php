<?php
/**
 * TOP API: taobao.wangwang.abstract.getwordlist request
 * 
 * @author auto create
 * @since 1.0, 2014.11.11
 */
class WangwangAbstractGetwordlistRequest
{
	/** 
	 * 传入参数的字符集
	 **/
	private $charset;
	
	private $apiParas = array();
	
	public function setCharset($charset)
	{
		$this->charset = $charset;
		$this->apiParas["charset"] = $charset;
	}

	public function getCharset()
	{
		return $this->charset;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.abstract.getwordlist";
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
