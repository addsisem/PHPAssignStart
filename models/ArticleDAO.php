<?php
    include_once 'Article.php';

    class ArticleDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "student", "student", "blogDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addArticle($article){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO articles (authorID, catID, title, image, content, lastModified) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $article->getAuthorID(), $article->getCategoryID(), $article->getTitle(), $article->getImage(), $article->getContent(), $article->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteArticle($artid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM articles WHERE artID = ?");
            $stmt->bind_param("i", $artid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

	public function getArticles(){
            $connection=$this->getConnection();
	    $stmt = $connection->prepare("SELECT * FROM articles;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $article = new Article();
                $article->load($row);
                $articles[]=$article;
            }    
            $stmt->close();
            $connection->close();
            return $articles;
        }

    }
?>   
