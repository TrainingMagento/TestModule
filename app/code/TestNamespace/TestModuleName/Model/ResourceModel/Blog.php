<?php

namespace TestNamespace\TestModuleName\Model\ResourceModel;

class Blog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('test_table', 'entity_id');
    }
}