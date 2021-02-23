<?php


class DBBooksConnection extends OracleConnection
{
    protected function createOracleDataBase(): OracleDatabase
    {
        echo 'Подключение к базе данных - books' . '<br>';
        return new DBBooks();
    }
}