<?php
class Controller_filter extends Controller
{
	function __construct()
	{
		$this->model = new Model_filter();
		$this->view = new View();
	}
        public function action_index()
{	
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['spravka'];
	//$a = $_GET['spravka'];
      Reference::getTable($a);
    $data = $this->model->get_data();
    $this->view->generate('filter_view.php', null, $data);
    return true;
}    
}
}


