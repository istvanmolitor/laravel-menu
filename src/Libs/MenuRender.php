<?php

namespace IstvanMolitor\LaravelMenu\Libs;

class MenuRender
{
	private $menuBuilders = [];

	public function render($name, $properties = [], $view = 'menu::menu')
	{
		$menu = new Menu();
		if (array_key_exists($name, $this->menuBuilders)) {
			foreach ($this->menuBuilders[$name] as $menuBuilder) {
				$menuBuilder->build($menu);
			}
		}
		return view($view, [
			'menu' => $menu,
			'properties' => $properties,
		])->render();
	}

	public function addMenuBuilder(MenuBuilder $menuBuilder)
	{
		$this->menuBuilders[$menuBuilder->getName()][] = $menuBuilder;
		return $this;
	}
}