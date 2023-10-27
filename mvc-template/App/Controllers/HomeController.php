<?php

namespace App\Controllers;

class HomeController extends \Core\Controller
{

	public function analyze()
	{
        $data = json_decode(file_get_contents("php://input"), TRUE);
        $json = "{}";
        $response = array();
		echo json_encode($response);
	}

}
