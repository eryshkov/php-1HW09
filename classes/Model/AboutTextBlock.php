<?php

namespace Model;

class AboutTextBlock
{
    protected $text = '';
    protected $order = 0;
    protected $isHidden = false;

    /**
     * AboutTextBlock constructor.
     * @param string $text
     * @param int $order
     * @param bool $isHidden
     */
    public function __construct(string $text, int $order, bool $isHidden)
    {
        $this->text = $text;
        $this->order = $order;
        $this->isHidden = $isHidden;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }


}