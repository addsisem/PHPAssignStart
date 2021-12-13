<?php
  //  include "ControllerAction.php";
    include "../models/ArticleDAO.php";


    class CommentList implements ControllerAction{

        function processGET(){
            $commentDAO = new CommentDAO();
            $comments = $commentDAO->getComments();
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
?>
