<?php
namespace app\PostgreSQLFactory\DataBases;

abstract class PostgreSQLDataBase
{
    public abstract function postgreConnect();
}