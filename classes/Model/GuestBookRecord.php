<?php

namespace Model;

class GuestBookRecord
{
    protected $id = 0;
    protected $text = '';
    protected $author = '';
    protected $isHidden = false;
    protected $isDeleted = false;

    /**
     * GuestBookRecord constructor.
     * @param int $id
     * @param string $text
     * @param string $author
     * @param bool $isHidden
     * @param bool $isDeleted
     */
    public function __construct(int $id, string $text, string $author, bool $isHidden, bool $isDeleted)
    {
        $this->id = $id;
        $this->text = $text;
        $this->author = $author;
        $this->isHidden = $isHidden;
        $this->isDeleted = $isDeleted;
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

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }


}