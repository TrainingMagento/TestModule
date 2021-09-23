<?php

namespace TestNamespace\TestModuleName\ViewModel;

use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Api\SortOrderBuilder;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use TestNamespace\TestModuleName\Api\Data\BlogInterface;
use TestNamespace\TestModuleName\Model\BlogRepository;
use TestNamespace\TestModuleName\Model\ResourceModel\CollectionFactory;

class TestViewModel implements ArgumentInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;
    /**
     * @var FilterBuilder
     */
    private $filterBuilder;
    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;
    /**
     * @var SortOrderBuilder
     */
    private $sortOrderBuilder;
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    public function __construct(
        CollectionFactory $collectionFactory,
        FilterBuilder $filterBuilder,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        SortOrderBuilder $sortOrderBuilder,
        BlogRepository $blogRepository
    ) {
        $this->collectionFactory = $collectionFactory->create();
        $this->filterBuilder = $filterBuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->sortOrderBuilder = $sortOrderBuilder;
        $this->blogRepository = $blogRepository;
    }

    public function getBlogRepositoryCollection()
    {
        $filters[] = $this->filterBuilder->setConditionType('like')
            ->setField(BlogInterface::TITLE)
            ->setValue('Title%')
            ->create();
        $this->searchCriteriaBuilder->addSortOrder($this->sortOrderBuilder
            ->setField(BlogInterface::ENTITY_ID)
            ->setDirection(SortOrder::SORT_DESC)
            ->create());
        $this->searchCriteriaBuilder->setPageSize(10);
        $this->searchCriteriaBuilder->setCurrentPage(1);
//        $this->searchCriteriaBuilder->addFilters($filters);
        return $this->blogRepository->getList($this->searchCriteriaBuilder->create())->getItems();
    }

    public function getBlogCollection()
    {
        return $this->collectionFactory
            ->addFieldToFilter(BlogInterface::TITLE, ['like' => 'Title%'])
            ->setOrder(BlogInterface::ENTITY_ID, SortOrder::SORT_DESC)
            ->setPageSize(2)
            ->setCurPage(1);
    }

    public function getTitle()
    {
        return 'Hello World';
    }
}
