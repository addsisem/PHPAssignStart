<?php
  //  include "ControllerAction.php";
    include "../models/ArticleDAO.php";


    class ArticleList implements ControllerAction{

        function processGET(){
            $articleDAO = new ArticleDAO();
            $articles = $articleDAO->getArticles();
            $_REQUEST['articles']=$articles;
            return "../views/listArticles.php";
        }

        function processPOST(){
            return;
        }

        function getAccess(){
            return "PROTECTED";
        }

    }
?>
