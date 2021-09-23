<?php

namespace TestNamespace\TestModuleName\Setup;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

        /*
        if (version_compare($context->getVersion(), '1.1.0', '<=')) {
            $setup->getConnection()->addColumn(
                            $setup->getTable( TABLE NAME),
                              COLUMN NAME,
                              [
                                  'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                  'length' => 255,
                                  'nullable' => true,
                                  'comment' => ''
                              ]
                          );
        }
        */

        $setup->endSetup();
    }
}