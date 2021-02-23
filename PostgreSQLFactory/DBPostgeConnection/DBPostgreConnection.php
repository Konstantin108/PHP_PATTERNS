<?php


abstract class DBPostgreConnection
{
    private $postgreSQLDataBase;

    public function __construct()
    {
        $this->postgreSQLDataBase = $this->createDataBasePostgre();
    }

    public function getPostgreConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->postgreSQLDataBase->postgreConnect();
    }

    abstract protected function createDataBasePostgre(): PostgreSQLDataBase;
}