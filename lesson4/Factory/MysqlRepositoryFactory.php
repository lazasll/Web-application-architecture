<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;
use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\MysqlUserRepository;
use AbstractFactory\Repository\MysqlOrderRepository;
use AbstractFactory\Db\Mysql;

/**
 * Class MysqlRepositoryFactory Класс-фабрика, реализующий интерфейс
 * абстрактной фабрики. Данный класс будет создавать репозитории, которые
 * работают с Mysql-БД.
 * @package AbstractFactory\Factory
 */

class MysqlRepositoryFactory
    implements RepositoryFactoryInterface
{
    /**
     * @var Mysql
     */
    private $mysqlConnection;

    /**
     * MysqlRepositoryFactory constructor.
     * @param Mysql $mysqlConnection
     */
    public function __construct(Mysql $mysqlConnection)
    {
        $this->mysqlConnection = $mysqlConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new MysqlUserRepository($this->mysqlConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new MysqlOrderRepository($this->mysqlConnection);
    }
}