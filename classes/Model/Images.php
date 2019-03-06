<?php

namespace Model;

class Images
{
    protected $pathToImagesFolder = __DIR__ . '/../../img/';
    protected $urlToImagesFolder = '/img/';


    /**
     * @return Image[]
     */
    public function getAllImages(): array
    {
        $dirContents = scandir($this->pathToImagesFolder, SCANDIR_SORT_NONE);

        $images = [];

        foreach ($dirContents as $item) {
            $filePath = $this->pathToImagesFolder . $item;
            $fileType = mime_content_type($filePath);
            $isImage = strpos($fileType, 'image') === 0;

            if ($isImage) {
                $size = getimagesize($filePath);
                [$width, $height] = $size;
                $images[] = new Image($filePath, $this->urlToImagesFolder . $item, $width, $height);
            }

        }

        return $images;
    }


}