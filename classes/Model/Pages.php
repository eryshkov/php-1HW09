<?php

namespace Model;
class Pages
{
    /**
     * @var Page[]
     */
    protected $pages;

    /**
     * Pages constructor.
     * @param array $haystack
     */
    public function __construct()
    {
        $dataBase = new DB();

        $sql = 'SELECT * FROM pages ORDER BY `order`';
        $allPages = $dataBase->query($sql, []);

        foreach ($allPages as $element) {
            $page = new Page();
            $page->setPageFromArray($element);
            $this->pages[] = $page;
        }
    }

    /**
     * @return Page[]
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    /**
     * @return Page|null
     */
    public function getFirstPage(): Page
    {
        foreach ($this->pages as $page) {
            return $page;
        }

        return null;
    }


}