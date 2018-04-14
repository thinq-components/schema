<?php

namespace ThinQC\Schema\Container;


class NullableVarcharColumnData
    implements ColumnDataInterface
{
    private $preparedStatement;

    public function __construct(int $length)
    {
        $this->preparedStatement = "VARCHAR({$length}) NULL";
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