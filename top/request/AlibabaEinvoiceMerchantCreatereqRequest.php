<?php
/**
 * TOP API: alibaba.einvoice.merchant.createreq request
 * 
 * @author auto create
 * @since 1.0, 2019.02.20
 */
class AlibabaEinvoiceMerchantCreatereqRequest
{
	/** 
	 * 开票申请ID，接收了开票申请消息后，需要把apply_id带上
	 **/
	private $applyId;
	
	/** 
	 * 默认：0。对于商家对个人开具，为0;对于商家对企业开具，为1;
	 **/
	private $businessType;
	
	/** 
	 * ERP系统中的单据号。如果没有erp的唯一单据号。建议使用platform_code+”_”+ platform_tid的组合方式
	 **/
	private $erpTid;
	
	/** 
	 * 开票金额； <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
	 **/
	private $invoiceAmount;
	
	/** 
	 * 电子发票明细
	 **/
	private $invoiceItems;
	
	/** 
	 * 发票种类，0=电子发票,1=纸质发票,2=专票
	 **/
	private $invoiceKind;
	
	/** 
	 * 发票备注，有些省市会把此信息打印到PDF中
	 **/
	private $invoiceMemo;
	
	/** 
	 * 发票(开票)类型，蓝票blue,红票red，默认blue
	 **/
	private $invoiceType;
	
	/** 
	 * 原发票代码(开红票时传入)
	 **/
	private $normalInvoiceCode;
	
	/** 
	 * 原发票号码(开红票时传入)
	 **/
	private $normalInvoiceNo;
	
	/** 
	 * 开票方地址(新版中为必传)
	 **/
	private $payeeAddress;
	
	/** 
	 * 开票方银行及 帐号
	 **/
	private $payeeBankaccount;
	
	/** 
	 * 复核人
	 **/
	private $payeeChecker;
	
	/** 
	 * 开票方名称，公司名(如:XX商城)
	 **/
	private $payeeName;
	
	/** 
	 * 开票人
	 **/
	private $payeeOperator;
	
	/** 
	 * 收款方电话
	 **/
	private $payeePhone;
	
	/** 
	 * 收款人
	 **/
	private $payeeReceiver;
	
	/** 
	 * 收款方税务登记证号
	 **/
	private $payeeRegisterNo;
	
	/** 
	 * 消费者地址
	 **/
	private $payerAddress;
	
	/** 
	 * 付款方开票开户银行及账号
	 **/
	private $payerBankaccount;
	
	/** 
	 * 消费者电子邮箱
	 **/
	private $payerEmail;
	
	/** 
	 * 付款方名称, 对应发票台头
	 **/
	private $payerName;
	
	/** 
	 * 消费者联系电话
	 **/
	private $payerPhone;
	
	/** 
	 * 付款方税务登记证号。对企业开具电子发票时必填。目前北京地区暂未开放对企业开具电子发票，若北京地区放开后，对于向企业开具的情况，付款方税务登记证号和名称也不能为空
	 **/
	private $payerRegisterNo;
	
	/** 
	 * 电商平台代码。TB=淘宝 、TM=天猫 、JD=京东、DD=当当、PP=拍拍、YX=易讯、EBAY=ebay、QQ=QQ网购、AMAZON=亚马逊、SN=苏宁、GM=国美、WPH=唯品会、JM=聚美、LF=乐蜂、MGJ=蘑菇街、JS=聚尚、PX=拍鞋、YT=银泰、YHD=1号店、VANCL=凡客、YL=邮乐、YG=优购、1688=阿里巴巴、POS=POS门店、OTHER=其他,  (只传英文编码)
	 **/
	private $platformCode;
	
	/** 
	 * 电商平台对应的主订单号
	 **/
	private $platformTid;
	
	/** 
	 * 红字通知单号，冲红时需要，商家跟税局申请
	 **/
	private $redNoticeNo;
	
	/** 
	 * 开票流水号，唯一标志开票请求。如果两次请求流水号相同，则表示重复请求。请调用平台统一流水号获取接口，alibaba.einvoice.serialno.generate。
	 **/
	private $serialNo;
	
	/** 
	 * 合计金额(新版中为必传) <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
	 **/
	private $sumPrice;
	
	/** 
	 * 合计税额 <span style="color:red;font-weight: bold;">当开红票时，该字段为负数</span>
	 **/
	private $sumTax;
	
	private $apiParas = array();
	
