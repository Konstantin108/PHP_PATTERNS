<?php
namespace app\PostgreSQLFactory\DataBases;

class DBSuppliers extends PostgreSQLDataBase
{
    public function postgreConnect()
    {
        echo 'База данных suppliers - соединение установлено' . '<br>';
    }
}