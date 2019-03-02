<?php

namespace Model;

class GuestBook
{

    public function getVisibleRecords(): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM guestBookRecords WHERE (isHidden=FALSE AND isDeleted=FALSE) ORDER BY id';
        $blocks = $db->query($sql, []);

        $result = [];
        foreach ($blocks as $block) {
            $result[] = new GuestBookRecord($block['id'], $block['text'], $block['author'], $block['isHidden'], $block['isDeleted']);
        }

        return $result;
    }
}