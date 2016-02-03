<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paynl_ideal
 *
 * @author gaetan
 */
require_once('paynl/paynl.php');

class paynl_vvvgiftcard extends paynl
{
  function paynl_vvvgiftcard()
  {
    
    parent::__construct(
        'paynl vvvgiftcard signature',
        '2.0',
        'paynl_vvvgiftcard',
        1714,
        'VVVGIFTCARD' ,
        MODULE_PAYMENT_PAYNL_VVVGIFTCARD_TEXT_TITLE,
        MODULE_PAYMENT_PAYNL_VVVGIFTCARD_TEXT_PUBLIC_TITLE,
        MODULE_PAYMENT_PAYNL_VVVGIFTCARD_TEXT_DESCRIPTION,
        defined('MODULE_PAYMENT_PAYNL_VVVGIFTCARD_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_VVVGIFTCARD_SORT_ORDER : 0,
        defined('MODULE_PAYMENT_PAYNL_VVVGIFTCARD_STATUS') && (MODULE_PAYMENT_PAYNL_VVVGIFTCARD_STATUS == 'True') ? true : false,
        defined('MODULE_PAYMENT_PAYNL_VVVGIFTCARD_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_VVVGIFTCARD_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_VVVGIFTCARD_ORDER_STATUS_ID : 0,
        'MODULE_PAYMENT_PAYNL_VVVGIFTCARD_STATUS'
    );

    
  }//end constructor
  
  
}