	public function setApplyId($applyId)
	{
		$this->applyId = $applyId;
		$this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId()
	{
		return $this->applyId;
	}

	public function setBusinessType($businessType)
	{
		$this->businessType = $businessType;
		$this->apiParas["business_type"] = $businessType;
	}

	public function getBusinessType()
	{
		return $this->businessType;
	}

	public function setErpTid($erpTid)
	{
		$this->erpTid = $erpTid;
		$this->apiParas["erp_tid"] = $erpTid;
	}

	public function getErpTid()
	{
		return $this->erpTid;
	}

	public function setInvoiceAmount($invoiceAmount)
	{
		$this->invoiceAmount = $invoiceAmount;
		$this->apiParas["invoice_amount"] = $invoiceAmount;
	}

	public function getInvoiceAmount()
	{
		return $this->invoiceAmount;
	}

	public function setInvoiceItems($invoiceItems)
	{
		$this->invoiceItems = $invoiceItems;
		$this->apiParas["invoice_items"] = $invoiceItems;
	}

	public function getInvoiceItems()
	{
		return $this->invoiceItems;
	}

	public function setInvoiceKind($invoiceKind)
	{
		$this->invoiceKind = $invoiceKind;
		$this->apiParas["invoice_kind"] = $invoiceKind;
	}

	public function getInvoiceKind()
	{
		return $this->invoiceKind;
	}

	public function setInvoiceMemo($invoiceMemo)
	{
		$this->invoiceMemo = $invoiceMemo;
		$this->apiParas["invoice_memo"] = $invoiceMemo;
	}

	public function getInvoiceMemo()
	{
		return $this->invoiceMemo;
	}

	public function setInvoiceType($invoiceType)
	{
		$this->invoiceType = $invoiceType;
		$this->apiParas["invoice_type"] = $invoiceType;
	}

	public function getInvoiceType()
	{
		return $this->invoiceType;
	}

	public function setNormalInvoiceCode($normalInvoiceCode)
	{
		$this->normalInvoiceCode = $normalInvoiceCode;
		$this->apiParas["normal_invoice_code"] = $normalInvoiceCode;
	}

	public function getNormalInvoiceCode()
	{
		return $this->normalInvoiceCode;
	}

	public function setNormalInvoiceNo($normalInvoiceNo)
	{
		$this->normalInvoiceNo = $normalInvoiceNo;
		$this->apiParas["normal_invoice_no"] = $normalInvoiceNo;
	}

	public function getNormalInvoiceNo()
	{
		return $this->normalInvoiceNo;
	}

	public function setPayeeAddress($payeeAddress)
	{
		$this->payeeAddress = $payeeAddress;
		$this->apiParas["payee_address"] = $payeeAddress;
	}

	public function getPayeeAddress()
	{
		return $this->payeeAddress;
	}

	public function setPayeeBankaccount($payeeBankaccount)
	{
		$this->payeeBankaccount = $payeeBankaccount;
		$this->apiParas["payee_bankaccount"] = $payeeBankaccount;
	}

	public function getPayeeBankaccount()
	{
		return $this->payeeBankaccount;
	}

	public function setPayeeChecker($payeeChecker)
	{
		$this->payeeChecker = $payeeChecker;
		$this->apiParas["payee_checker"] = $payeeChecker;
	}

	public function getPayeeChecker()
	{
		return $this->payeeChecker;
	}

	public function setPayeeName($payeeName)
	{
		$this->payeeName = $payeeName;
		$this->apiParas["payee_name"] = $payeeName;
	}

	public function getPayeeName()
	{
		return $this->payeeName;
	}

	public function setPayeeOperator($payeeOperator)
	{
		$this->payeeOperator = $payeeOperator;
		$this->apiParas["payee_operator"] = $payeeOperator;
	}

	public function getPayeeOperator()
	{
		return $this->payeeOperator;
	}

	public function setPayeePhone($payeePhone)
	{
		$this->payeePhone = $payeePhone;
		$this->apiParas["payee_phone"] = $payeePhone;
	}

	public function getPayeePhone()
	{
		return $this->payeePhone;
	}

	public function setPayeeReceiver($payeeReceiver)
	{
		$this->payeeReceiver = $payeeReceiver;
		$this->apiParas["payee_receiver"] = $payeeReceiver;
	}

	public function getPayeeReceiver()
	{
		return $this->payeeReceiver;
	}

	public function setPayeeRegisterNo($payeeRegisterNo)
	{
		$this->payeeRegisterNo = $payeeRegisterNo;
		$this->apiParas["payee_register_no"] = $payeeRegisterNo;
	}

	public function getPayeeRegisterNo()
	{
		return $this->payeeRegisterNo;
	}

	public function setPayerAddress($payerAddress)
	{
		$this->payerAddress = $payerAddress;
		$this->apiParas["payer_address"] = $payerAddress;
	}

	public function getPayerAddress()
	{
		return $this->payerAddress;
	}

	public function setPayerBankaccount($payerBankaccount)
	{
		$this->payerBankaccount = $payerBankaccount;
		$this->apiParas["payer_bankaccount"] = $payerBankaccount;
	}

	public function getPayerBankaccount()
	{
		return $this->payerBankaccount;
	}

	public function setPayerEmail($payerEmail)
	{
		$this->payerEmail = $payerEmail;
		$this->apiParas["payer_email"] = $payerEmail;
	}

	public function getPayerEmail()
	{
		return $this->payerEmail;
	}

	public function setPayerName($payerName)
	{
		$this->payerName = $payerName;
		$this->apiParas["payer_name"] = $payerName;
	}

	public function getPayerName()
	{
		return $this->payerName;
	}

	public function setPayerPhone($payerPhone)
	{
		$this->payerPhone = $payerPhone;
		$this->apiParas["payer_phone"] = $payerPhone;
	}

	public function getPayerPhone()
	{
		return $this->payerPhone;
	}

	public function setPayerRegisterNo($payerRegisterNo)
	{
		$this->payerRegisterNo = $payerRegisterNo;
		$this->apiParas["payer_register_no"] = $payerRegisterNo;
	}

	public function getPayerRegisterNo()
	{
		return $this->payerRegisterNo;
	}

	public function setPlatformCode($platformCode)
	{
		$this->platformCode = $platformCode;
		$this->apiParas["platform_code"] = $platformCode;
	}

	public function getPlatformCode()
	{
		return $this->platformCode;
	}

	public function setPlatformTid($platformTid)
	{
		$this->platformTid = $platformTid;
		$this->apiParas["platform_tid"] = $platformTid;
	}

	public function getPlatformTid()
	{
		return $this->platformTid;
	}

	public function setRedNoticeNo($redNoticeNo)
	{
		$this->redNoticeNo = $redNoticeNo;
		$this->apiParas["red_notice_no"] = $redNoticeNo;
	}

	public function getRedNoticeNo()
	{
		return $this->redNoticeNo;
	}

	public function setSerialNo($serialNo)
	{
		$this->serialNo = $serialNo;
		$this->apiParas["serial_no"] = $serialNo;
	}

	public function getSerialNo()
	{
		return $this->serialNo;
	}

	public function setSumPrice($sumPrice)
	{
		$this->sumPrice = $sumPrice;
		$this->apiParas["sum_price"] = $sumPrice;
	}

	public function getSumPrice()
	{
		return $this->sumPrice;
	}

	public function setSumTax($sumTax)
	{
		$this->sumTax = $sumTax;
		$this->apiParas["sum_tax"] = $sumTax;
	}

	public function getSumTax()
	{
		return $this->sumTax;
	}

	public function getApiMethodName()
	{
		return "alibaba.einvoice.merchant.createreq";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->businessType,"businessType");
		RequestCheckUtil::checkNotNull($this->invoiceAmount,"invoiceAmount");
		RequestCheckUtil::checkMaxLength($this->invoiceMemo,200,"invoiceMemo");
		RequestCheckUtil::checkNotNull($this->invoiceType,"invoiceType");
		RequestCheckUtil::checkMaxLength($this->normalInvoiceCode,12,"normalInvoiceCode");
		RequestCheckUtil::checkMaxLength($this->normalInvoiceNo,8,"normalInvoiceNo");
		RequestCheckUtil::checkNotNull($this->payeeAddress,"payeeAddress");
		RequestCheckUtil::checkMaxLength($this->payeeAddress,100,"payeeAddress");
		RequestCheckUtil::checkMaxLength($this->payeeBankaccount,100,"payeeBankaccount");
		RequestCheckUtil::checkMaxLength($this->payeeChecker,8,"payeeChecker");
		RequestCheckUtil::checkNotNull($this->payeeName,"payeeName");
		RequestCheckUtil::checkMaxLength($this->payeeName,100,"payeeName");
		RequestCheckUtil::checkNotNull($this->payeeOperator,"payeeOperator");
		RequestCheckUtil::checkMaxLength($this->payeeOperator,8,"payeeOperator");
		RequestCheckUtil::checkMaxLength($this->payeePhone,20,"payeePhone");
		RequestCheckUtil::checkMaxLength($this->payeeReceiver,8,"payeeReceiver");
		RequestCheckUtil::checkNotNull($this->payeeRegisterNo,"payeeRegisterNo");
		RequestCheckUtil::checkMaxLength($this->payeeRegisterNo,20,"payeeRegisterNo");
		RequestCheckUtil::checkMaxLength($this->payerAddress,100,"payerAddress");
		RequestCheckUtil::checkMaxLength($this->payerBankaccount,100,"payerBankaccount");
		RequestCheckUtil::checkNotNull($this->payerName,"payerName");
		RequestCheckUtil::checkMaxLength($this->payerName,100,"payerName");
		RequestCheckUtil::checkMaxLength($this->payerPhone,20,"payerPhone");
		RequestCheckUtil::checkMaxLength($this->payerRegisterNo,20,"payerRegisterNo");
		RequestCheckUtil::checkNotNull($this->platformCode,"platformCode");
		RequestCheckUtil::checkNotNull($this->platformTid,"platformTid");
		RequestCheckUtil::checkNotNull($this->serialNo,"serialNo");
		RequestCheckUtil::checkMaxLength($this->serialNo,20,"serialNo");
		RequestCheckUtil::checkNotNull($this->sumPrice,"sumPrice");
		RequestCheckUtil::checkNotNull($this->sumTax,"sumTax");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
