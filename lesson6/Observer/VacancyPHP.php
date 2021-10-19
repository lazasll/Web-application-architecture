<?php

class VacancyPHP implements SplSubject
{
    private $vacancy;
    private $observers;

    public function __construct()
    {

        $this->observers = new SplObjectStorage();

    }

    public function getVacancy(): string
    {
        return $this->vacancy;
    }

    public function setVacancy(string $vacancy)
    {
        $this->vacancy = $vacancy;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}