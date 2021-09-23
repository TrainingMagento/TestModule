<?php

namespace TestNamespace\TestModuleName\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use TestNamespace\TestModuleName\Api\BlogRepositoryInterface;
use TestNamespace\TestModuleName\Api\Data\BlogInterface;
use TestNamespace\TestModuleName\Api\Data\BlogSearchResultInterfaceFactory;
use TestNamespace\TestModuleName\Api\Data\BlogSearchResultInterface;
use TestNamespace\TestModuleName\Model\ResourceModel\CollectionFactory;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * @var ResourceModel\Blog
     */
    private $blogResource;
    /**
     * @var BlogFactory
     */
    private $blogFactory;
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;
    /**
     * @var BlogSearchResultInterfaceFactory
     */
    private $blogSearchResultInterfaceFactory;

    public function __construct(
        \TestNamespace\TestModuleName\Model\ResourceModel\Blog $blogResource,
        BlogFactory $blogFactory,
        CollectionFactory $collectionFactory,
        CollectionProcessorInterface $collectionProcessor,
        BlogSearchResultInterfaceFactory $blogSearchResultInterfaceFactory
    ) {
        $this->blogResource = $blogResource;
        $this->blogFactory = $blogFactory;
        $this->collectionFactory = $collectionFactory;
        $this->collectionProcessor = $collectionProcessor;
        $this->blogSearchResultInterfaceFactory = $blogSearchResultInterfaceFactory;
    }

    /**
     * @param BlogInterface $blog
     * @return BlogInterface
     * @throws CouldNotDeleteException
     */
    public function save(BlogInterface $blog)
    {
        try {
            $this->blogResource->save($blog);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return $blog;
    }

    /**
     * @param $blogId
     * @return BlogInterface|Blog
     * @throws NoSuchEntityException
     */
    public function getById($blogId)
    {
        $blogModel = $this->blogFactory->create();
        $this->blogResource->load($blogModel, $blogId);
        if (!$blogModel->getId()) {
            throw new NoSuchEntityException(__('%1 does not exist', $blogId));
        }

        return $blogModel;
    }

    /**
     * @param BlogInterface $blog
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(BlogInterface $blog)
    {
        try {
            $this->blogResource->delete($blog);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
        return true;
    }

    /**
     * @param $blogId
     * @return bool|void
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($blogId)
    {
        $this->delete($this->getById($blogId));
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return BlogSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var \TestNamespace\TestModuleName\Api\Data\BlogSearchResultInterface $searchResult */
        $searchResult = $this->blogSearchResultInterfaceFactory->create();
        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setItems($collection->getItems());
        $searchResult->setTotalCount($collection->getSize());
        return $searchResult;
    }
}
