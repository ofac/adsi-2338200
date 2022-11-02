<?php 

class Model extends DataBase {
	public function listUsers() {
		return mysqli_query($this->conx, "SELECT * FROM users");
	}
	public function showUser($id) {
		return mysqli_query($this->conx, "SELECT * FROM users WHERE id = $id");
	}
	public function addUser() {
		$fullname  = $_POST['fullname'];
        $email     = $_POST['email'];
        $path      = "public/imgs/";
        $photo     = $path.time().".".pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
		return mysqli_query($this->conx, "INSERT INTO users VALUES (DEFAULT, '$fullname', '$email', '$photo',  DEFAULT)");
	}
	public function updUser() {
		$id        = $_POST['id'];
		$fullname  = $_POST['fullname'];
        $email     = $_POST['email'];
        if(!empty($_FILES['photo']['name'])) {
        	$path      = "public/imgs/";
        	$photo     = $path.time().".".pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        	move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

		return mysqli_query($this->conx, "UPDATE users SET fullname = '$fullname', email = '$email', photo = '$photo' WHERE id = $id");
		} else {
			return mysqli_query($this->conx, "UPDATE users SET fullname = '$fullname', email = '$email' WHERE id = $id");
		}
	}
	public function deleteUser($id) {
		return mysqli_query($this->conx, "DELETE FROM users WHERE id = $id");
	}
}