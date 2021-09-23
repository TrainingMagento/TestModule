<?php

namespace VendorName\ModuleName\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TestModel extends AbstractDb
{

    protected function _construct()
    {
        $this->_init(
            'test_table',
            'test_table_id'
        );
    }

}
