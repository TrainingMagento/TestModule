<?php

namespace VendorName\ModuleName\Plugin;

class Test
{
    public function beforeSetSomeValue(\VendorName\ModuleName\SomeFolderName\SomeClassName $subject, $value)
    {
        echo 'before SET plugin </br>';
        $value = 'before SET plugin - ' . $value;
        return [$value];
    }

    public function aroundSetSomeValue(\VendorName\ModuleName\SomeFolderName\SomeClassName $subject, callable $proceed, $value)
    {
        $value = 'before SET around - ' . $value;
        echo 'before around plugin </br>';
        //before
        $result = $proceed($value);
        echo 'after around plugin </br>';
        //after
        return $result;
    }

    public function afterSetSomeValue(\VendorName\ModuleName\SomeFolderName\SomeClassName $subject, $result)
    {
        echo 'after SET plugin </br>';
        return $result;
    }

//    public function aroundGetSomeValue(\VendorName\ModuleName\SomeFolderName\SomeClassName $subject, callable $proceed)
//    {
//        //before
//        $result = $proceed();
//        //after
//        return $result . 'after GET around';
//    }
//
//    public function afterGetSomeValue(\VendorName\ModuleName\SomeFolderName\SomeClassName $subject, $result)
//    {
//        return $result . ' - after GET plugin';
//    }
}