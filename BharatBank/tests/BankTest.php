<?php

class BankTest extends \PHPUnit\Framework\TestCase
{

    private $balance;
    private $tId;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->balance = (new \Bank\Bank)->getBalance(123456);

        $this->tId = (new \Bank\Bank)->getStatement(123456);
    }


    public function testCash()
    {

        $bank = new \Bank\Bank;
        $result = $bank->cash(123456, 500);
        $this->assertEquals($this->balance+500, $result);
    }


    public function testGetBalance()
    {
        $bank = new \Bank\Bank;
        $result = $bank->getBalance(123456);
        $this->assertEquals($this->balance, $result);
    }

    /**
     * @return void
     * TODO: Create the testcases getStatement with returning the json objects
     */
    public function testGetStatement()
    {
        $bank = new \Bank\Bank;
        $result = $bank->getStatement(123456);


        $this->assertEquals($this->tId,$result);
    }

    /**
     * @return void
     * TODO: has the amount been deducted from 123456 and the amount has been received by the destination 456738 and
     * TODO: check if the balance and return array or objects for results

    public function testA2a()
    {
        $bank = new \Bank\Bank;
        $result = $bank->a2a(123456, 456738, 200);


        $this->assertEquals(13400, $result);
    }
*/
}