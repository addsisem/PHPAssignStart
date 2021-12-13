<?php 
   $comments = $_REQUEST['comments'];
?>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
              <table class="table table-bordered table-striped">
                <thead><tr><th>Comment<th>Author</th></tr></thead>
                <tbody>
                   <?php
    			for($index=0;$index<count($comments);$index++){
			        echo "<tr><td>".$comments[$index]->getContent()."</td></tr>";	
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>
