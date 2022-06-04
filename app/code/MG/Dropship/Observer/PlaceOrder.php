<?php
namespace MG\Dropship\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class PlaceOrder implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $event = $observer->getEvent();
        $order = $event->getOrder();
        $quote = $event->getQuote();

        if ($quote->getDropship()) {
            $order->setDropship($quote->getDropship());
        }
        return $this;
    }
}