<?php

namespace Model;

class Blocks
{
    protected $blocks;

    public function __construct(string $pageName)
    {
        $dataBase = new DB();
        $sql = 'SELECT * FROM blocks WHERE pageName=:pageName ORDER BY `order`';
        $blocks = $dataBase->query($sql, [':pageName' => $pageName]);

        foreach ($blocks as $item) {
            $block = new Block();
            $block->setBlockFromArray($item);
            $this->blocks[] = $block;
        }
    }
}