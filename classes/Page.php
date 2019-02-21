<?php

class Page
{
    protected $pageName;

    /**
     * @return string
     */
    public function getPageName():string
    {
        return $this->pageName;
    }

    /**
     * @return bool
     */
    public function getisHidden():bool
    {
        return $this->isHidden;
    }

    /**
     * @return int
     */
    public function getOrder():int
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getDisplayName():string
    {
        return $this->displayName;
    }
    protected $isHidden;
    protected $order;
    protected $displayName;

    /**
     * Page constructor.
     * @param array $haystack
     */
    public function __construct(array $haystack)
    {
        foreach ($haystack as $element) {
            $this->pageName = $element['pageName'];
            $this->isHidden = $element['isHidden'];
            $this->order = $element['order'];
            $this->displayName = $element['displayName'];
        }
    }
}