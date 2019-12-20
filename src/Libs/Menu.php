<?php

namespace IstvanMolitor\LaravelMenu\Libs;

class Menu
{
	private $menuItems = [];

	public function addMenuItems(MenuItem $menuItem)
	{
		$this->menuItems[] = $menuItem;
		return $this;
	}

	public function addItem($content)
	{
		$menuItem = new MenuItem($content);
		$this->addMenuItems($menuItem);
		return $menuItem;
	}

	public function addLink($href, $content)
	{
		return $this->addItem();
	}
}