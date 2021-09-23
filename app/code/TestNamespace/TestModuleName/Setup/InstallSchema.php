<?php

namespace TestNamespace\TestModuleName\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     *
     *
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /*
        $tableName = ':: EDIT ME ::';
        if (!$installer->tableExists($tableName)) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable($tableName)
            )
            ->addColumn(
                $tableName.'_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true,
                ],
                'ID'
            )
            ->addColumn(
                'text_examle',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable => false'],
                'Comment Here'
            )
            ->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'Created At'
            )
            ->addIndex(
                $installer->getIdxName($tableName, [COLUMN_NAME]),
                [COLUMN_NAME]
            )
            ->addForeignKey(
                $installer->getFkName($tableName, COLUMN_NAME, $tableNameFkName, COLUMNFK_NAME),
                COLUMN_NAME,
                $installer->getTable($tableNameFkName),
                COLUMNFK_NAME,
                Table::ACTION_CASCADE
            )
            ->setComment('Optional Comment');

            $installer->getConnection()->createTable($table);

            // example to add index
            $installer->getConnection()->addIndex(
                $installer->getTable($tableName),
                $installer->getIdxName(
                    $installer->getTable($tableName),
                    [ 'column1', 'column2', ... ],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                [ 'column1', 'column2', ... ],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }

        */

        $installer->endSetup();
    }
}