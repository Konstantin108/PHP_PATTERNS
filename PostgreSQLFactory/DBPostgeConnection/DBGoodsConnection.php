<?php


class DBGoodsConnection extends DBPostgreConnection
{
    protected function createDataBasePostgre(): PostgreSQLDataBase
    {
        echo 'Получение данных о товарах' . '<br>';
        return new DBGoods();
    }

    protected function createPostgreSQLUpdate(): PostgreSQLUpdate
    {
        return new DBGoodsUpdate();
    }
}