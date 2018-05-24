<?php

namespace ThinQC\Schema\ColumnData;


interface ColumnInterface
{
    public function getPreparedStatement(): string;

    public function getVariables(): array;
}