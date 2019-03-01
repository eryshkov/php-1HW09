<?php

namespace Model;

class Menu
{
    /**
     * @param string $onPage
     * @return MenuItem[]
     */
    public function getVisibleItems(string $onPage): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM pages WHERE isHidden=FALSE ORDER BY `order`';
        $menuItems = $db->query($sql, []);

        $result = [];
        foreach ($menuItems as $item) {
            $result[] = new MenuItem($item['pageName'], $item['displayName'], $item['order'], $onPage === $item['pageName']);
        }

        return $result;
    }
}