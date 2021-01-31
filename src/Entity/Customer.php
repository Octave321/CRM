<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Customer
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
    private $Firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreateAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $LastEmail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HasAnswer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HasBuyed;


    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */

    public function updatedTimestamps(): void
    {
        $dateTimeNow = new DateTime('now');
        // $this->setUpdateAt($dateTimeNow);

        if ($this->getCreateAt() === null) {
            $this->setCreateAt($dateTimeNow);
        }
    }

    public function updatedTimesEmail(): void
    {
        $dateTimeNow = new DateTime('now');
        // $this->setUpdateAt($dateTimeNow);

        if ($this->getLastEmail() === null) {
            $this->setLastEmail($dateTimeNow);
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->Firstname;
    }

    public function setFirstname(string $Firstname): self
    {
        $this->Firstname = $Firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->Lastname;
    }

    public function setLastname(string $Lastname): self
    {
        $this->Lastname = $Lastname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->CreateAt;
    }

    public function setCreateAt(\DateTimeInterface $CreateAt): self
    {
        $this->CreateAt = $CreateAt;

        return $this;
    }

    public function getLastEmail(): ?\DateTimeInterface
    {
        return $this->LastEmail;
    }

    public function setLastEmail(\DateTimeInterface $LastEmail): self
    {
        $this->LastEmail = $LastEmail;

        return $this;
    }

    public function getHasAnswer(): ?bool
    {
        return $this->HasAnswer;
    }

    public function setHasAnswer(bool $HasAnswer): self
    {
        $this->HasAnswer = $HasAnswer;

        return $this;
    }

    public function getHasBuyed(): ?bool
    {
        return $this->HasBuyed;
    }

    public function setHasBuyed(bool $HasBuyed): self
    {
        $this->HasBuyed = $HasBuyed;

        return $this;
    }
}
