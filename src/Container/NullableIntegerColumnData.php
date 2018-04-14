<?php

namespace ThinQC\Schema\Container;


class NullableIntegerColumnData
    implements ColumnDataInterface
{
    private $preparedStatement;

    public function __construct(string $type)
    {
        $this->preparedStatement = "{$type} NULL";
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