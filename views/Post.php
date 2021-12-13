<?php

  include 'headerMisc.php';
  require '../models/ArticleDAO.php';
  require '../models/UserDAO.php';
  require '../models/CommentDAO.php';

  session_start();  
  //  $post = $_SESSION['post'];

  $artID = $_GET["artID"];
 
  $articleDAO = new ArticleDAO();
  $articles = $articleDAO->getArticles();
  $userDAO = new UserDAO();
  $users = $userDAO->getUsers();
 // $commentDAO = new CommentDAO();
 // $comments = $commentDAO->getComments($artID - 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

  <!-- header text -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px">
    <a class="navbar-brand">
       <?php echo "<td>".$articles[$artID - 1]->getTitle(). "</h1>"; ?>
    </a>
    </nav>
       <?php echo "  <td>".$articles[$artID - 1]->getLastModified()."</td>"; ?>
       <?php echo "<br><td>".$articles[$artID - 1]->getContent()."</td>"; ?>

    <div class="container">
       <div class="col">
	    <form class="form-horizontal" action="controller.php" method="GET">
	      <button class="btn btn-primary" type="submit" name="submit" value="ADD">Add Comment</button>
 	      <button class="btn btn-primary" type="submit" name="submit" value="DELETE">Delete Comment</button>
              <table class="table table-bordered table-striped">
                <thead><tr><th>Comments<th>Author</th></tr></thead>
                <tbody>
                   <?php
  // 			for($index=0;$index<count($comments);$index++){
//			        echo "<tr><td>".$comments[$index]->getContent()."</a></td></tr>";
//			}
		   ?>
                 
               </tbody>        
            </table>  
            </form>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php' ?>
