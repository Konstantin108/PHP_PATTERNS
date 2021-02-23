<?php
use app\Services\Autoload;

use app\MySQLFactory\DBMySQLConnection\DBClientsConnection;
use app\MySQLFactory\DBMySQLConnection\DBMySQLConnection;
use app\MySQLFactory\DBMySQLConnection\DBUsersConnection;

use app\MySQLFactory\MySQLQueryBuilder\Pieces\DBName;
use app\MySQLFactory\MySQLQueryBuilder\Pieces\TableName;
use app\MySQLFactory\MySQLQueryBuilder\Pieces\Request;

use app\MySQLFactory\MySQLQueryBuilder\QueryBuilder;

use app\PostgreSQLFactory\DBPostgreConnection\DBGoodsConnection;
use app\PostgreSQLFactory\DBPostgreConnection\DBPostgreConnection;
use app\PostgreSQLFactory\DBPostgreConnection\DBSuppliersConnection;

use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreDBName;
use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreRequest;
use app\PostgreSQLFactory\PostgreSQLQueryBuilder\Pieces\PostgreTableName;

use app\PostgreSQLFactory\PostgreSQLQueryBuilder\PostgreQueryBuilder;

use app\OracleFactory\OracleConnection\DBCarsConnection;
use app\OracleFactory\OracleConnection\OracleConnection;
use app\OracleFactory\OracleConnection\DBBooksConnection;

use app\OracleFactory\OracleQueryBuilder\Pieces\OracleDBName;
use app\OracleFactory\OracleQueryBuilder\Pieces\OracleRequest;
use app\OracleFactory\OracleQueryBuilder\Pieces\OracleTableName;

use app\OracleFactory\OracleQueryBuilder\OracleQueryBuilder;

require dirname(__DIR__) . "/Services/Autoload.php";
spl_autoload_register([(new Autoload()), 'load']);

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

function OracleConnect(OracleConnection $oracleConnection)
{
    $oracleConnection->getOracleConnect();
}

OracleConnect(new DBBooksConnection());
OracleConnect(new DBCarsConnection());

echo '<p style="color: blueviolet">Объект добавленный OracleNewQueryBuilder</p>';

function OracleNewQueryBuilder(OracleDBName $dbName, OracleTableName $tableName, OracleRequest $request)
{
    $queryBuilder = new OracleQueryBuilder();
    $queryBuilder->setDBName($dbName);
    $queryBuilder->setTableName($tableName);
    $queryBuilder->setRequest($request);

    $query = $queryBuilder->build();

    var_dump($query);
}

OracleNewQueryBuilder(new OracleDBName(), new OracleTableName(), new OracleRequest());