<?php
namespace  app\OracleFactory\DataBases;

class DBCars extends OracleDatabase
{
    function oracleConnect()
    {
        echo 'База данных cars - соединение установлено' . '<br>';
    }
}