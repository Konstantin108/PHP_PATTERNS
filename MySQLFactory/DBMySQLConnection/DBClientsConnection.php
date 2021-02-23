<?php
namespace app\MySQLFactory\DBMySQLConnection;

use app\MySQLFactory\MySQLDBRecord\MySQLDBRecord;
use app\MySQLFactory\MySQLDBRecord\DBClientsRecord;
use app\MySQLFactory\DataBases\DBClients;
use app\MySQLFactory\DataBases\MySQLDataBase;
class DBClientsConnection extends DBMySQLConnection
{
    protected function createDataBase(): MySQLDataBase
    {
        echo 'Подключение к базе клиентских данных' . '<br>';
        return new DBClients();
    }

    protected function createMySQLDBRecord(): MySQLDBRecord
    {
        return new DBClientsRecord();
    }
}