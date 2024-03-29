
<?php 

class Daire{

	public $_PI = 3.14;

	function daire_alan($r){
		
		$alan = $this->_PI * $r * $r;
		return $alan;
	}


    function daire_cevre($r){

		$cevre = 2 * $this->return_pi() * $r;
		return $cevre;

	}


	private function return_pi(){
		return 3.14;
	}


}


 ?>