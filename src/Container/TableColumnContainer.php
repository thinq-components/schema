<?php

namespace ThinQC\Schema\Container;

use PDO;
use ThinQC\Schema\Exceptions\DuplicateColumnNameException;


class TableColumnContainer
{
    private $PDO;

    /** @var ColumnDataInterface[] */
    private $columns;

    private $varCount;

    private $primaryKey = null;

    public function __construct(PDO $PDO)
    {
        $this->PDO = $PDO;
        $this->varCount = 0;
        $this->columns = [];
    }

    private function generateVarName(): string
    {
        $id = ++$this->varCount;
        return 'var' . $id;
    }

    /**
     * @param string $name
     * @param string $type
     * @param bool $increment
     * @return TableColumnContainer
     */
    public function withPrimaryKeyColumn(string $name, string $type, bool $increment): self
    {
        $this->columnNameDuplicateAndFail($name);
        $ret = clone $this;
        $ret->columns[$name] = new PrimaryKeyColumnData($type, $increment);
        if (!is_null($ret->primaryKey)) {
            // MultipilePrimaryKey
        }
        $ret->primaryKey = $name;
        return $ret;
    }

    /**
     * Index: OK
     * Unique: OK
     * Primary: OK
     * Foreign: OK
     *
     * @param string $name
     * @param string $type
     * @param int|null No default value will be set if null is given.
     * @return TableColumnContainer
     */
    public function withIntegerColumn(string $name, string $type, ?int $default = null): self
    {
        $this->columnNameDuplicateAndFail($name);
        if (is_null($default)) {
            $v = new IntegerColumnData($type);
        } else {
            $v = new IntegerColumnDataWithDefault($type, $this->generateVarName(), $default);
        }
        $ret = clone $this;
        $ret->columns[$name] = $v;

        return $ret;
    }

    /**
     * @param string $name
     * @param string $type
     * @param int|null $default Null will be set as default value if null is given.
     * @return TableColumnContainer
     */
    public function withNullableIntegerColumn(string $name, string $type, ?int $default = null): self
    {
        $this->columnNameDuplicateAndFail($name);
        if (is_null($default)) {
            $v = new NullableIntegerColumnData($type);
        } else {
            $v = new NullableIntegerColumnDataWithDefault($type, $this->generateVarName(), $default);
        }
        $ret = clone $this;
        $ret->columns[$name] = $v;

        return $ret;
    }

    /**
     * Index: OK(LENGTH)
     * Unique: OK(LENGTH)
     * Primary: NG
     * Foreign: NG
     *
     * @param string $name
     * @param int $length
     * @param null|string $default
     * @return TableColumnContainer
     */
    public function withVarcharColumn(string $name, int $length, ?string $default = null): self
    {
        $this->columnNameDuplicateAndFail($name);
        if (is_null($default)) {
            $v = new VarcharColumnData($length);
        } else {
            $v = new VarcharColumnDataWithDefault($length, $this->generateVarName(), $default);
        }
        $ret = clone $this;
        $ret->columns[$name] = $v;

        return $ret;
    }

    /**
     * @param string $name
     * @param int $length
     * @param null|string $default
     * @return TableColumnContainer
     */
    public function withNullableVarcharColumn(string $name, int $length, ?string $default = null): self
    {
        $this->columnNameDuplicateAndFail($name);
        if (is_null($default)) {
            $v = new NullableVarcharColumnData($length);
        } else {
            $v = new NullableVarcharColumnWithDefault($length, $this->generateVarName(), $default);
        }
        $ret = clone $this;
        $ret->columns[$name] = $v;

        return $ret;

    }

    /**
     * Index: OK
     * Unique: OK
     * Primary: NG
     * Foreign: NG
     *
     * @param string $name
     * @param string $type
     * @param null|string $default
     * @return TableColumnContainer
     */
    public function withGeneralColumn(string $name, string $type, ?string $default = null): self
    {

    }

    public function withNullableGeneralColumn(string $name, string $type, ?string $default = null): self
    {

    }

    public function withAutoTimestamp(): self
    {

    }

    /**
     * @param string[] ...$columns string like 'id' or 'user_name(255)'
     * @return TableColumnContainer
     */
    public function withUniqueIndex(string ...$columns): self
    {

    }

    public function withIndex(string ...$columns): self
    {

    }

    public const FOREIGN_CASCADE  = 0;
    public const FOREIGN_RESTRICT = 1;
    public const FOREIGN_SET_NULL = 2;

    public function withForeignKey(
        string $column,
        string $targetTable,
        string $foreignColumn,
        int $onUpdate,
        int $onDelete
    ): self {

    }

    private function columnNameDuplicateAndFail(string $name): void
    {
        if (isset($this->columns[$name])) {
            throw new DuplicateColumnNameException($name);
        }

    }
}