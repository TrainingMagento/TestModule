<?php

namespace TestNamespace\TestModuleName\Api\Data;

interface BlogInterface
{
    const CONTENT = 'content';

    const TITLE = 'title';

    const ENTITY_ID = 'entity_id';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param $content
     * @return $this
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param $title
     * @return $this
     */
    public function setTitle($title);
}