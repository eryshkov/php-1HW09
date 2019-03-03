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
            $result[] = new AboutTextBlock($block['id'],$block['blockText'], $block['order'], $block['isHidden']);
        }

        return $result;
    }

    /**
     * @param int $id
     * @return AboutTextBlock|null
     */
    public function getTextBlockWith(int $id): ?AboutTextBlock
    {
        $db = new DB();
        $sql = 'SELECT * FROM about WHERE id=:id ORDER BY `order`';
        $blocks = $db->query($sql, [
            ':id' => $id,
        ]);

        if (false === $blocks) {
            return null;
        }

        if ((bool)$blocks) {
            $block = reset($blocks);
            return new AboutTextBlock($block['id'],$block['blockText'], $block['order'], $block['isHidden']);
        }

        return null;
    }
}