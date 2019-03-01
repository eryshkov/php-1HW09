<?php

namespace Model;

class AboutText
{
    /**
     * @return AboutTextBlock[]
     */
    public function getVisibleBlocks(): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM about WHERE isHidden=FALSE ORDER BY `order`';
        $blocks = $db->query($sql, []);

        $result = [];
        foreach ($blocks as $block) {
            $result[] = new AboutTextBlock($block['blockText'], $block['order'], $block['isHidden']);
        }

        return $result;
    }
}