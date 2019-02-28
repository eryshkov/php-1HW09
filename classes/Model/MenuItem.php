<?php

namespace Model;

class MenuItem
{
    protected $name = '';
    protected $displayName = '';
    protected $order = 0;
    protected $isCurrent = false;

    /**
     * MenuItem constructor.
     * @param string $name
     * @param string $displayName
     * @param int $order
     * @param bool $isCurrent
     */
    public function __construct(string $name, string $displayName, int $order, bool $isCurrent)
    {
        $this->name = $name;
        $this->displayName = $displayName;
        $this->order = $order;
        $this->isCurrent = $isCurrent;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
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
    public function isCurrent(): bool
    {
        return $this->isCurrent;
    }
}