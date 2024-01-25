<?php

namespace App\Model;

class Color
{
    private ?string $primary = null;
    private ?string $secondary = null;

    public function getPrimary(): ?string
    {
        return $this->primary;
    }

    public function setPrimary(string $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    public function getSecondary(): ?string
    {
        return $this->secondary;
    }

    public function setSecondary($secondary): self
    {
        $this->secondary = $secondary;

        return $this;
    }

    public function asArray(): array
    {
        return [
            'primary' => $this->primary,
            'secondary' => $this->secondary
        ];
    }
}