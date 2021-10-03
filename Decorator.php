<?php

abstract class Decorator implements IMarkdown
{
    protected $content = null;

    public function __construct(IMarkdown $content)
    {
        $this->content = $content;
    }
}

class Bold extends Decorator
{
    public function render(): string
    {
        return '<b>' . str_replace('**', '', $this->content->render()) . '</b>';
    }
}

class Header4 extends Decorator
{
    public function render(): string
    {
        return '<h4>' . str_replace('####', '', $this->content->render()) . '</h4>';
    }
}

