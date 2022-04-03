<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Comment
 *
 * @ORM\Table(name="comment", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="image_id", columns={"image_id"})})
 * @ORM\Entity
  * @ApiResource(
 *   normalizationContext={"groups" = {"read"}},
 *   denormalizationContext={"groups" = {"write"}}
 * )
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
   * @Groups({"read", "write"})
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_posted_at", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     * @Groups({"read"})
     */
    private $datePostedAt = 'current_timestamp()';

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="string", length=256, nullable=false)
     * @Groups({"read", "write"})
     */
    private $contents;

    /**
     * @var \Image
     *
     * @ORM\ManyToOne(targetEntity="Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
    * @Groups({"read", "write"})
     */
    private $image;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
    * @Groups({"read", "write"})
     */
    private $user;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getDatePostedAt(): ?\DateTimeInterface
    {
        return $this->datePostedAt;
    }

    public function setDatePostedAt(\DateTimeInterface $datePostedAt): self
    {
        $this->datePostedAt = $datePostedAt;

        return $this;
    }

    public function getContents(): ?string
    {
        return $this->contents;
    }

    public function setContents(string $contents): self
    {
        $this->contents = $contents;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
