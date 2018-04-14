<?php

namespace ThinQC\Schema\Exceptions;

use LogicException;


class DuplicateColumnNameException
    extends LogicException
{
    public function __construct(string $duplicateColumnName)
    {
        parent::__construct("Duplicate column name: {$duplicateColumnName}");
    }
}