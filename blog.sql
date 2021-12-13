DROP DATABASE IF EXISTS blogDB;
CREATE DATABASE blogDB;
USE blogDB;

CREATE TABLE  users(
   userID 		INT	 	NOT NULL	AUTO_INCREMENT,
   username 		VARCHAR(30)	NOT NULL,
   lastname 		VARCHAR(50)	NOT NULL,
   firstname 		VARCHAR(30)	NOT NULL,
   password 		VARCHAR(30)	NOT NULL,
   email 		VARCHAR(255)	NOT NULL,
   role 		VARCHAR(30)	NOT NULL,
   lastModified 	DATETIME        NOT NULL	DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (userID)
)engine=innodb;

CREATE TABLE articles(
   artID 		INT 		NOT NULL	AUTO_INCREMENT,
   authorID 		INT 		NOT NULL,	
   catID 		INT 		NOT NULL,
   title 		VARCHAR(255)	NOT NULL,
   image 		VARCHAR(255)	NOT NULL,
   content 		TEXT 		NOT NULL,
   lastModified 	DATETIME 	NOT NULL 	DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (artID)
)engine=innodb;

CREATE TABLE comments(
   comID		INT		NOT NULL	AUTO_INCREMENT,
   authorID		INT		NOT NULL,
   artID		INT		NOT NULL,
   content		VARCHAR(255)	NOT NULL,
   lastModified		DATETIME	NOT NULL	DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (comID)
)engine=innodb;

CREATE TABLE topics(
   topID		INT		NOT NULL	AUTO_INCREMENT,
   name			VARCHAR(50)	NOT NULL,
   description		VARCHAR(255)	NOT NULL,
   lastModified		DATETIME	NOT NULL	DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (topID)
)engine=innodb;

insert into users(username,lastname,firstname,password,email,role) values('jsmith','Smith','Jim','password','jim.smith@gmail.com','user');
insert into users(username,lastname,firstname,password,email,role) values('mjones','Jones','Morgan','pass1','mjones@gmail.com','author');
insert into users(username,lastname,firstname,password,email,role) values('rwilson','Wilson','Rick','pass2','rick.wilson@gmail.com','admin');

insert into articles(authorID,catID,title,image,content) values('1','1','Basic HTML','img','Learn how to create a basic hello world program');
insert into articles(authorID,catID,title,image,content) values('2','1','C++ 101','img','Learn how to create a basic C++ program');
insert into articles(authorID,catID,title,image,content) values('1','2','2D Art','img','Learn how to paint and create textures with gouche');

insert into topics(name, description) values('Programming', 'Contains any articles relating to CS and Programming');

insert into comments(authorID,artID,content) values('1','1','Great Article! 10/10');
