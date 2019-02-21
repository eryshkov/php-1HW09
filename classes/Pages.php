<?php

class Pages
{
    /**
     * @var Page[]
     */
    protected $pages;

    /**
     * @return Page[]
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    /**
     * Pages constructor.
     * @param array $haystack
     */
    public function __construct(array $haystack)
    {
        foreach ($haystack as $element) {
            $page = new Page($element);
            $this->pages[] = $page;
        }
    }


}