<?php

namespace TestNamespace\TestModuleName\Block;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\View\Element\Template;

class TestBlock extends Template implements IdentityInterface
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->addData([
           'cache_lifetime' => 3600,
           'cache_tags' => ['BLOG_TAG'],
           'cache_key' => 'BLOG_CACHE',
        ]);
    }

    public function getIdentities()
    {
        return ['BLOG_TAG'];
    }

    public function getSomeInformation()
    {
        return 'Some important information';
    }
}
