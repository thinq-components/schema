<?php

namespace ThinQC\Schema;

use PDO;
use Strict\Property\Intermediate\PropertyRegister;


/**
 * @property-read int $create
 *
 * @internal
 */
class TableSchema
    extends TypeSelector
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function registerProperty(PropertyRegister $propertyRegister): void
    {
        parent::registerProperty($propertyRegister);

        $propertyRegister->newVirtualProperty('create', function () {
            // create table
            return 0;
        }, null);
    }
}