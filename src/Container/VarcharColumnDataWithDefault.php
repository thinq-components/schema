<?php

namespace ThinQC\Schema\Container;


class VarcharColumnDataWithDefault
    implements ColumnDataInterface
{
    private $preparedStatement;
    private $variables;

    public function __construct(int $length, string $varName, string $defaultValue)
    {
        $this->preparedStatement = "VARCHAR({$length}) NOT NULL DEFAULT :{$varName}";
        $this->variables = [
            $varName => $defaultValue
        ];
    }

    public function getPreparedStatement(): string
    {
        return $this->preparedStatement;
    }

    public function getVariables(): array
    {
        return $this->variables;
    }
}