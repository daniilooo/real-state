<?php

namespace Models;

use DateTime;

abstract class Model implements \JsonSerializable
{
    // Campos que sempre serão ocultados
    protected array $hidden = [];

    // Campos que podem ser incluídos dinamicamente na serialização
    private array $visible = [];


    public function setVisible(array $fields): self
    {
        $this->visible = $fields;
        return $this;
    }

    public function jsonSerialize(): mixed
    {
        $data = [];

        foreach ($this as $property => $value) {

            if (in_array($property, $this->hidden)) {
                continue;
            }

            if (!empty($this->visible) && !in_array($property, $this->visible)) {
                continue;
            }

            if ($value instanceof DateTime) {
                $data[$property] = $value->format('Y-m-d H:i:s');
            } else {
                $data[$property] = $value;
            }
        }

        return $data;
    }
}
