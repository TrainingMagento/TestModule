<?php

namespace TestNamespace\TestModuleName\Model\ResourceModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('TestNamespace\TestModuleName\Model\Blog',
            'TestNamespace\TestModuleName\Model\ResourceModel\Blog');
    }
}
