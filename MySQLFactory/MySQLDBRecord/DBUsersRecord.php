<?php
namespace app\MySQLFactory\MySQLDBRecord;

class DBUsersRecord extends MySQLDBRecord
{
    public function record()
    {
        echo '<p style="color: green">Произведена запись пользовательских данных</p><br>';
    }
}