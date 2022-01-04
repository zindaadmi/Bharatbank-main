<?php
namespace Bank\Operations;

class Balance
{   private $Accountno;
    public function __Construct($Accountno){
        $this->Accountno=$Accountno;
    }
    public function bal()
    {
        $json = file_get_contents('Bank.json');

        $json_data = json_decode($json, true);
        if ($this->Accountno == $json_data['users'][0]['AccountNo'])
            return ($json_data['users'][0]['Amount']);
        else if ($this->Accountno == $json_data['users'][1]['AccountNo'])
            return ($json_data['users'][1]['Amount']);

    }
}


