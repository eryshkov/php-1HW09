<?php

namespace Model;

class Block
{
    protected $blockName;
    protected $pageName;
    protected $isHidden;
    protected $order;
    protected $blockText;
    protected $imageName;

    public function setPageFromArray(array $haystack):void
    {
        $this->blockName = $haystack['blockName'];
        $this->pageName = $haystack['pageName'];
        $this->isHidden = (bool)$haystack['isHidden'];
        $this->order = $haystack['order'];
        $this->blockText = $haystack['blockText'];
        $this->imageName = $haystack['imageName'];
    }
}