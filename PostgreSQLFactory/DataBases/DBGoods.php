<?php


class DBGoods extends PostgreSQLDataBase
{
    function postgreConnect()
    {
        echo 'База данных goods - соединение установлено' . '<br>';
    }
}