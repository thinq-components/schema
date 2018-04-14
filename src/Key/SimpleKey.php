<?php

namespace ThinQC\Schema\Key;


class SimpleKey
    implements KeyInterface
{
    private $columnName;

    public function __construct(string $columnName)
    {
        $this->columnName = $columnName;
    }

    public function getColumnName(): string
    {
        return $this->columnName;
    }

    public function getLength(): ?int
    {
        return null;
    }
}