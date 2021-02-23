<?php


class DBBooks extends OracleDatabase
{
    public function oracleConnect()
    {
        echo 'База данных books - соединение установлено' . '<br>';
    }
}