<?php

/**
 * module
 * @author auto create
 */
class RecordList
{
	
	/** 
	 * 查询记录的帐号ID
	 **/
	public $account_id;
	
	/** 
	 * 变更时间
	 **/
	public $change_time;
	
	/** 
	 * 变更时间戳
	 **/
	public $change_time_ts;
	
	/** 
	 * 登陆域
	 **/
	public $domain;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * mainAccountId
	 **/
	public $main_account_id;
	
	/** 
	 * 操作记录，1在线，-1离线，2挂起，3解挂
	 **/
	public $status;
	
	/** 
	 * 记录类型，PC上下线：8；移动上下线：4；挂起类型：5
	 **/
	public $type;	
}
?>