<?php
namespace  app\OracleFactory\OracleConnection;

use app\OracleFactory\OracleDelete\OracleDelete;
use app\OracleFactory\OracleDelete\DBBooksDelete;
use app\OracleFactory\DataBases\DBBooks;
use app\OracleFactory\DataBases\OracleDatabase;
class DBBooksConnection extends OracleConnection
{
    protected function createOracleDataBase(): OracleDatabase
    {
        echo 'Подключение к базе данных - books' . '<br>';
        return new DBBooks();
    }

    protected function createOracleDelete(): OracleDelete
    {
        return new DBBooksDelete();
    }
}