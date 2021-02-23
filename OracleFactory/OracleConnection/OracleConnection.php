<?php
namespace  app\OracleFactory\OracleConnection;

use app\OracleFactory\OracleDelete\OracleDelete;
use app\OracleFactory\DataBases\OracleDatabase;
abstract class OracleConnection
{
    private $oracleDataBase;
    private $oracleDelete;

    public function __construct()
    {
        $this->oracleDataBase = $this->createOracleDataBase();
        $this->oracleDelete = $this->createOracleDelete();
    }

    public function getOracleConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->oracleDataBase->oracleConnect();
        $this->oracleDelete->delete();
    }

    abstract protected function createOracleDataBase(): OracleDatabase;
    abstract protected function createOracleDelete(): OracleDelete;
}