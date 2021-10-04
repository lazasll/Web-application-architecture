<?php

  declare(strict_types=1);

  abstract class Notification
{
    protected $sender;


     /**
      * Генераторы сообщений, которые должны быть определены в подклассах
      */
     public function messageForNotification(Notification $notification) : string;

     /**
      * Сгенерировать сообщение текущего уведомления.
      */
     public function message() : string
     {
         return $this->messageForNotification($this);
     }
}
