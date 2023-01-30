<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessagesRepository::class)]
class Messages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Messages = null;

    #[ORM\Column(length: 255)]
    private ?string $date_m = null;

    #[ORM\Column(length: 255)]
    private ?string $message_nom_ut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessages(): ?string
    {
        return $this->Messages;
    }

    public function setMessages(string $Messages): self
    {
        $this->Messages = $Messages;

        return $this;
    }

    public function getDateM(): ?string
    {

        return $this->date_m;
    }

    public function setDateM(string $date_m): self
    {
        $this->date_m = $date_m;

        return $this;
    }

    public function getMessageNomUt(): ?string
    {
        return $this->message_nom_ut;
    }

    public function setMessageNomUt(string $message_nom_ut): self
    {
        $this->message_nom_ut = $message_nom_ut;

        return $this;
    }
}
