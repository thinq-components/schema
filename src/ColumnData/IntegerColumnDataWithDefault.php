<?php

namespace ThinQC\Schema\ColumnData;


class IntegerColumnDataWithDefault
    extends IntegerColumnData
{
    private $defaultVar;
    private $defaultValue;

    public function __construct(string $type, bool $nullable, string $defaultVar, int $default)
    {
        $this->defaultVar = $defaultVar;
        $this->defaultValue = $default;
        parent::__construct($type, $nullable);
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