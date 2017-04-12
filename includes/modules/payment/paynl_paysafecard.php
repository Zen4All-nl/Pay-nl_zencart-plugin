<?php
require_once('paynl/paynl.php');

class paynl_paysafecard extends paynl
{
    function __construct()
    {
        parent::__construct(
            'paynl paysafecard signature',
            '2.0',
            'paynl_paysafecard',
            553,
            'PAYSAFECARD',
            MODULE_PAYMENT_PAYNL_PAYSAFECARD_TEXT_TITLE,
            MODULE_PAYMENT_PAYNL_PAYSAFECARD_TEXT_PUBLIC_TITLE,
            MODULE_PAYMENT_PAYNL_PAYSAFECARD_TEXT_DESCRIPTION,
            defined('MODULE_PAYMENT_PAYNL_PAYSAFECARD_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_PAYSAFECARD_SORT_ORDER : 0,
            defined('MODULE_PAYMENT_PAYNL_PAYSAFECARD_STATUS') && (MODULE_PAYMENT_PAYNL_PAYSAFECARD_STATUS == 'True') ? true : false,
            defined('MODULE_PAYMENT_PAYNL_PAYSAFECARD_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_PAYSAFECARD_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_PAYSAFECARD_ORDER_STATUS_ID : 0,
            'MODULE_PAYMENT_PAYNL_PAYSAFECARD_STATUS'
        );
    }
}