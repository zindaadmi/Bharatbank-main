<?php

namespace Bank;
require ("vendor/autoload.php");

use Bank\Contracts\Bankinterface;
use Bank\Operations\Transfer;
use Bank\Operations\Balance;
use Bank\Operations\Transaction;
use Bank\Operations\Account2account;

/**
 *
 */
 class Bank implements Bankinterface
 {

     /**
      * @param $Accountno
      * @param $amt
      * @return int
      */

    function cash($Accountno, $amt): int
    {
        $obj = new Transfer($Accountno,$amt);
        return ($obj->addcash());
    }

     /**
      * @param $Accountno
      * @return int
      */
    function getBalance($Accountno): int
    {
        $obj = new Balance($Accountno);
        return $obj->bal();
    }

     /**
      * @param $Accountno
      * @return int
      */
    function getStatement($Accountno): array
    {
        $obj = new Transaction($Accountno);
        return $obj->statement();
    }

     /**
      * @param $source
      * @param $destination
      * @param $amount
      * @return int
      */
    function Account2($source, $destination, $amount): int
    {
        $obj = new Account2account($source, $destination, $amount);
        return $obj->a2a();
    }
}
