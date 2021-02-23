<?php
namespace app\PostgreSQLFactory\PostgreSQLUpdate;

class DBGoodsUpdate extends PostgreSQLUpdate
{
    public function update()
    {
        echo '<p style="color: green">Обновление данных о товарах завершено</p><br>';
    }
}