<?php
require_once (dirname(__FILE__, 2) . "/Models/View3d.php");

class View_3d
{
	private $view_3d;
	 
	
	function __construct()
    {
    	$this->view_3d = new View3d();
		
	}
	
	public function show()
	{
		$AllData = $this->view_3d->getAllData();
		
		include 'app/View/view_3d.php';	
	}
}
?>