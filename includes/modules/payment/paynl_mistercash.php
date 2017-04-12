<?php
require_once('paynl/paynl.php');

class paynl_mistercash extends paynl
{
    function __construct()
    {
        parent::__construct(
            'paynl mistercash signature',
            '2.0',
            'paynl_mistercash',
            436,
            'MISTERCASH',
            MODULE_PAYMENT_PAYNL_MISTERCASH_TEXT_TITLE,
            MODULE_PAYMENT_PAYNL_MISTERCASH_TEXT_PUBLIC_TITLE,
            MODULE_PAYMENT_PAYNL_MISTERCASH_TEXT_DESCRIPTION,
            defined('MODULE_PAYMENT_PAYNL_MISTERCASH_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_MISTERCASH_SORT_ORDER : 0,
            defined('MODULE_PAYMENT_PAYNL_MISTERCASH_STATUS') && (MODULE_PAYMENT_PAYNL_MISTERCASH_STATUS == 'True') ? true : false,
            defined('MODULE_PAYMENT_PAYNL_MISTERCASH_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_MISTERCASH_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_MISTERCASH_ORDER_STATUS_ID : 0,
            'MODULE_PAYMENT_PAYNL_MISTERCASH_STATUS'
        );
    }
}