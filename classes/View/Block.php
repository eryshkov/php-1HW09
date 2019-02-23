<?php

namespace View;

class Block
{
    /**
     * @var string
     */
    protected $blockName = '';

    /**
     * @var string
     */
    protected $pageName = '';

    /**
     * @var bool
     */
    protected $isHidden = false;

    /**
     * @var int
     */
    protected $order = 0;

    /**
     * @var string
     */
    protected $blockText = '';

    /**
     * @var string
     */
    protected $imageName = '';

    public function setBlockFromArray(array $haystack): void
    {
        $this->blockName = $haystack['blockName'];
        $this->pageName = $haystack['pageName'];
        $this->isHidden = (bool)$haystack['isHidden'];
        $this->order = (int)$haystack['order'];
        $this->blockText = $haystack['blockText'];
        $this->imageName = $haystack['imageName'];
    }

    public function display(): void
    {
        require __DIR__ . '/../../templates/blocks/' . $this->blockName . '.php';
    }
}