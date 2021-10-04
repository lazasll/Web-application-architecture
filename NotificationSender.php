<?php


class NotificationSender
{
    protected $notificationMessage;

    public function add(Notification $notification);

    public function markRead(array $notifications);

    public function get(User $user, $limit = 200, $offset = 0) : array;
}
