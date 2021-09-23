<?php

namespace TestNamespace\TestModuleName\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface BlogSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \TestNamespace\TestModuleName\Api\Data\BlogInterface[]
     */
    public function getItems();

    /**
     * @param \TestNamespace\TestModuleName\Api\Data\BlogInterface[] $items
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}