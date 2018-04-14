<?php

namespace ThinQC\Schema\Key;


class LimitedKey
    implements KeyInterface
{
    private $columnName;
    private $length;

    public function __construct(
        string $columnName,
        int $length
    ) {
        $this->columnName = $columnName;
        $this->length = $length;
    }

    public function getColumnName(): string
    {
        return $this->columnName;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }
}