<?php 

class Pizza{

	public $_icindekiler = array();
	private $_birim_fiyat_for_malzeme = 25;
	public $_pizza = [];

	function malzeme_ekle($_malzeme){
		array_push($this->_icindekiler, $_malzeme); // $_icindekiler[] = $_malzeme;
	}

	function pizza_fiyat(){
		$_fiyat = 10;
		$_fiyat += $this->fiyat_icindekiler();
		$_fiyat += $this->fiyat_hamur_tip();
		$_fiyat += $this->fiyat_boy();
		return $_fiyat;

	}

	private function fiyat_boy(){
		$pizza_boy = $this->_pizza["boy"];
		switch ($pizza_boy) {
			case 'kucuk':
				return 10;
			case 'orta':
				return 20;
			case 'buyuk':
				return 30;
			default:
				return 20;
		}
	}

	private function fiyat_hamur_tip(){
		$hamur_tip = $this->_pizza["hamur"];
		switch ($hamur_tip) {
			case 'ince':
				return 20;
			case 'kalın':
				return 40;
			default:
				return 30;
		}
	}

	private function fiyat_icindekiler(){
		//her içerik için +25 TL
		$malzeme_fiyat = $this->_birim_fiyat_for_malzeme * count($this->_icindekiler);
		return $malzeme_fiyat;
	}



	function set_hamur_tipi($_tip){
		$this->_pizza["hamur"] = $_tip;
	}


	function pizza_icerigi(){
		echo json_encode($this->_icindekiler);
	}

	function set_pizza_boyu($pizza_boyu){
		$this->_pizza["boy"] = $pizza_boyu;
	}

	function goster_siparis(){
		$this->_pizza["malzemeler"] = $this->_icindekiler;
		$this->_pizza["fiyat"] = $this->pizza_fiyat();
		echo json_encode($this->_pizza);
	}

}

 ?>