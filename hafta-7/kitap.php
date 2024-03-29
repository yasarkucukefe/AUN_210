<?php 


$kitap1 = new Kitap();
$kitap1 -> set_kitap("Sefiller","Victor Hugo",800,"Roman");
$kitap1 -> set_fiyat(400);

$kitap2 = new Kitap();
$kitap2 -> set_kitap("Sağırdere","Kemal Tahir",300,"Roman");
$kitap2 -> set_fiyat(150);

echo $kitap1->goster_kitap();

// Inheritance
$kitap3 = new CocukKitaplari();
$kitap3 -> set_kitap("Gülten Dayıoğlu","8. Renk", 100, "Hikaye");

$kitap4 = new CocukKitaplari();
$kitap4 -> set_kitap("Şermin Yaşar","Dedemin bakkalı", 70, "Hikaye");
$kitap4 -> set_yas_araligi("Okul Öncesi");


class CocukKitaplari extends Kitap{
	public $yas_araligi;

	function set_yas_araligi($yaslar){
		$this->yas_araligi = $yaslar;
	}

}

class Kitap{
	public $_yazar;
	public $_kitap_ad;
	public $_sayfa;
	public $_tur;
	private $_fiyat;

	function set_kitap($yazar, $ad, $sayfa, $tur){
		$this->_yazar = $yazar;
		$this->_kitap_ad = $ad;
		$this->_sayfa = $sayfa;
		$this->_tur = $tur;
	}

	function set_fiyat($fiyat){
		$this->_fiyat = $fiyat;
	}

	function goster_kitap(){
		$kitap = [
			"ad"=>$this->_kitap_ad, 
			"yazar"=>$this->_yazar,
			"sayfa"=>$this->_sayfa, 
			"tur"=>$this->_tur,
			"fiyat"=>$this->_fiyat];

		return json_encode($kitap);
	}

}


 ?>