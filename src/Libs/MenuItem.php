<?php

namespace IstvanMolitor\LaravelMenu\Libs;

class MenuItem extends Menu
{
    protected $content;

    function __construct($content)
    {
        $this->content = $content;
    }

    public function render()
    {
        return '<li>' . $this->content . '</li>' . parent::render();
    }
}