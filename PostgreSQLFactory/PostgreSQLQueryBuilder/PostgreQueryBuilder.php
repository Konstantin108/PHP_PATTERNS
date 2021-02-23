<?php
namespace app\PostgreSQLFactory\PostgreSQLQueryBuilder;

use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreDBName;
use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreTableName;
use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreRequest;
class PostgreQueryBuilder
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function build(): PostgreQuery
    {
        return new PostgreQuery($this);
    }

    /**
     * @return PostgreDBName
     */
    public function getDBName(): PostgreDBName
    {
        return $this->dbName;
    }

    /**
     * @param PostgreDBName $dbName
     */
    public function setDBName(PostgreDBName $dbName): void
    {
        $this->dbName = $dbName;
    }

    /**
     * @return PostgreTableName
     */
    public function getTableName(): PostgreTableName
    {
        return $this->tableName;
    }

    /**
     * @param PostgreTableName $tableName
     */
    public function setTableName(PostgreTableName $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return PostgreRequest
     */
    public function getRequest(): PostgreRequest
    {
        return $this->request;
    }

    /**
     * @param PostgreRequest $request
     */
    public function setRequest(PostgreRequest $request): void
    {
        $this->request = $request;
    }
}