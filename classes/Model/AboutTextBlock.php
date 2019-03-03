<?php

namespace Model;

class AboutTextBlock
{
    protected $id = 0;
    protected $text = '';
    protected $order = 0;
    protected $isHidden = false;


    /**
     * AboutTextBlock constructor.
     * @param int $id
     * @param string $text
     * @param int $order
     * @param bool $isHidden
     */
    public function __construct(int $id, string $text, int $order, bool $isHidden)
    {
        $this->id = $id;
        $this->text = $text;
        $this->order = $order;
        $this->isHidden = $isHidden;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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