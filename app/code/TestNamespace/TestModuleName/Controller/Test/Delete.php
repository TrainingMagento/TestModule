<?php

namespace TestNamespace\TestModuleName\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use TestNamespace\TestModuleName\Model\BlogFactory;
use TestNamespace\TestModuleName\Model\BlogRepository;
use TestNamespace\TestModuleName\Model\ResourceModel\Blog;

class Delete extends Action
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

    public function __construct(
        Context $context,
        BlogFactory $blogFactory,
        Blog $blogResource,
        BlogRepository $blogRepository
    ) {
        parent::__construct($context);
        $this->blogFactory = $blogFactory;
        $this->blogResource = $blogResource;
        $this->blogRepository = $blogRepository;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');

//        $blogPost = $this->blogFactory->create();

//        $blogPost->setId($id);

        try {
            $this->blogRepository->deleteById($id);
//            $this->blogResource->delete($blogPost);
        } catch (\Exception $e) {

        }

        $result = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $result->setPath('special_url_key/test/test');
        return $result;
    }
}
