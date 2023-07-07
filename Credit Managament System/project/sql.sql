CREATE DATABASE transfer_credit; 
USE transfer_credit;

CREATE TABLE users( 
name VARCHAR(128), 
id INTEGER,
    email VARCHAR(128),
    credit INTEGER
);

INSERT INTO users (name, id,email,credit) VALUES ('John',1, 'john@gmail.com',1000) ;
INSERT INTO users (name, id,email,credit) VALUES ('Jake',2, 'jake@gmail.com',2000) ;
INSERT INTO users (name, id,email,credit) VALUES ('Jim',3, 'jim@gmail.com',3000) ;
INSERT INTO users (name, id,email,credit) VALUES ('Joe',4, 'joe@gmail.com',4000) ;
INSERT INTO users (name, id,email,credit) VALUES ('Jay',5, 'jay@gmail.com',5000) ;

CREATE TABLE loginform(
    ID INTEGER,
    user VARCHAR(128),
    pass VARCHAR(128)
);

INSERT INTO loginform(ID,user,pass) VALUES (1,'admin','admin');