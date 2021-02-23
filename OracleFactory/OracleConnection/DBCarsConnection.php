<?php


class DBCarsConnection extends OracleConnection
{
    protected function createOracleDataBase(): OracleDatabase
    {
        echo 'Подключение к базе данных - cars' . '<br>';
        return new DBCars();
    }
}