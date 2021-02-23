<?php


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