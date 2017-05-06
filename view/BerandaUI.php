<?php 

require_once 'View_depan.php';
/**
* 
*/
class BerandaUI extends View_depan
{
	
	public function tampilLengkap()
	{
		include_once 'pages/contenttugas.php';
		$this->end();
	}
}



 ?>