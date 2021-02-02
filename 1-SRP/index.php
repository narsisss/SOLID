<?php

class Order {

    /**
     * @var
     */
    protected $products;

    /**
     * @var InvoiceInterface
     */
    protected $invoice;

    /**
     * Order constructor.
     * @param $products
     * @param InvoiceInterface $invoice
     */
    public function __construct($products, InvoiceInterface $invoice)
    {
        $this->products = $products;
        $this->invoice = $invoice;
    }

    /**
     *
     */
    public function process()
    {
        //process Order
    }

    /**
     * @return mixed
     */
    public function invoice()
    {
        // prepare invoice output for Order
        return $this->invoice->output();
    }

}

class OrderModel {

    /**
     * @param Order $order
     */
    public function save(Order $order)
    {
        // save $order
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // update $order
    }

}

interface InvoiceInterface {

    /**
     * @return mixed
     */
    public function output();

}

class PDFInvoice implements InvoiceInterface {

    /**
     * @return mixed|void
     */
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
