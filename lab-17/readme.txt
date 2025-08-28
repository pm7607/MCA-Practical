first create database 
Database name is : mca

create table : user 

users table quiry 
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


add data in users table 
INSERT INTO users (username, password) 
VALUES ('admin', '1234'), ('john', 'abcd');

make new table books
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150),
    author VARCHAR(100),
    year INT
);
