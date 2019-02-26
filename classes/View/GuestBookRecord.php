<?php

namespace View;

class GuestBookRecord extends View
{
    public function setRecordFromArray(array $haystack): void
    {
        foreach ($haystack as $key=>$value) {
            $this->assign($key, $value);
        }
    }

    public function show(): void
    {
        var_dump($this->storage);
//        $this->display(__DIR__ . '/../../templates/blocks/' . $this->storage['blockName'] . '.php');
    }
}