<?php 

namespace electric;

class Pokemon {
	private $name;
	private $color;

	public function __construct($n, $c) {
		$this->name  = $n;
		$this->color = $c;		
	}

	public function getInfoPokemon() {
		return "<li class='p-2 ring-1 ring-white/50 rounded'>".$this->name." | ".$this->color."</li>";
	}
}

?>