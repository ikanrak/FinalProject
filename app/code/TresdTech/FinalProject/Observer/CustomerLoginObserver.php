<?php
namespace TresdTech\FinalProject\Observer;


use \Magento\Framework\Event\ObserverInterface;


class CustomerLoginObserver implements ObserverInterface

{
    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager
    ) {
        $this->messageManager = $messageManager;
    }




    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
        $name = $customer->getName();
        $this->messageManager->addSuccessMessage(__('Bienvenido %1', $name));
    }



}
