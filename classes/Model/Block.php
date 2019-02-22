<?php

namespace Model;

class Block
{
    /**
     * @var string
     */
    protected $blockName;

    /**
     * @var string
     */
    protected $pageName;

    /**
     * @var bool
     */
    protected $isHidden;

    /**
     * @var int
     */
    protected $order;

    /**
     * @var string
     */
    protected $blockText;

    /**
     * @var string
     */
    protected $imageName;

    public function setBlockFromArray(array $haystack):void
    {
        $this->blockName = $haystack['blockName'];
        $this->pageName = $haystack['pageName'];
        $this->isHidden = (bool)$haystack['isHidden'];
        $this->order = (int)$haystack['order'];
        $this->blockText = $haystack['blockText'];
        $this->imageName = $haystack['imageName'];
    }

    public function display():void
    {
        switch (true) {
            case 'text' === $this->blockName:
                //text block goes here
                break;
        }
    }
}