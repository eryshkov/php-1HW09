<?php

namespace Model;

class Image
{
    protected $path = '';
    protected $url = '';
    protected $width = 0;
    protected $height = 0;

    /**
     * Image constructor.
     * @param string $path
     * @param string $url
     * @param int $width
     * @param int $height
     */
    public function __construct(string $path, string $url, int $width, int $height)
    {
        $this->path = $path;
        $this->url = $url;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }


}