<?php


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