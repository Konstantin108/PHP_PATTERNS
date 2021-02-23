<?php


class OracleQueryBuilder
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function build(): OracleQuery
    {
        return new OracleQuery($this);
    }

    /**
     * @return OracleDBName
     */
    public function getDBName(): OracleDBName
    {
        return $this->dbName;
    }

    /**
     * @param OracleDBName $dbName
     */
    public function setDBName(OracleDBName $dbName): void
    {
        $this->dbName = $dbName;
    }

    /**
     * @return OracleTableName
     */
    public function getTableName(): OracleTableName
    {
        return $this->tableName;
    }

    /**
     * @param OracleTableName $tableName
     */
    public function setTableName(OracleTableName $tableName): void
    {
        $this->tableName = $tableName;
    }

    /**
     * @return OracleRequest
     */
    public function getRequest(): OracleRequest
    {
        return $this->request;
    }

    /**
     * @param OracleRequest $request
     */
    public function setRequest(OracleRequest $request): void
    {
        $this->request = $request;
    }
}