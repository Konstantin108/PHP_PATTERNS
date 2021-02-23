<?php


class DBClients extends MySQLDataBase
{
    function connect()
    {
        echo 'База данных clients - соединение установлено' . '<br>';
    }
}