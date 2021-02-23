<?php
namespace app\PostgreSQLFactory\DBPostgreConnection;

use app\PostgreSQLFactory\PostgreSQLUpdate\PostgreSQLUpdate;
use app\PostgreSQLFactory\PostgreSQLUpdate\DBGoodsUpdate;
use app\PostgreSQLFactory\DataBases\DBGoods;
use app\PostgreSQLFactory\DataBases\PostgreSQLDataBase;
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