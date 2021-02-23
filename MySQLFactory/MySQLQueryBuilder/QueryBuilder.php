<?php
namespace app\MySQLFactory\MySQLQueryBuilder;

use app\MySQLFactory\MySQLQueryBuilder\Pieces\DBName;
use app\MySQLFactory\MySQLQueryBuilder\Pieces\Request;
use app\MySQLFactory\MySQLQueryBuilder\Pieces\TableName;
class QueryBuilder
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function build(): Query
    {
        return new Query($this);
    }

    /**
     * @return DBName
     */
    public function getDBName(): DBName
    {
        return $this->dbName;
    }

    /**
     * @param DBName $dbName
     */
    public function setDBName(DBName $dbName): void
    {
        $this->dbName = $dbName;
    }

    /**
     * @return TableName
     */
    public function getTableName(): TableName
    {
        return $this->tableName;
    }

    /**
     * @param TableName $tableName
     */
    public function setTableName(TableName $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @param Request $request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }
}