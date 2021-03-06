<?php
require_once('paynl/paynl.php');

class paynl_cartebleue extends paynl
{
    function __construct()
    {
        parent::__construct(
            'paynl cartebleue signature',
            '2.0',
            'paynl_cartebleue',
            710,
            'CARTEBLEUE',
            MODULE_PAYMENT_PAYNL_CARTEBLEUE_TEXT_TITLE,
            MODULE_PAYMENT_PAYNL_CARTEBLEUE_TEXT_PUBLIC_TITLE,
            MODULE_PAYMENT_PAYNL_CARTEBLEUE_TEXT_DESCRIPTION,
            defined('MODULE_PAYMENT_PAYNL_CARTEBLEUE_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_CARTEBLEUE_SORT_ORDER : 0,
            defined('MODULE_PAYMENT_PAYNL_CARTEBLEUE_STATUS') && (MODULE_PAYMENT_PAYNL_CARTEBLEUE_STATUS == 'True') ? true : false,
            defined('MODULE_PAYMENT_PAYNL_CARTEBLEUE_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_CARTEBLEUE_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_CARTEBLEUE_ORDER_STATUS_ID : 0,
            'MODULE_PAYMENT_PAYNL_CARTEBLEUE_STATUS'
        );
    }
}