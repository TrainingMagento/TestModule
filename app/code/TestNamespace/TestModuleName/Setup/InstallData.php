<?php

namespace TestNamespace\TestModuleName\Setup;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        //     $setup->getConnection()->query( SOME QUERY);

        $setup->endSetup();
    }
}