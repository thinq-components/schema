<?php

namespace ThinQC\Schema\ColumnData;

use DomainException;


class VarcharColumnData
    extends StandardColumnData
{
    public function __construct(
        int $length,
        bool $nullable
    ) {
        if ($length <= 0) {
            throw new DomainException('The length of VARCHAR column must be greater than 0.');
        }
        parent::__construct("VARCHAR ({$length})", $nullable);
    }
}