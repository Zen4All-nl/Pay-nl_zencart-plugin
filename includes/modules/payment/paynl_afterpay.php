<?php
require_once('paynl/paynl.php');

class paynl_afterpay extends paynl
{
    function __construct()
    {
        parent::__construct(
            'paynl afterpay signature',
            '2.0',
            'paynl_afterpay',
            739,
            'AFTERPAY',
            MODULE_PAYMENT_PAYNL_AFTERPAY_TEXT_TITLE,
            MODULE_PAYMENT_PAYNL_AFTERPAY_TEXT_PUBLIC_TITLE,
            MODULE_PAYMENT_PAYNL_AFTERPAY_TEXT_DESCRIPTION,
            defined('MODULE_PAYMENT_PAYNL_AFTERPAY_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_AFTERPAY_SORT_ORDER : 0,
            defined('MODULE_PAYMENT_PAYNL_AFTERPAY_STATUS') && (MODULE_PAYMENT_PAYNL_AFTERPAY_STATUS == 'True') ? true : false,
            defined('MODULE_PAYMENT_PAYNL_AFTERPAY_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_AFTERPAY_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_AFTERPAY_ORDER_STATUS_ID : 0,
            'MODULE_PAYMENT_PAYNL_AFTERPAY_STATUS'
        );
    }
}