<?php
namespace Payment;
class Payment {

    private $productionServer = "https://secure.payu.in/_payment";
    private $testingServer = "https://test.payu.in/_payment";
    private $isProduction = false;

    private $testData = array(
        "key" => "JBZaLc",
        "salt" => "GQs7yium"
    );

    private $key;
    private $salt;

    function __construct($key = "", $salt = "")
    {
        if($key==null||$salt==null||trim($key)==""||trim($salt) ==""){
            $this->key = $this->testData['key'];
            $this->salt = $this->testData['salt'];
            $this->isProduction = false;
        } else {
            $this->isProduction = true;
        }
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
    }


}