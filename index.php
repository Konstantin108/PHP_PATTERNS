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
require 'PostgreSQLFactory/DBPostgeConnection/DBPostgreConnection.php';
require 'PostgreSQLFactory/DBPostgeConnection/DBGoodsConnection.php';
require 'PostgreSQLFactory/DBPostgeConnection/DBSuppliersConnection.php';



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


