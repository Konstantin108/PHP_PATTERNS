<?php


abstract class DBPostgreConnection
{
    private $postgreSQLDataBase;
    private $postgreSQLUpdate;

    public function __construct()
    {
        $this->postgreSQLDataBase = $this->createDataBasePostgre();
        $this->postgreSQLUpdate = $this->createPostgreSQLUpdate();
    }

    public function getPostgreConnect()
    {
        echo 'Устанавливается соединение' . '<br>';
        $this->postgreSQLDataBase->postgreConnect();
        $this->postgreSQLUpdate->update();
    }

    abstract protected function createDataBasePostgre(): PostgreSQLDataBase;
    abstract protected function createPostgreSQLUpdate(): PostgreSQLUpdate;
}