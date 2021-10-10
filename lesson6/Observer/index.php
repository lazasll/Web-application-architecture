<?php

use UserObserver;
use VacancyPHP;

$user1 = new UserObserver();
$user2 = new UserObserver();

$vacancy = new VacancyPHP();


$vacancy->attach($user1);
$vacancy->attach($user2);

$vacancy->setVacancy('Новая вакансия PHP!!!');

$vacancy->notify();

$vacancy->detach($user1);
$vacancy->detach($user2);