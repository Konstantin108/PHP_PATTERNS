<?php


class PostgreQuery
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function __construct(PostgreQueryBuilder $queryBuilder)
    {
        $this->dbName = $queryBuilder->getDBName();
        $this->tableName = $queryBuilder->getTableName();
        $this->request = $queryBuilder->getRequest();
    }
}