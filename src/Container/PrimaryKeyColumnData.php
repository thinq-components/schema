<?php

namespace ThinQC\Schema\Container;


class PrimaryKeyColumnData
    implements ColumnDataInterface
{
    private $preparedStatement;

    public function __construct(string $type, bool $increment)
    {
        $s = "{$type} PRIMARY KEY";
        if ($increment) {
            $s .= ' AUTO_INCREMENT';
        }
        $this->preparedStatement = $s;
    }

    public function getPreparedStatement(): string
    {
        return $this->preparedStatement;
    }

    public function getVariables(): array
    {
        return [];
    }
}