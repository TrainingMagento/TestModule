<?php

namespace TestNamespace\TestModuleName\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        // if (version_compare($context->getVersion(), '1.1.0', '<=')) {
        //     $setup->getConnection()->query( SOME QUERY);
        // }

        $setup->endSetup();
    }
}