<?php

namespace View;

class Block extends View
{
    public function setBlockFromArray(array $haystack): void
    {
        foreach ($haystack as $key=>$value) {
            $this->assign($key, $value);
        }
    }

    public function show(): void
    {
        $this->display(__DIR__ . '/../../templates/blocks/' . $this->storage['blockName'] . '.php');
    }
}