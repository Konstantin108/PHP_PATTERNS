<?php
namespace app\PostgreSQLFactory\DBPostgreConnection;

use app\PostgreSQLFactory\PostgreSQLUpdate\PostgreSQLUpdate;
use app\PostgreSQLFactory\PostgreSQLUpdate\DBSuppliersUpdate;
use app\PostgreSQLFactory\DataBases\DBSuppliers;
use app\PostgreSQLFactory\DataBases\PostgreSQLDataBase;
class DBSuppliersConnection extends DBPostgreConnection
{
    protected function createDataBasePostgre(): PostgreSQLDataBase
    {
        echo 'Получение данных о поставщиках' . '<br>';
        return new DBSuppliers();
    }

    protected function createPostgreSQLUpdate(): PostgreSQLUpdate
    {
        return new DBSuppliersUpdate();
    }
}