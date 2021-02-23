<?php

require 'MySQLFactory/DBMySQLConnection/DBMySQLConnection.php';
require 'MySQLFactory/DBMySQLConnection/DBClientsConnection.php';
require 'MySQLFactory/DBMySQLConnection/DBUsersConnection.php';
require 'MySQLFactory/DataBases/MySQLDataBase.php';
require 'MySQLFactory/DataBases/DBClients.php';
require 'MySQLFactory/DataBases/DBUsers.php';

echo '<h1 style="color: red">Домашнее задание №4</h1>';
echo '<h2 style="color: blue">Работа с СУБД MySQL</h2>';

function MySQLConnect(DBMySQLConnection $DBMySQLConnection)
{
    $DBMySQLConnection->getConnect();
}

function MySQLRecord(DBMySQLConnection $DBMySQLConnection)
{
    $DBMySQLConnection->getRecord();
}

MySQLConnect(new DBClientsConnection());
MySQLConnect(new DBUsersConnection());

MySQLRecord(new DBClientsConnection());