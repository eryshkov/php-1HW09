<?php

namespace Model;
class Page
{
    protected $pageName;
    protected $isHidden;
    protected $order;
    protected $displayName;

    /**
     * @return string
     */
    public function getPageName(): string
    {
        return $this->pageName;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setPageFromDB(string $pageName):void
    {
        $dataBase = new DB();
        $sql = 'SELECT * FROM pages WHERE pageName=:pageName';
        $currentPage = $dataBase->query($sql, [':pageName' => $pageName]);

        if (isset($currentPage['0'])) {
            $this->pageName = $currentPage['0']['pageName'];
            $this->isHidden = (bool)$currentPage['0']['isHidden'];
            $this->order = $currentPage['0']['order'];
            $this->displayName = $currentPage['0']['displayName'];
        } else {
            $allpages = new Pages();
            $firstPage = $allpages->getFirstPage();

            $this->pageName = $firstPage->getPageName();
            $this->isHidden = (bool)$firstPage->isHidden;
            $this->order = $firstPage->getOrder();
            $this->displayName = $firstPage->getDisplayName();
        }
    }

    public function setPageFromArray(array $haystack):void
    {
            $this->pageName = $haystack['pageName'];
            $this->isHidden = (bool)$haystack['isHidden'];
            $this->order = $haystack['order'];
            $this->displayName = $haystack['displayName'];
    }

}