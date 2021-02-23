<?php
namespace app\MySQLFactory\DataBases;

class DBUsers extends MySQLDataBase
{
    function connect()
    {
        echo 'База данных users - соединение установлено' . '<br>';
    }
}