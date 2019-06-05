<?php

/**
 * result
 * @author auto create
 */
class ChatRelationResult
{
	
	/** 
	 * 返回码
	 **/
	public $code;
	
	/** 
	 * 结束key。如果该值为空，则表示请求时间区间内的数据已经拿完。否则，表示区间内还有数据，可以将该值作为下次请求条件的page_beg传入进行迭代请求。
	 **/
	public $end_key;
	
	/** 
	 * 关系列表
	 **/
	public $peers;
	
	/** 
	 * 错误原因
	 **/
	public $reason;
	
	/** 
	 * 起始key。如果要实现上翻页，可以将该值作为下次请求的page_end
	 **/
	public $start_key;	
}
?>