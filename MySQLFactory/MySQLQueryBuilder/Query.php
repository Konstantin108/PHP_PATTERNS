<?php


class Query
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function __construct(QueryBuilder $queryBuilder)
    {
        $this->dbName = $queryBuilder->getDBName();
        $this->tableName = $queryBuilder->getTableName();
        $this->request = $queryBuilder->getRequest();
    }
}