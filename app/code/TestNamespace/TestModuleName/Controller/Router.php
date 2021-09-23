<?php

namespace TestNamespace\TestModuleName\Controller;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;

class Router implements RouterInterface
{
    public function match(RequestInterface $request): ?ActionInterface
    {
        // TODO: Implement match() method.
    }
}
