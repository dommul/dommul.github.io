<?
include "Sphere.class.php"

class.App
{
	
	function __construct()
	{	
		public $aRadius = 10;
	
		$aSphere = new Sphere; //create instance
	
		$aSphere.setTheRadius($aRadius);
		//more processing...............
	}
}
?>