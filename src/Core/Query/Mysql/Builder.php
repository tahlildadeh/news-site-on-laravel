<?php

namespace Core\Query\Mysql;


use Core\DB\Mysql;
use Reza\DB\Mysql as RezaMysql;

class Builder {
    /**
     * @param string $sql
     */
    public function query($sql)
    {
        $connection = new Mysql();
        $connection->connect();
        die('<br>'. $sql);
    }

    public function test()
    {
        $connection = new RezaMysql();
    }
} 