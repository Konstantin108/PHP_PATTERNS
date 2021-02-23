<?php

require 'MySQLFactory/DBMySQLConnection/DBMySQLConnection.php';
require 'MySQLFactory/DBMySQLConnection/DBClientsConnection.php';
require 'MySQLFactory/DBMySQLConnection/DBUsersConnection.php';
require 'MySQLFactory/MySQLDBRecord/MySQLDBRecord.php';
require 'MySQLFactory/MySQLDBRecord/DBClientsRecord.php';
require 'MySQLFactory/MySQLDBRecord/DBUsersRecord.php';
require 'MySQLFactory/DataBases/MySQLDataBase.php';
require 'MySQLFactory/DataBases/DBClients.php';
require 'MySQLFactory/DataBases/DBUsers.php';

require 'MySQLFactory/MySQLQueryBuilder/Pieces/DBName.php';
require 'MySQLFactory/MySQLQueryBuilder/Pieces/Request.php';
require 'MySQLFactory/MySQLQueryBuilder/Pieces/TableName.php';

require 'MySQLFactory/MySQLQueryBuilder/Query.php';
require 'MySQLFactory/MySQLQueryBuilder/QueryBuilder.php';

require 'PostgreSQLFactory/DataBases/PostgreSQLDataBase.php';
require 'PostgreSQLFactory/DataBases/DBSuppliers.php';
require 'PostgreSQLFactory/DataBases/DBGoods.php';
require 'PostgreSQLFactory/PostgreSQLUpdate/PostgreSQLUpdate.php';
require 'PostgreSQLFactory/PostgreSQLUpdate/DBSuppliersUpdate.php';
require 'PostgreSQLFactory/PostgreSQLUpdate/DBGoodsUpdate.php';
require 'PostgreSQLFactory/DBPostgeConnection/DBPostgreConnection.php';
require 'PostgreSQLFactory/DBPostgeConnection/DBGoodsConnection.php';
require 'PostgreSQLFactory/DBPostgeConnection/DBSuppliersConnection.php';

require 'PostgreSQLFactory/PostgreSQLQueryBuilder/Pieces/PostgreDBName.php';
require 'PostgreSQLFactory/PostgreSQLQueryBuilder/Pieces/PostgreTableName.php';
require 'PostgreSQLFactory/PostgreSQLQueryBuilder/Pieces/PostgreRequest.php';

require 'PostgreSQLFactory/PostgreSQLQueryBuilder/PostgreQuery.php';
require 'PostgreSQLFactory/PostgreSQLQueryBuilder/PostgreQueryBuilder.php';



echo '<pre>';

echo '<h1 style="color: red">Домашнее задание №4</h1>';
echo '<h2 style="color: blue">Работа с СУБД MySQL</h2>';

function MySQLConnect(DBMySQLConnection $DBMySQLConnection)
{
    $DBMySQLConnection->getConnect();
}

MySQLConnect(new DBClientsConnection());
MySQLConnect(new DBUsersConnection());

echo '<p style="color: blueviolet">Объект добавленный MySQLQueryBuilder</p>';

function MySQLNewQueryBuild(DBName $dbName, TableName $tableName, Request $request)
{
    $queryBuilder = new QueryBuilder();
    $queryBuilder->setDBName($dbName);
    $queryBuilder->setTableName($tableName);
    $queryBuilder->setRequest($request);

    $query = $queryBuilder->build();

    var_dump($query);
}

MySQLNewQueryBuild(new DBName(), new TableName(), new Request());

echo '<h2 style="color: blue">Работа с СУБД PostgreSQL</h2>';

function PostgreConnect(DBPostgreConnection $DBPostgreConnection)
{
    $DBPostgreConnection->getPostgreConnect();
}

PostgreConnect(new DBSuppliersConnection());
PostgreConnect(new DBGoodsConnection());

echo '<p style="color: blueviolet">Объект добавленный PostgreSQLNewQueryBuilder</p>';

function PostgreSQLNewQueryBuild(PostgreDBName $dbName, PostgreTableName $tableName, PostgreRequest $request)
{
    $queryBuilder = new PostgreQueryBuilder();
    $queryBuilder->setDBName($dbName);
    $queryBuilder->setTableName($tableName);
    $queryBuilder->setRequest($request);

    $query = $queryBuilder->build();

    var_dump($query);
}

PostgreSQLNewQueryBuild(new PostgreDBName(), new PostgreTableName(), new PostgreRequest());

echo '<h2 style="color: blue">Работа с СУБД Oracle</h2>';

