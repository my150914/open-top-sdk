<?php

/**
 * 彩票赠送的统计数据DO
 * @author auto create
 */
class LotteryWangcaiPresentStat
{
	
	/** 
	 * 日期
	 **/
	public $date_id;
	
	/** 
	 * 当日赠送彩票的金额
	 **/
	public $present_fee;
	
	/** 
	 * 当日赠送彩票的注数
	 **/
	public $present_stake;
	
	/** 
	 * 当日赠送用户数
	 **/
	public $present_user;
	
	/** 
	 * 送彩方的淘宝数字ID
	 **/
	public $seller_id;	
}
?>