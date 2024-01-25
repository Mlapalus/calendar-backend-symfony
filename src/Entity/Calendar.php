<?php

namespace App\Entity;

class Calendar
{
    private ?int $id = null;
    private ?int $createdAt = null;
    private ?string $title = null;

    private ?int $groupeId = null;
    private ?array $events = [];

    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    public function setCreatedAt(int $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getGroupeId(): ?int
    {
        return $this->groupeId;
    }

    public function setGroupeId(int $groupeId): self
    {
        $this->groupeId = $groupeId;

        return $this;
    }

    public function getEvents(): ?array
    {
        return $this->events;
    }

    public function setEvents(array $events): self
    {
        $this->events = $events;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function asArray(): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->createdAt,
            'title' => $this->title,
            'groupe_id' => $this->groupeId,
            'events' => $this->events
        ];
    }
}