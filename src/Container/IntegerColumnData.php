<?php

namespace ThinQC\Schema\Container;


class IntegerColumnData
    implements ColumnDataInterface
{
    private $preparedStatement;

    public function __construct(string $type)
    {
        $this->preparedStatement = "{$type} NOT NULL";
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