<?php
    require_once 'User.php';

    class UserDAO {

        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "student", "student", "blogDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addUser($user){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO users (username, lastname, firstname, password, email, role, lastModified) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $user->getUsername(), $user->getLastname(), $user->getFirstname(), $user->getPassword(), $user->getEmail(), $user->getRole(), $user->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteUser($userid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM users WHERE userID = ?");
            $stmt->bind_param("i", $userid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getUsers(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $user = new User();
                $user->load($row);
                $users[]=$user;
            }    
            $stmt->close();
            $connection->close();
            return $users;
        }

        public function authenticate($username, $password){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? and password = ?;");
            $stmt->bind_param("ii",$username,$password); 
            $stmt->execute();   
	    $result = $stmt->get_result();
            $found=$result->fetch_assoc();
            $stmt->close();
            $connection->close();
	    var_dump($found);
            return true;
        }

    }
?>
