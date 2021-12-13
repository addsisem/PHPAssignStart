<?php 
   $articles = $_REQUEST['articles'];
?>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
              <table class="table table-bordered table-striped">
                <thead><tr><th>Articles<th>Author</th></tr></thead>
                <tbody>
                   <?php
    			for($index=0;$index<count($articles);$index++){
				$_SESSION['post'] = $index;
			        echo "<tr><td><a href = 'Post.php'>".$articles[$index]->getTitle()."</a></td></tr>";
	
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>
