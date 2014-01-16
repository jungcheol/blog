<?php




class OrderInfo extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $order_id;
     
    /**
     *
     * @var integer
     */
    public $order_no;
     
    /**
     *
     * @var integer
     */
    public $payment_id;
     
    /**
     *
     * @var integer
     */
    public $deal_id;
     
    /**
     *
     * @var string
     */
    public $deal_name;
     
    /**
     *
     * @var integer
     */
    public $m_id;
     
    /**
     *
     * @var integer
     */
    public $order_time;
     
    /**
     *
     * @var integer
     */
    public $login_time;
     
    /**
     *
     * @var string
     */
    public $sender_name;
     
    /**
     *
     * @var string
     */
    public $order_name;
     
    /**
     *
     * @var integer
     */
    public $sale_start_time;
     
    /**
     *
     * @var integer
     */
    public $sale_end_time;
     
    /**
     *
     * @var string
     */
    public $order_email;
     
    /**
     *
     * @var string
     */
    public $order_mobile;
     
    /**
     *
     * @var string
     */
    public $gift_email;
     
    /**
     *
     * @var string
     */
    public $gift_mobile;
     
    /**
     *
     * @var integer
     */
    public $payment_method;
     
    /**
     *
     * @var integer
     */
    public $voucher_yn;
     
    /**
     *
     * @var string
     */
    public $voucher_code;
     
    /**
     *
     * @var integer
     */
    public $point_value;
     
    /**
     *
     * @var integer
     */
    public $point_value_ext;
     
    /**
     *
     * @var integer
     */
    public $point_reserve_value;
     
    /**
     *
     * @var integer
     */
    public $point_reserve_flag;
     
    /**
     *
     * @var integer
     */
    public $qty;
     
    /**
     *
     * @var integer
     */
    public $price_unit;
     
    /**
     *
     * @var integer
     */
    public $price_org;
     
    /**
     *
     * @var integer
     */
    public $price_ship;
     
    /**
     *
     * @var integer
     */
    public $total_amount;
     
    /**
     *
     * @var integer
     */
    public $final_qty;
     
    /**
     *
     * @var integer
     */
    public $payment_amount;
     
    /**
     *
     * @var integer
     */
    public $refund_duration;
     
    /**
     *
     * @var integer
     */
    public $usable_today;
     
    /**
     *
     * @var integer
     */
    public $trade_yn;
     
    /**
     *
     * @var integer
     */
    public $goods_yn;
     
    /**
     *
     * @var integer
     */
    public $gift_yn;
     
    /**
     *
     * @var integer
     */
    public $order_status;
     
    /**
     *
     * @var string
     */
    public $pg_trx_no;
     
    /**
     *
     * @var string
     */
    public $pg_auth_no;
     
    /**
     *
     * @var integer
     */
    public $ship_status;
     
    /**
     *
     * @var string
     */
    public $aff_order_no;
     
    /**
     *
     * @var integer
     */
    public $aff_m_id;
     
    /**
     *
     * @var integer
     */
    public $settle_status;
     
    /**
     *
     * @var string
     */
    public $order_uptime;
     
    /**
     *
     * @var string
     */
    public $hrcode;
     
    /**
     *
     * @var integer
     */
    public $sale_coupon_price;
     
    /**
     *
     * @var integer
     */
    public $sale_coupon_partner_price;
     
    /**
     *
     * @var integer
     */
    public $sale_coupon_partner_ship;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'order_id' => 'order_id', 
            'order_no' => 'order_no', 
            'payment_id' => 'payment_id', 
            'deal_id' => 'deal_id', 
            'deal_name' => 'deal_name', 
            'm_id' => 'm_id', 
            'order_time' => 'order_time', 
            'login_time' => 'login_time', 
            'sender_name' => 'sender_name', 
            'order_name' => 'order_name', 
            'sale_start_time' => 'sale_start_time', 
            'sale_end_time' => 'sale_end_time', 
            'order_email' => 'order_email', 
            'order_mobile' => 'order_mobile', 
            'gift_email' => 'gift_email', 
            'gift_mobile' => 'gift_mobile', 
            'payment_method' => 'payment_method', 
            'voucher_yn' => 'voucher_yn', 
            'voucher_code' => 'voucher_code', 
            'point_value' => 'point_value', 
            'point_value_ext' => 'point_value_ext', 
            'point_reserve_value' => 'point_reserve_value', 
            'point_reserve_flag' => 'point_reserve_flag', 
            'qty' => 'qty', 
            'price_unit' => 'price_unit', 
            'price_org' => 'price_org', 
            'price_ship' => 'price_ship', 
            'total_amount' => 'total_amount', 
            'final_qty' => 'final_qty', 
            'payment_amount' => 'payment_amount', 
            'refund_duration' => 'refund_duration', 
            'usable_today' => 'usable_today', 
            'trade_yn' => 'trade_yn', 
            'goods_yn' => 'goods_yn', 
            'gift_yn' => 'gift_yn', 
            'order_status' => 'order_status', 
            'pg_trx_no' => 'pg_trx_no', 
            'pg_auth_no' => 'pg_auth_no', 
            'ship_status' => 'ship_status', 
            'aff_order_no' => 'aff_order_no', 
            'aff_m_id' => 'aff_m_id', 
            'settle_status' => 'settle_status', 
            'order_uptime' => 'order_uptime', 
            'hrcode' => 'hrcode', 
            'sale_coupon_price' => 'sale_coupon_price', 
            'sale_coupon_partner_price' => 'sale_coupon_partner_price', 
            'sale_coupon_partner_ship' => 'sale_coupon_partner_ship'
        );
    }

}
