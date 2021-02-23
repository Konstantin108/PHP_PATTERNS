<?php
namespace app\MySQLFactory\DBMySQLConnection;

use app\MySQLFactory\MySQLDBRecord\MySQLDBRecord;
use app\MySQLFactory\MySQLDBRecord\DBUsersRecord;
use app\MySQLFactory\DataBases\DBUsers;
use app\MySQLFactory\DataBases\MySQLDataBase;
class DBUsersConnection extends DBMySQLConnection
{
    protected function createDataBase(): MySQLDataBase
    {
        echo 'Подключение к базе пользовательских данных' . '<br>';
        return new DBUsers();
    }

    protected function createMySQLDBRecord(): MySQLDBRecord
    {
        return new DBUsersRecord();
    }
}