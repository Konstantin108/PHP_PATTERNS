<?php


abstract class OracleConnection
{
    private $oracleDataBase;

    public function __construct()
    {
        $this->oracleDataBase = $this->createOracleDataBase();
    }

    public function getOracleConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->oracleDataBase->oracleConnect();
    }

    abstract protected function createOracleDataBase(): OracleDatabase;
}