<?php 
   $users = $_REQUEST['users'];
?>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
            <button class="btn btn-primary" type="submit" name="page" value="add">Add User</button>
            <button class="btn btn-primary" type="submit" name="page" value="delete">Delete User</button>
            <table class="table table-bordered table-striped">
                <thead><tr><th>User ID</th><th>User Name</th><th>Email</th><th>Password</th></tr></thead>
                <tbody>
                    <?php

                        for($index=0;$index<count($users);$index++){
                            echo "<tr><td><input type=\"radio\" name=\"contactID\" value=\"".$users[$index]->getUserID()."\"></td>";
                            echo "<td>".$users[$index]->getUsername()."</td>";
                            echo "<td>".$users[$index]->getEmail()."</td>";
                            echo "<td>".$users[$index]->getPassword()."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>
