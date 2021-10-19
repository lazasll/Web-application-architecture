<<?php

class UserObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {

        echo 'Читаем вакансию...';

    }
}