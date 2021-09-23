<?php
declare(strict_types=1);
namespace TestNamespace\TestModuleName\Setup\Patch\Data;

use Magento\Catalog\Model\Product;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Eav\Setup\EavSetupFactory;

/**
 * Class EnableDirectiveParsing
 * @package Magento\Catalog\Setup\Patch
 */
class AddNewBrandAttribute implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * PatchInitial constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        $eavSetup = $this->eavSetupFactory->create();
        $eavSetup->addAttribute(
            Product::ENTITY,
            'brand',
            [
                'group' => 'General',
                'type' => 'varchar',
                'label' => 'Brand',
                'source' => 'TestNamespace\TestModuleName\Model\Attribute\Source\Brand',
                'frontend' => 'TestNamespace\TestModuleName\Model\Attribute\Frontend\Brand',
                'backend' => 'TestNamespace\TestModuleName\Model\Attribute\Backend\Brand',
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible_on_front' => true,
                'is_html_allowed_on_front' => true,
                'input' => 'select',
                'required' => false,
                'sort_order' => 50,
                'is_used_in_grid' => false,
                'is_visible_in_grid' => false,
                'is_filterable_in_gri' => false
            ]
        );
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
