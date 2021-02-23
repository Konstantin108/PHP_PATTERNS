<?php


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