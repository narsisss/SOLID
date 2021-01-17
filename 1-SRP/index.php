<?php

class Order {

    protected $products;

    /**
     * @var InvoiceInterface
     */
    protected $invoice;

    public function __construct($products, InvoiceInterface $invoice)
    {
        $this->products = $products;
        $this->invoice = $invoice;
    }

    public function process()
    {
        //process Order
    }

    public function invoice()
    {
        // prepare invoice output for Order
        return $this->invoice->output();
    }

}

class OrderModel {

    public function save(Order $order)
    {
        // save $order
    }

    public function update(Order $order)
    {
        // update $order
    }

}

interface InvoiceInterface {

    public function output();

}

class PDFInvoice implements InvoiceInterface {

    public function output()
    {
        // return pdf
    }
}


$products = [
    'product1',
    'product2',
    'product3',
];

$order = new Order($products, new PDFInvoice());
$order->process();

$orderModel = new OrderModel();
$orderModel->save($order);

$order->invoice();
