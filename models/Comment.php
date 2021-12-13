<?php
    class Comment{
	    private $comID;
	    private $authorID;
	    private $artID;
	    private $content;
	    private $lastModified;

	    public function load($row){
		    $this->setComID($row['comID']);
		    $this->setAuthorID($row['authorID']);
		    $this->setArtID($row['artID']);
		    $this->setContent($row['content']);
		    $this->setLastModified($row['lastModified']);
	    }

	    public function setArtID($artID){
		    $this->artID=$artID;
	    }

	    public function getArtID(){
		    return $this->artID;
	    }

	    public function setComID($comID){
		    $this->comID=$comID;
	    }

	    public function getAuthorID(){
		    return $this->authorID;
	    }

	    public function setAuthorID($authorID){
		    $this->title=$title;
	    }

            public function setContent($content){
		    $this->content=$content;
	    }

	    public function getContent(){
		    return $this->content;
	    }

	    public function setLastModified($lastModified){
		    $this->lastModified=$lastModified;
	    }

	    public function getLastModified(){
		    return $this->lastModified;
	    }
	}
?>

      
