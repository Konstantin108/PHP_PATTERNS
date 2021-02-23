<?php
namespace app\PostgreSQLFactory\PostgreSQLUpdate;

class DBSuppliersUpdate extends PostgreSQLUpdate
{
    public function update()
    {
        echo '<p style="color: green">Данные о поставщиках были обновлены</p><br>';
    }
}