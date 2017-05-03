<?php 

require_once 'konf.php';
/**
* 
*/
class KonfigurasiUI extends konf
{
	
	public function tampilLengkap()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>