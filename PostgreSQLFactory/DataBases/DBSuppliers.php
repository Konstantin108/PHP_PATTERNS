<?php


class DBSuppliers extends PostgreSQLDataBase
{
    public function postgreConnect()
    {
        echo 'База данных suppliers - соединение установлено' . '<br>';
    }
}