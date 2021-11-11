<?php 
   $contacts = $_REQUEST['contacts'];
?>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
            <button class="btn btn-primary" type="submit" name="page" value="add">Add Contact</button>
            <button class="btn btn-primary" type="submit" name="page" value="delete">Delete Contact</button>
            <table class="table table-bordered table-striped">
                <thead><tr><th>Contact ID</th><th>User Name</th><th>Email</th><th>Password</th></tr></thead>
                <tbody>
                    <?php

                        for($index=0;$index<count($contacts);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"contactID\" value=\"".$contacts[$index]->getContactID()."\"></td>";
                            echo "<td>".$contacts[$index]->getUsername()."</td>";
                            echo "<td>".$contacts[$index]->getEmail()."</td>";
                            echo "<td>".$contacts[$index]->getPasswd()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>