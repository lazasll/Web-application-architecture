<?php

public function testDecorator(string $text)
{
    $htmlRender =
        new Bold(
            new Header4(
                new HtmlRender($text)
            )
        );
    $htmlRender->render();
}
