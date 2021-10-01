<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\Oracle;

/**
 * Class BaseOracleRepository Абстрактный класс для каждого репозитория,
 * который будет работать с Oracle-БД. Здесь будет храниться соединение с БД.
 * @package Repository
 */
abstract class BaseOracleRepository
{
    /**
     * @var Oracle
     */
    private $oracleConnection;

    /**
     * BaseOracleRepository constructor.
     * @param Oracle $oracleConnection
     */
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    /**
     * @return Oracle
     */
    public function getOracleConnection(): Oracle
    {
        return $this->oracleConnection;
    }
}