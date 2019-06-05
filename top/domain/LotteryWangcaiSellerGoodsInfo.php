<?php

/**
 * 卖家商品信息
 * @author auto create
 */
class LotteryWangcaiSellerGoodsInfo
{
	
	/** 
	 * 活动开始时间
	 **/
	public $act_begin_time;
	
	/** 
	 * 活动结束时间
	 **/
	public $act_end_time;
	
	/** 
	 * 商品id
	 **/
	public $goods_id;
	
	/** 
	 * 彩种id
	 **/
	public $lottery_type_id;
	
	/** 
	 * 赠送类型：0：满就送，1：好评送，2：分享送，3：游戏送，4：收藏送
	 **/
	public $present_type;	
}
?>