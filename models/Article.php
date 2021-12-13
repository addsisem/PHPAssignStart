<?php
    class Article{
	    private $artID;
	    private $authorID;
	    private $catID;
	    private $title;
	    private $image;
	    private $content;
	    private $lastModified;

	    public function load($row){
		    $this->setArticleID($row['artID']);
		    $this->setCategoryID($row['catID']);
		    $this->setTitle($row['title']);
		    $this->setImage($row['image']);
		    $this->setContent($row['content']);
		    $this->setLastModified($row['lastModified']);
	    }

	    public function setArticleID($artID){
		    $this->artID=$artID;
	    }

	    public function getArticleID(){
		    return $this->artID;
	    }

	    public function setCategoryID($catID){
		    $this->catID=$catID;
	    }

	    public function getCategoryID(){
		    return $this->catID;
	    }

	    public function setTitle($title){
		    $this->title=$title;
	    }

	    public function getTitle(){
		    return $this->title;
	    }

	    public function setImage($image){
		    $this->image=$image;
	    }

	    public function getImage(){
		    return $this->image;
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

      
