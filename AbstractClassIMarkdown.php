<?php

interface IMarkdown
{
    public function render(): string;
}

class HtmlRender implements IMarkdown
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return htmlspecialchars($this->text);
    }
}


