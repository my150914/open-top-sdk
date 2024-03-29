<?php

/**
 * results
 * @author auto create
 */
class Dispute
{
	
	/** 
	 * 卖家收货地址
	 **/
	public $address;
	
	/** 
	 * 支付宝单号
	 **/
	public $alipay_no;
	
	/** 
	 * 纠纷单上的各项属性
	 **/
	public $attribute;
	
	/** 
	 * 正向交易单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 买家收货地址（换货）
	 **/
	public $buyer_address;
	
	/** 
	 * 买家发货物流公司（换货）
	 **/
	public $buyer_logistic_name;
	
	/** 
	 * 买家发货物流单号（换货）
	 **/
	public $buyer_logistic_no;
	
	/** 
	 * 买家收货人姓名（换货）
	 **/
	public $buyer_name;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家联系方式（换货）
	 **/
	public $buyer_phone;
	
	/** 
	 * 卖家发货物流单号
	 **/
	public $company_name;
	
	/** 
	 * 纠纷单创建时间
	 **/
	public $created;
	
	/** 
	 * 纠纷说明
	 **/
	public $desc;
	
	/** 
	 * 纠纷类型，常见的有：仅退款、退货退款、换货
	 **/
	public $dispute_request;
	
	/** 
	 * 买家退货时间
	 **/
	public $good_return_time;
	
	/** 
	 * 货物状态
	 **/
	public $good_status;
	
	/** 
	 * 买家是否需要退货。可选值:true(是),false(否)
	 **/
	public $has_good_return;
	
	/** 
	 * 纠纷单修改时间
	 **/
	public $modified;
	
	/** 
	 * 买家购买数量
	 **/
	public $num;
	
	/** 
	 * 子订单号。如果是单笔交易oid会等于tid
	 **/
	public $oid;
	
	/** 
	 * 退款对应的订单交易状态。可选值TRADE_NO_CREATE_PAY(没有创建支付宝交易) WAIT_BUYER_PAY(等待买家付款) WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) TRADE_BUYER_SIGNED(买家已签收,货到付款专用) TRADE_FINISHED(交易成功) TRADE_CLOSED(交易关闭) TRADE_CLOSED_BY_TAOBAO(交易被淘宝关闭) ALL_WAIT_PAY(包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY) ALL_CLOSED(包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO) 取自&quot;http://open.taobao.com/dev/index.php/%E4%BA%A4%E6%98%93%E7%8A%B6%E6%80%81&quot;
	 **/
	public $order_status;
	
	/** 
	 * 退款原因
	 **/
	public $reason;
	
	/** 
	 * 退还金额(退还给买家的金额)。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $refund_fee;
	
	/** 
	 * 纠纷单号id
	 **/
	public $refund_id;
	
	/** 
	 * 退款阶段，可选值：onsale/aftersale
	 **/
	public $refund_phase;
	
	/** 
	 * 卖家发货物流公司（换货）
	 **/
	public $seller_logistic_name;
	
	/** 
	 * 卖家发货物流单号（换货）
	 **/
	public $seller_logistic_no;
	
	/** 
	 * 逆向纠纷状态。其中，仅退款/退货退款的状态为：(1, "买家已经申请退款，等待卖家同意"),(2, "卖家已经同意退款，等待买家退货"),(3, "买家已经退货，等待卖家确认收货"),(4, "退款关闭"),(5, "退款成功"),(6, "卖家拒绝退款”),(7, "等待买家确认重新邮寄的货物"),(8, "等待卖家确认退货地址")；换货的状态为：(1, "换货待处理"),(2, "待买家退货"),(3, "买家已退货，待收货"),(4, "换货关闭"),(5, "换货成功"),(6, "待买家修改"),(12, "待发出换货商品"),(13, "待买家收货"),(14, "请退款")
	 **/
	public $status;
	
	/** 
	 * 超时时间
	 **/
	public $time_out;
	
	/** 
	 * 商品名称
	 **/
	public $title;	
}
?>