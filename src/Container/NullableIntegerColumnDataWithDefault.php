<?php

namespace ThinQC\Schema\Container;


class NullableIntegerColumnDataWithDefault
    implements ColumnDataInterface
{
    private $preparedStatement;
    private $variables;

    public function __construct(string $type, string $varName, int $defaultValue)
    {
        $this->preparedStatement = "{$type} NULL DEFAULT :{$varName}";
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