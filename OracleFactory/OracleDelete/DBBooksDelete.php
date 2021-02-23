<?php
namespace  app\OracleFactory\OracleDelete;

class DBBooksDelete extends OracleDelete
{
    public function delete()
    {
        echo '<p style="color: green">Строки из таблицы books удалены</p><br>';
    }
}