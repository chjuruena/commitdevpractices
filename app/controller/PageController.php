<?php

class PageController extends Controller{

	function home(){
		$this->f3->set('students', $this->loadStudents());
		$this->renderView('index.htm');
	}

	function getid(){
		$um = new UserMapper($this->db);
		$um->load(array('studentno = ?', $_POST['studentno']));
		echo json_encode('hahahaha');
	}

	function loadStudents(){
		$um = new UserMapper($this->db);
		$um->load(array('studentno LIKE ?', '20%'));
		$arr = [];

		while(!$um->dry()){
			$arr[] = $um->cast();
			$um->next();
		}
			/*echo '<strong>you are here</strong>';
			var_dump($arr);
			die();*/

		return $arr;


	}

	function submit(){
		$um = new UserMapper($this->db);
		$um->studentno = $_POST['studentno'];
		// $um->nickname = $_POST['nickname'];
		$um->save();
		echo $_POST['nickname'];
	}

	function load(){
		$um = new UserMapper($this->db);

		while(!$um->dry()){
			echo $um->studentno.'<br>';
			$um->next();
		}


	}



	
}
