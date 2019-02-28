<?php

namespace Model;

class Menu
{

    public function getVisible($onPage)
    {
        $db = new DB();
        $sql = 'SELECT * FROM pages WHERE isHidden=FALSE ORDER BY `order`';
        $menuItems = $db->query($sql, []);
    }
}