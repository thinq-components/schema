<?php

namespace ThinQC\Schema\ColumnData;


class VarcharColumnDataWithDefault
    extends VarcharColumnData
{
    private $defaultVar;
    private $defaultValue;

    public function __construct(
        int $length,
        bool $nullable,
        string $defaultVarName,
        string $defaultValue
    ) {
        $this->defaultVar = $defaultVarName;
        $this->defaultValue = $defaultValue;
        parent::__construct($length, $nullable);
    }

    protected function getDefault(): ?string
    {
        return $this->defaultVar;
    }

    public function getVariables(): array
    {
        return array_merge(parent::getVariables(), [
            $this->defaultVar => $this->defaultValue
        ]);
    }
}