<?php
namespace  app\OracleFactory\OracleConnection;

use app\OracleFactory\OracleDelete\OracleDelete;
use app\OracleFactory\OracleDelete\DBCarsDelete;
use app\OracleFactory\DataBases\DBCars;
use app\OracleFactory\DataBases\OracleDatabase;
class DBCarsConnection extends OracleConnection
{
    protected function createOracleDataBase(): OracleDatabase
    {
        echo 'Подключение к базе данных - cars' . '<br>';
        return new DBCars();
    }

    protected function createOracleDelete(): OracleDelete
    {
        return new DBCarsDelete();
    }
}