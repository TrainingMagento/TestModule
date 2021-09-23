<?php
namespace TestNamespace\TestModuleName\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Brand extends AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => ('Adidas'), 'value' => 'adidas'],
                ['label' => ('Nike'), 'value' => 'nike'],
                ['label' => ('Apple'), 'value' => 'apple']
            ];
        }
        return $this->_options;
    }
}
