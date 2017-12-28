<?php

class Controller_check extends Controller
{
    function __construct()
	{
		$this->model = new Model_check();
	}
	public function action_index()
{	 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message']; 
        
     Model_check::register($name, $mail,$phone, $message);
    }
    $data = $this->model->get_data();
    return true;
}    
}



