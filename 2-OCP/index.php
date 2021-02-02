<?php

interface PaymentInterface {

    /**
     * @return mixed
     */
    public function pay();

}

class Wallet implements PaymentInterface {

    /**
     * @return mixed|void
     */
    public function pay()
    {
        echo "pay from wallet \n";
    }

}

class OnlineGateway implements PaymentInterface {

    /**
     * @return mixed|void
     */
    public function pay()
    {
        echo "pay from online gateways \n";
    }

}

class Payment {

    /**
     * @var
     */
    private $method;

    /**
     * Payment constructor.
     * @param $method
     */
    public function __construct($method)
    {
        $this->method = $method;
    }

    /**
     *
     */
    public function pay()
    {
        // do some transaction and then call pay method ....
        $this->method->pay();
    }

}

$method1 = new Wallet();

$payment = new Payment($method1);

$method2 = new OnlineGateway();

$payment = new Payment($method1);
$payment->pay();
