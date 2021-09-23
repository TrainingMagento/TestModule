<?php

namespace TestNamespace\TestModuleName\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use TestNamespace\TestModuleName\Model\BlogFactory;
use TestNamespace\TestModuleName\Model\BlogRepository;
use TestNamespace\TestModuleName\Model\ResourceModel\Blog;

class Save extends Action
{
    /**
     * @var TestNamespace\TestModuleName\Model\BlogFactory
     */
    private $blogFactory;
    /**
     * @var TestNamespace\TestModuleName\Model\ResourceModel\Blog
     */
    private $blogResource;
    /**
     * @var BlogRepository
     */
    private $blogRepository;
    /**
     * @var \Magento\PageCache\Model\Cache\Type
     */
    private $fullPageCache;
    /**
     * @var \Magento\Framework\App\CacheInterface
     */
    private $cache;

    public function __construct(
        Context $context,
        BlogFactory $blogFactory,
        Blog $blogResource,
        BlogRepository $blogRepository,
        \Magento\PageCache\Model\Cache\Type $fullPageCache,
        \Magento\Framework\App\CacheInterface $cache
    ) {
        parent::__construct($context);
        $this->blogFactory = $blogFactory;
        $this->blogResource = $blogResource;
        $this->blogRepository = $blogRepository;
        $this->fullPageCache = $fullPageCache;
        $this->cache = $cache;
    }

    public function execute()
    {
        $title = $this->getRequest()->getParam('title');
        $content = $this->getRequest()->getParam('content');
        $blogPost = $this->blogFactory->create();
        $blogPost->setData([
            'title' => $title,
            'content' => $content
        ]);
        try {
            $this->blogRepository->save($blogPost);
            $this->cache->clean(['BLOG_TAG']);
            $this->fullPageCache->clean(\Zend_Cache::CLEANING_MODE_MATCHING_TAG, ['BLOG_TAG']);
//            $this->blogResource->save($blogPost);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }

        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $result->setPath('special_url_key/test/test');
        return $result;
    }
}
