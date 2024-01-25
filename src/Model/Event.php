<?php

namespace App\Model;

use DateTimeImmutable;

class Event
{
    private ?string $text = null;
    private ?DateTimeImmutable $start = null;

    private ?Color $color = null;


    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getStart(): ?DateTimeImmutable
    {
        return $this->start;
    }

    public function setStart(DateTimeImmutable $start)
    {
        $this->start = $start;

        return $this;
    }

    public function getColor(): ?Color
    {
        return $this->color;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function asArray(): array
    {
        return [
            'text' => $this->text,
            'start' => $this->start->format('Y-m-d'),
            'color' => $this->color
        ];
    }
}