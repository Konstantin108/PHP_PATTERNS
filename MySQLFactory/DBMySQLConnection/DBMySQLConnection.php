<?php

abstract class DBMySQLConnection
{
    private $mySQLDataBase;
    private $mySQLDBRecord;

    public function __construct()
    {
        $this->mySQLDataBase = $this->createDataBase();
        $this->mySQLDBRecord = $this->createMySQLDBRecord();
    }

    public function getConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->mySQLDataBase->connect();
    }

    public function getRecord()
    {
        $this->mySQLDBRecord->record();
    }

    abstract protected function createDataBase() : MySQLDataBase;
    abstract protected function createMySQLDBRecord() : MySQLDBRecord;
}