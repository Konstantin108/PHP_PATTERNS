<?php
namespace app\MySQLFactory\DataBases;

class DBClients extends MySQLDataBase
{
    function connect()
    {
        echo 'База данных clients - соединение установлено' . '<br>';
    }
}