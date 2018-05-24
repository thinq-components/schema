<?php

namespace ThinQC\Schema\ColumnData;


class EnumColumnData
    extends StandardColumnData
{
    public function __construct(bool $nullable, string ...$candidates)
    {
        implode(', ', $candidates);
        parent::__construct('' ,$nullable);
    }
}