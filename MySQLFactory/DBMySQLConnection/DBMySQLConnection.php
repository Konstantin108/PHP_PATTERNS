<?php

abstract class DBMySQLConnection
{
    private $mySQLDataBase;

    public function __construct()
    {
        $this->mySQLDataBase = $this->createDataBase();
    }

    public function getConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->mySQLDataBase->connect();
    }

    abstract protected function createDataBase() : MySQLDataBase;
}