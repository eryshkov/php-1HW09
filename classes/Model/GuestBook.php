<?php

namespace Model;

class GuestBook
{

    /**
     * @return GuestBookRecord[]
     */
    public function getVisibleRecords(): array
    {
        $db = new DB();
        $sql = 'SELECT * FROM guestBookRecords WHERE (isHidden=FALSE) ORDER BY id';
        $blocks = $db->query($sql, []);

        $result = [];
        foreach ($blocks as $block) {
            $result[] = new GuestBookRecord($block['id'], $block['text'], $block['author'], $block['isHidden']);
        }

        return $result;
    }

    /**
     * @param GuestBookRecord $record
     * @return bool
     */
    public function saveRecord(GuestBookRecord $record): bool
    {
        $db = new DB();
        $sql = 'INSERT INTO guestBookRecords (text, author, isHidden) VALUES (:recText,:author, :isHidden)';
        $result = $db->query($sql, [
            ':recText'  => $record->getText(),
            ':author'   => $record->getAuthor(),
            ':isHidden' => (int)$record->isHidden(),
        ]);

        if (false === $result) {
            return false;
        }

        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteRecordWith(int $id): bool
    {
        $db = new DB();
        $sql = 'DELETE FROM guestBookRecords WHERE id=:delID';
        $result = $db->query($sql, [
            ':delID' => $id,
        ]);

        if (false === $result) {
            return false;
        }

        return true;
    }
}