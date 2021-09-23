<?php

namespace VendorName\ModuleName\SomeFolderName;

class SomeClassName implements SomeClassInterface
{
    private $someValue = 'some static value';

    public function someMethod()
    {
        return [
            'some value'
        ];
    }
    
    public function setSomeValue($value)
    {
        return $this->someValue = $value;
    }

    public function getSomeValue()
    {
        return $this->someValue;
    }
}
