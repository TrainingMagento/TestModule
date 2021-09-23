<?php

namespace TestNamespace\TestModuleName\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Test extends Action
{
    public function execute()
    {
//        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
//        $data = [
//            'some' => 'test',
//            'data' => '1'
//        ];
//        $result->setData($data);
//        return $result;
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setHeader('Content-Type', 'text/xml');
//        $result->setContents('<user><name>Test Name</name></user>');
//        return $result;
//        $this->_forward('Index', 'Index', 'test_front_name');
//        $result = $this->resultFactory->create(ResultFactory::TYPE_FORWARD);
//        $result->forward('noroute');
//        return $result;
//        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//        $result->setPath('test_front_name/index/index');
//        return $result;
//        /** @var Page $page */
//        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//        $page->addHandle('test_handle');
//        print_r($page->getLayout()->getUpdate()->getHandles());
//        exit;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//        echo $this->getRequest()->getParam('test_param_key', 'some_default_value');
    }
}
