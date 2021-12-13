
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Delete Contact</h5>
                        <p class="card-text">Confirm Deletion of Contact from the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="delete">
                            <input type="hidden" name="contactID" value="<?php echo $contactid; ?>">
                            <button class="btn btn-primary" type="submit" name="submit" value="CONFIRM" >Confirm</button> 
                            <button class="btn btn-primary" type="submit" name="submit" value="CANCEL" >Cancel</button>   
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

