<?php

namespace ThinQC\Schema\ColumnData;


class StandardColumnData
    implements ColumnInterface
{
    private $type;
    private $nullable;

    public function __construct(string $type, bool $nullable)
    {
        $this->type = $nullable ? "{$type} NULL" : "{$type} NOT NULL";
        $this->nullable = $nullable;
    }

    protected function getDefault(): ?string
    {
        return $this->nullable ? 'NULL' : null;
    }

    public function getPreparedStatement(): string
    {
        $default = $this->getDefault();
        if (is_null($default)) {
            return $this->type;
        } else {
            return "{$this->type} DEFAULT {$default}";
        }
    }

    public function getVariables(): array
    {
        return [];
    }
}