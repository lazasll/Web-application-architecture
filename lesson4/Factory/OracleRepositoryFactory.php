<?php

declare(strict_types=1);
namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\OracleUserRepository;
use AbstractFactory\Repository\OracleOrderRepository;
use AbstractFactory\Db\Oracle;

/**
 * Class OracleRepositoryFactory Class OracleRepositoryFactory Класс-фабрика, реализующий интерфейс
 * абстрактной фабрики. Данный класс будет создавать репозитории, которые
 * работают с Oracle-БД.
 * @package AbstractFactory\Factory
 */
class OracleRepositoryFactory implements RepositoryFactoryInterface
{
    /**
     * @var Oracle
     */
    private $oracleConnection;

    /**
     * OracleRepositoryFactory constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return UserRepositoryInterface
     */
    public function createUserRepository(): UserRepositoryInterface
    {
        return new OracleUserRepository($this->oracleConnection);
    }

    /**
     * @return OrderRepositoryInterface
     */
    public function createOrderRepository(): OrderRepositoryInterface
    {
        return new OracleOrderRepository($this->oracleConnection);
    }
}