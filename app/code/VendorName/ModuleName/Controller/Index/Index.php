<?php

namespace VendorName\ModuleName\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use VendorName\ModuleName\SomeFolderName\SomeClassInterface;

class Index extends Action
{
    /**
     * @var SomeClassInterface
     */
    private $someClass;

    public function __construct(
        Context $context,
        SomeClassInterface $someClass
    ) {
        parent::__construct($context);
        $this->someClass = $someClass;
    }

    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
//        $this->someClass->setSomeValue('the value from action class');
//        print_r($this->someClass->getSomeValue());
    }
}
