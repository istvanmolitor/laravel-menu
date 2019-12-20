<?php

namespace IstvanMolitor\LaravelMenu\Libs;

class MenuItem extends Menu
{
	protected $icon = null;
	protected $content;

	function __construct($content)
	{
		$this->setContent($content);
	}

	public function setIcon($icon)
	{
		$this->icon = $icon;
	}

	public function getIcon()
	{
		return $this->icon;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $this->content;
	}
}