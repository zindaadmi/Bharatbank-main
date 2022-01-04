<?php

namespace Bank\Contracts;



interface Bankinterface
{

    /**
     * @param $Accountno
     * @param $amt
     * @return int
     */
    function cash($Accountno, $amt): int;

    /**
     * @param $Accountno
     * @return int
     */
    function getBalance($Accountno): int;

    /**
     * @param $Accountno
     * @return array
     */
    function getStatement($Accountno): array;

    /**
     * @param $source
     * @param $destination
     * @param $amount
     * @return int
     */
    function Account2($source, $destination, $amount): int;
}