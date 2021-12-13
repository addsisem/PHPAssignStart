<?php
 
   include 'header.php';
   include '../models/ArticleDAO.php';   

   session_start();

   if(isset($_GET['submit'])){
	$submit = $_GET['submit'];
	$artID = $_GET['artID'];
	if($submit == "ADD"){
	    header("Location: views/addArticle.php");
	    exit;
	}
	if($submit == "DELETE"){
	    $header="Location: views/delArticle.php?artID=".$artID;
	    header($header);
	    exit;
	}
   }

   $articleDAO = new ArticleDAO();
   $articles = $articleDAO->getArticles();
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Web Systems Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
   <div class="container">
       <div class="col">
	    <form action="controller.php" method="GET">
	      <button class="btn btn-primary" type="submit" name="submit" value="ADD">Add Article</button>
 	      <button class="btn btn-primary" type="submit" name="submit" value="DELETE">Delete Article</button>
              <table class="table table-bordered table-striped">
                <thead><tr><th>Articles<th>Author</th></tr></thead>
                <tbody>
                   <?php
   			for($index=0;$index<count($articles);$index++){
     				echo "<tr><td><a href='views/Post.php?artID=".$articles[$index]->getArticleID()."'>".$articles[$index]->getTitle()."</a></td></tr>";
			}
		   ?>

               </tbody>        
            </table>  
            </form>
        </div>
    </div>


<?php   include "footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
