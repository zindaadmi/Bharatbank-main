<?php

namespace  Bank\Operations;
class Transfer{
    private $Accountno;
    private $amt;
    public function __Construct($Accountno,$amt){
        $this->Accountno=$Accountno;
        $this->amt=$amt;
    }
    function addcash()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        $json1 = file_get_contents('Transaction.json');
        $json_data1 = json_decode($json1, true);
        $json2 = file_get_contents('Transaction2.json');
        $json_data2 = json_decode($json2, true);



        if ($this->Accountno== $json_data['users'][0]['AccountNo']) {
            $json_data['users'][0]['Amount'] = $json_data['users'][0]['Amount'] + $this->amt;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            array_push($json_data1,$this->amt);
            $json_newdata1 =  json_encode($json_data1);
            file_put_contents('Transaction.json',$json_newdata1);



            return $json_data['users'][0]['Amount'];
        }
        else if($this->Accountno== $json_data['users'][1]['AccountNo']) {
            $json_data['users'][1]['Amount'] = $json_data['users'][1]['Amount'] + $this->amt;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            array_push($json_data2,$this->amt);
            $json_newdata2 =  json_encode($json_data2);
            file_put_contents('Transaction2.json',$json_newdata2);
            return $json_data['users'][1]['Amount'];

        }

    }
}
