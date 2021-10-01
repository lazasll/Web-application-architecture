<?php
declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Mysql;

/**
 * Class BaseMysqlRepository Абстрактный класс для каждого репозитория,
 * который будет работать с Mysql-БД. Здесь будет храниться соединение с БД.
 * @package Repository
 */
abstract class BaseMysqlRepository
{
    /**
     * @var Mysql
     */
    private $mysqlConnection;

    /**
     * BaseMysqlRepository constructor.
     * @param Mysql $mysqlConnection
     */
    public function __construct(Mysql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return Mysql
     */
    public function getMysqlConnection(): Mysql
    {
        return $this->mysqlConnection;
    }
}

