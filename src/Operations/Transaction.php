<?php
namespace Bank\Operations;

/**
 *
 */



class Transaction
{   private $Accountno;
    public function __Construct($Accountno){
        $this->Accountno=$Accountno;
    }
    public function statement()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        $json1 = file_get_contents('Transaction.json');
        $json_data1 = json_decode($json1, true);
        $json2 = file_get_contents('Transaction2.json');
        $json_data2 = json_decode($json2, true);
        if ($this->Accountno== $json_data['users'][0]['AccountNo']){
            return($json_data1);
        }
        else if($this->Accountno== $json_data['users'][1]['AccountNo']){
            return($json_data2);
        }



    }
}
