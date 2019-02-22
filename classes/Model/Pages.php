<?php
namespace Model;
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


}