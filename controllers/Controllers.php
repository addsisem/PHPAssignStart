<?php
   // include "ControllerAction.php";

      include "../models/UserDAO.php";
      include "../models/ArticleDAO.php";
      include "../models/CommentDAO.php";

    class ArticleList implements ControllerAction{

	function processGet() {

	    $articleDAO = new ArticleDAO();
            $articles = $articleDAO->getArticles();	
	    $_REQUEST['articles']=$articles;
            include '../views/listArticles.php'; 
	}

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }
      
    class UserList implements ControllerAction{

        function processGET(){
            $userDAO = new UserDAO();
            $users = $userDAO->getUsers();
            $_REQUEST['users']=$users;
            include "../views/listUsers.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class UserAdd implements ControllerAction{

        function processGET(){
            include "views/addUser.php";
        }

        function processPOST(){
	    $username=$_POST['username'];
	    $lastname=$_POST['lastname'];
	    $firstname=$_POST['firstname'];
            $email=$_POST['email'];
	    $password=$_POST['password'];
	    $role=$_POST['role'];
	    $lastModified=$_POST['lastModified'];
            $user = new User();
	    $user->setUsername($username);
	    $user->setLastname($lastname);
	    $user->setFirstname($firstname);
            $user->setEmail($email);
	    $user->setPassword($password);
	    $user->setRole($role);
	    $user->setLastModified($lastModified);
            $userDAO = new UserDAO();
            $userDAO->addUser($userID);
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }      

    }

    class UserDelete implements ControllerAction{

        function processGET(){
            $userid = $_GET['userID'];
            include 'views/delUser.php';

        }

        function processPOST(){
            $userid=$_POST['userID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $userDAO = new UserDAO();
                $userDAO->deleteUser($userID);
            }
            header("Location: controller.php?page=list");
            exit;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }

    class CommentList implements ControllerAction{

        function processGET(){
            $commentDAO = new CommentDAO();
            $comments = $commentDAO->getComments($artID);
            $_REQUEST['comments']=$comments;
            return "../views/listComments.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }
   class Login implements ControllerAction{

        function processGET(){
            include "../views/login.php";
        }

        function processPOST(){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $userDAO = new UserDAO();
            $found=$userDAO->authenticate($username,$password);
            if($found==null){
                $nextView="Location: controller.php?page=login";
            }else{
                $nextView="Location: controller.php?page=list";
                $_SESSION['loggedin']='TRUE';
            }
            header($nextView);
            exit;       
        }
	function getAccess(){
            return "PUBLIC";
        }

    }

    class Home implements ControllerAction{

        function processGET(){
            include "../views/home.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }

    class About implements ControllerAction{

        function processGET(){
            include "../views/about.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PUBLIC";
        }

    }
?>
