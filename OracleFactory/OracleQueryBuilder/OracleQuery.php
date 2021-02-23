<?php
namespace  app\OracleFactory\OracleQueryBuilder;

class OracleQuery
{
    protected $dbName;
    protected $tableName;
    protected $request;

    public function __construct(OracleQueryBuilder $queryBuilder)
    {
        $this->dbName = $queryBuilder->getDBName();
        $this->tableName = $queryBuilder->getTableName();
        $this->request = $queryBuilder->getRequest();
    }
}