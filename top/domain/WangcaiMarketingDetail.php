<?php

/**
 * 活动详情设置
 * @author auto create
 */
class WangcaiMarketingDetail
{
	
	/** 
	 * 活动ID,一个活动可以关联多个送彩票设置
	 **/
	public $activity_id;
	
	/** 
	 * 活动名称
	 **/
	public $activity_name;
	
	/** 
	 * 活动类型,0全店/1指定商品
	 **/
	public $activity_type;
	
	/** 
	 * 活动开始时间
	 **/
	public $begin_time;
	
	/** 
	 * 外部系统主键
	 **/
	public $biz_id;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_time;
	
	/** 
	 * 参与活动的商品ID
	 **/
	public $items;
	
	/** 
	 * 赠送的彩种,1双色球/8大乐透
	 **/
	public $lottery_type_id;
	
	/** 
	 * 活动的最小金额门槛,以分为单位
	 **/
	public $min_amount;
	
	/** 
	 * 赠送的彩票注数
	 **/
	public $quantity;	
}
?>