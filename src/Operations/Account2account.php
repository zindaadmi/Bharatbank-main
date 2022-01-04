<?php
namespace Bank\Operations;

class Account2account
{   private $source, $destination, $amount;
    public function __Construct($source, $destination, $amount){
        $this->source=$source;
        $this->destination=$destination;
        $this->amount=$amount;

    }
    public function a2a()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        $json1 = file_get_contents('Transaction.json');
        $json_data1 = json_decode($json1, true);
        $json2 = file_get_contents('Transaction2.json');
        $json_data2 = json_decode($json2, true);
        if (($this->source == $json_data['users'][0]['AccountNo'] && $this->destination == $json_data['users'][1]['AccountNo'])){
            $json_data['users'][0]['Amount'] = $json_data['users'][0]['Amount'] - $this->amount;
            $json_data['users'][1]['Amount'] = $json_data['users'][1]['Amount'] + $this->amount;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            array_push($json_data1,$this->amount);
            $json_newdata1 =  json_encode($json_data1);
            file_put_contents('Transaction.json',$json_newdata1);
            array_push($json_data2,$this->amount);
            $json_newdata2 =  json_encode($json_data2);
            file_put_contents('Transaction2.json',$json_newdata2);
        return $json_data['users'][1]['Amount'];}
        else if (($this->source == $json_data['users'][1]['AccountNo'] && $this->destination == $json_data['users'][0]['AccountNo'])){
            $json_data['users'][1]['Amount'] = $json_data['users'][1]['Amount'] - $this->amount;
            $json_data['users'][0]['Amount'] = $json_data['users'][0]['Amount'] + $this->amount;
            $json_newdata =  json_encode($json_data);
            file_put_contents('Bank.json',$json_newdata);
            array_push($json_data1,$this->amount);
            $json_newdata1 =  json_encode($json_data1);
            file_put_contents('Transaction.json',$json_newdata1);
            array_push($json_data2,$this->amount);
            $json_newdata2 =  json_encode($json_data2);
            file_put_contents('Transaction2.json',$json_newdata2);
            return $json_data['users'][0]['Amount'];     }




    }
}

