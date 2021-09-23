<?php

namespace VendorName\ModuleName\Model;

use Magento\Framework\Model\AbstractModel;
use VendorName\ModuleName\Api\Data\TestModelInterface;
use Magento\Framework\DataObject\IdentityInterface;

class TestModel extends AbstractModel implements TestModelInterface, IdentityInterface
{
    const CACHE_TAG = 'vendorname_modulename_testmodel';
    protected $_cacheTag = 'vendorname_modulename_testmodel';
    protected $_eventPrefix = 'vendorname_modulename_testmodel';

    protected function _construct()
    {
        $this->_init(
            'VendorName\ModuleName\Model\ResourceModel\TestModel'
        );
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
