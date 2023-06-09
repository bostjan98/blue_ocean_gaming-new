<?php
require_once (dirname(__FILE__, 2) . "../../Db.php");

class View3d
{

    private $ds;

    function __construct()
    {
        $this->ds = new Db();
    }

    

   	public function getAllData()
	{
	    $query = "SELECT * FROM view_3d";       
	    $memberRecord = $this->ds->runBaseQuery($query);
	 
	    return $memberRecord;
	}
}
