<?php
namespace  app\OracleFactory\OracleDelete;

class DBCarsDelete extends OracleDelete
{
    public function delete()
    {
        echo '<p style="color: green">Удалены данные из таблицы cars</p><br>';
    }
}