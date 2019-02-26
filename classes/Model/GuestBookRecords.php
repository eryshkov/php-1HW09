<?php

namespace Model;

class GuestBookRecords
{
    /**
     * @var \View\GuestBookRecord[]
     */
    protected $records = [];

    public function __construct()
    {
        $dataBase = new DB();
        $sql = 'SELECT * FROM guestBookRecords ORDER BY id';
        $records = $dataBase->query($sql, []);

        foreach ($records as $item) {
            $record = new \View\GuestBookRecord();
            $record->setRecordFromArray($item);
            $this->records[] = $record;
        }
    }

    /**
     * @return \View\GuestBookRecord[]
     */
    public function getAll(): array
    {
        return $this->records;
    }

}