<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Entity\Order;

/**
 * Class MysqlOrderRepository Реализация репозитория заказов, который
 * работает с Mysql-БД.
 * @package Repository
 */
class MysqlOrderRepository extends BaseMysqlRepository
    implements OrderRepositoryInterface
{
    /**
     * @param Order $order
     */
    public function add(Order $order)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Добавляем в Mysql заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function delete(Order $order)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Удаляем в Mysql заказ $order.' . PHP_EOL;
    }

    /**
     * @param Order $order
     */
    public function update(Order $order)
    {
        // Для коннекта к Mysql используется $this->getMysqlConnection().
        echo 'Обновляем в Mysql заказ $order.' . PHP_EOL;
    }
}