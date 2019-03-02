<?php

namespace Model;

class GuestBookRecord
{
    protected $id = 0;
    protected $text = '';
    protected $author = '';
    protected $isHidden = false;

    /**
     * GuestBookRecord constructor.
     * @param int $id
     * @param string $text
     * @param string $author
     * @param bool $isHidden
     */
    public function __construct(int $id, string $text, string $author, bool $isHidden)
    {
        $this->id = $id;
        $this->text = $text;
        $this->author = $author;
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
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }
}