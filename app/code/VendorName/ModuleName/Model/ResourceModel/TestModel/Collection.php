<?php

namespace VendorName\ModuleName\Model\ResourceModel\TestModel;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'test_table_id';


    protected function _construct()
    {
        $this->_init(
            'VendorName\ModuleName\Model\TestModel',
            'VendorName\ModuleName\Model\ResourceModel\TestModel'
        );
    }

}
