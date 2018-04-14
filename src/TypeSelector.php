<?php

namespace ThinQC\Schema;

use Strict\Property\Intermediate\PropertyRegister;
use Strict\Property\Utility\StrictPropertyContainer;
use ThinQC\Schema\Columns\IntegerColumn;


/**
 * @property-read IntegerColumn $id
 */
class TypeSelector
    extends StrictPropertyContainer
{
    protected function registerProperty(PropertyRegister $propertyRegister): void
    {
        $propertyRegister->newVirtualProperty('id', function () {

        }, null);
    }

    public function id(string $columnName): IntegerColumn
    {

    }
}