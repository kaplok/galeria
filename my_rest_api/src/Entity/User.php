<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\UserByName;
/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
  * @ApiResource(
 *   normalizationContext={"groups" = {"read"}},
 *   denormalizationContext={"groups" = {"write"}},
 * itemOperations={
 *     "get",
 *     "patch",
 *     "delete",
 *     "put",
 *     "get_by_name" = {
 *       "method" = "GET",
 *       "path" = "/user/{name}",
 *       "controller" = UserByName::class,
 *       "read"=false,
 * "openapi_context" = {
 *         "parameters" = {
 *           {
 *             "name" = "name",
 *             "in" = "path",
 *             "description" = "The name of your user",
 *             "type" = "string",
 *             "required" = true,
 *             "example"= "guy",
 *           },
 *         },
 *       },
 *     },
 *   }
 * )
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=16, nullable=false)
     * @Groups({"read", "write"})
     */
    private $name;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
