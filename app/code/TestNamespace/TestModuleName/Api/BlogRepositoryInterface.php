<?php

namespace TestNamespace\TestModuleName\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use TestNamespace\TestModuleName\Api\Data\BlogInterface;
use TestNamespace\TestModuleName\Api\Data\BlogSearchResultInterface;

interface BlogRepositoryInterface
{
    /**
     * @param BlogInterface $blog
     * @return BlogInterface
     */
    public function save(BlogInterface $blog);

    /**
     * @param $blogId
     * @return BlogInterface
     */
    public function getById($blogId);

    /**
     * @param BlogInterface $blog
     * @return bool
     */
    public function delete(BlogInterface $blog);

    /**
     * @param $blogId
     * @return bool
     */
    public function deleteById($blogId);

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return BlogSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}