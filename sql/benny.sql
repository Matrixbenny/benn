CREATE DATABASE mydatabase;

USE mydatabase;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    usertype VARCHAR(20) NOT NULL
);
//Insert code
INSERT INTO `users`
(`id`, `fullname`, `username`, `email`, `password`, `usertype`)
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
 UPDATE `users` SET `id`='[value-1]',`fullname`='[value-2]',`username`='[value-3]',`email`='[value-4]',`password`='[value-5]',`usertype`='[value-6]' WHERE 1
 DELETE FROM `users` WHERE 0