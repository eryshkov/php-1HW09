<?php

namespace Model;

class GuestBook
{
    /**
     * @param string $sql
     * @return \View\GuestBookRecord[]
     */
    private function getFromDB(string $sql): array
    {
        $dataBase = new DB();
        $records = $dataBase->query($sql, []);

        $result = [];

        foreach ($records as $item) {
            $record = new \View\GuestBookRecord();
            $record->setRecordFromArray($item);
            $result[] = $record;
        }

        return $result;
    }

    /**
     * @return \View\GuestBookRecord[]
     */
    public function getAll(): array
    {
        return $this->getFromDB('SELECT * FROM guestBookRecords ORDER BY id');
    }

    public function getVisible(): array
    {
        return $this->getFromDB('SELECT * FROM guestBookRecords WHERE (isHidden=FALSE AND isDeleted=FALSE) ORDER BY id');
    }

}