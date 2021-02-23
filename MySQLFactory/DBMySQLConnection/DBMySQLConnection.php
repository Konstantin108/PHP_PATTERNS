<?php
namespace app\MySQLFactory\DBMySQLConnection;

use app\MySQLFactory\MySQLDBRecord\MySQLDBRecord;
use app\MySQLFactory\DataBases\MySQLDataBase;
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
        $this->mySQLDBRecord->record();
    }

    abstract protected function createDataBase() : MySQLDataBase;
    abstract protected function createMySQLDBRecord() : MySQLDBRecord;
}