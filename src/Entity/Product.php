<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="uuid")
     */
    private $uuid;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    public function __construct(string $title, string $description)
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->uuid = Uuid::v4();

        $this->title = $title;
        $this->description = $description;
        $this->price = 5;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUuid(): Uuid
    {
        return $this->uuid;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getUrlIdentifier(): string
    {
        return $this->uuid->toBase58();
    }
}
