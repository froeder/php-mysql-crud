CREATE DATABASE phpcrud ;
CREATE TABLE phpcrud.user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(30),
    age INT,
    born DATE
);