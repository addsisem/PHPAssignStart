<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete Article</h5>
                        <p class="card-text">Confirm Deletion of Article from the blog.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="delete">
                            <input type="hidden" name="artID" value="<?php echo $artID; ?>">
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button> 
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>   
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>
</body>
</html>
