<?php

namespace App\Model;
use Symfony\Component\Validator\Constraints as Assert;

class ImageInput {

    #[Assert\NotBlank]
    private $albumId;


    #[Assert\NotBlank]
    private $imageContent;

    #[Assert\NotBlank]
    private $name;

    #[Assert\NotBlank]
    private $description;

    /**
     * @return mixed
     */
    public function getImageContent() {
        return $this->imageContent;
    }

    /**
     * @param mixed $imageContent
     * @return ImageInput
     */
    public function setImageContent($imageContent) {
        $this->imageContent = $imageContent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ImageInput
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return ImageInput
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlbumId() {
        return $this->albumId;
    }

    /**
     * @param mixed $albumId
     */
    public function setAlbumId($albumId): void {
        $this->albumId = $albumId;
    }
}