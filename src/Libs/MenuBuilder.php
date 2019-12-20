<?php

namespace IstvanMolitor\LaravelMenu\Libs;

abstract class MenuBuilder
{
	abstract public function getName();

	abstract public function build(Menu $menu);
}