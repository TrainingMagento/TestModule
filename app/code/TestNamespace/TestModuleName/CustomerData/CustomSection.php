<?php
namespace TestNamespace\TestModuleName\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomSection implements SectionSourceInterface
{
    public function getSectionData()
    {
        return [
            'time' => date('H:i:s')
        ];
    }
}
