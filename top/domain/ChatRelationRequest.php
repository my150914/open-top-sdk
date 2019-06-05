<?php

/**
 * 请求参数
 * @author auto create
 */
class ChatRelationRequest
{
	
	/** 
	 * 查询起始时间（精度到天）
	 **/
	public $beg;
	
	/** 
	 * 查询条数
	 **/
	public $count;
	
	/** 
	 * 查询结束时间（精度到天）
	 **/
	public $end;
	
	/** 
	 * 翻页查询起始key
	 **/
	public $page_beg;
	
	/** 
	 * 翻页查询结束key
	 **/
	public $page_end;
	
	/** 
	 * 查询账号
	 **/
	public $uid;	
}
?>