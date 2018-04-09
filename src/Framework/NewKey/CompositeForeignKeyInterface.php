<?php

namespace ThinQC\Schema\Framework\NewKey;


/**
 * @internal
 */
interface CompositeForeignKeyInterface
{
    public function relate(string $columnName, string $foreignColumnName): CompositeForeignKeyAbstract;
}