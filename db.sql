CREATE DATABASE quizdb;

USE quizdb;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('Rudra', '$2y$10$oG9QJ7oYFfnw15kBCqV/Nua5znE08MYN4MGyXeXOU0Ql.qJJ/fC1O'),
('Atiq', '$2y$10$DiJPkegUFZmEn21nox/E8eBa7lp43v7LVXdcft4OUvrAZO797REWS');