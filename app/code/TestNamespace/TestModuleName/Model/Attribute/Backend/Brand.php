<?php
namespace TestNamespace\TestModuleName\Model\Attribute\Backend;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;
use Magento\Framework\Exception\LocalizedException;

class Brand extends AbstractBackend
{
    public function validate($object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        if (($value == 'apple') && ($object->getAttributeSetId() == 15)) {
            throw new LocalizedException(__('Bag can not be apple'));
        }
        return true;
    }
}
