<?php
    include '../models/UserDAO.php';
 
 if(isset($_SESSION['loggedin'])){
    $status="Logged In";
    $class="disabled";
  }else{
    $status="Login";
    $class="";
  }

   $userDAO = new UserDAO();
   $users=$userDAO->getUsers();


   if(isset($_POST['submit'])){
   //   $submit=$_POST['submit'];
      $username=$_POST["username"];
      $password=$_POST["password"];	      
      $found=$userDAO->authenticate($username, $password);

         if($found==null){
           echo "Incorrect Username or Password, please try again or create an account";
         
	 }else{
            $nextView="views/home.php";
            $_SESSION['loggedin']='TRUE';
         }
   }   
?>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">CS 2033: Web Systems Blog</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="index.php">Home</a>
    <a class="p-2 text-dark" href="controller.php?page=about">About</a>
    <a class="p-2 text-dark" href="controller.php?page=list">Admin</a>
  </nav>

  <button class="btn btn-outline-primary <?php echo $class; ?>" data-bs-toggle="modal" data-bs-target="#loginModal"<?php echo $status; ?>>Login</button>

  <form method="POST">
       <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	   <div class="modal-dialog" role="document">
	       <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="loginModalLabel">Login</h5>
		   </div>
                   <div class="modal-body">                        
                       <div class="form-group">
                           <label class="text" for="username">Username</label>
                           <input type="text" class="form-control" id="username" placeholder="Username" required>
                       </div>
                       <div class="form-group">
                           <label class="text" for="password">Password</label>
                           <input type="text" class="form-control" id="password" placeholder="Password" required>
	               </div>
                       <div>
                           <a href="views/login.php">Sign up for an Account</a>
		       </div>
		       <button type="submit" name="submit" class="btn btn-primary">Login</button>
                   </div>
               </div>
           </div>
       </div>
  </form>
</header>
