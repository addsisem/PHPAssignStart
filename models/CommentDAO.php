<?php
    include_once 'Comment.php';

    class CommentDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "student", "student", "blogDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addComment($comment){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO comments (authorID, artID, content, lastModified) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $comment->getAuthorID(), $comment->getArtID(), $comment->getContent(), $comment->getLastModified());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteComment($comid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM comments WHERE comID = ?");
            $stmt->bind_param("i", $comid);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

	public function getComments($artID){
	    $connection=$this->getConnection();
	    $stmt = $connection->prepare("SELECT FROM comments WHERE artID = ?");
	    $stmt->bind_param("k", $artID); 
	    $stmt->execute();
	    $result = $stmt->get_result();
	    while($row = $result->fetch_assoc()){  
		$comment = new Comment();
                $comment->load($row);
		$comments[]=$comment;
            }    
            $stmt->close();
	    $connection->close();
            return $comments;
        }
    }
?>   
