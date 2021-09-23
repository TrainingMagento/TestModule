<?php

namespace TestNamespace\TestModuleName\Model;

use TestNamespace\TestModuleName\Api\Data\BlogInterface;

class Blog extends \Magento\Framework\Model\AbstractModel implements BlogInterface
{
    /**
     * Contruct
     */
    protected function _construct()
    {
        $this->_init('TestNamespace\TestModuleName\Model\ResourceModel\Blog');
    }

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param mixed $id
     * @return \Magento\Framework\Model\AbstractModel|BlogInterface|Blog
     */
    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * @return mixed|string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @param $content
     * @return BlogInterface|Blog
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @return mixed|string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param $title
     * @return BlogInterface|Blog
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}
