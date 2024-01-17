DROP DATABASE IF EXISTS demo;
CREATE DATABASE IF NOT EXISTS demo;
USE demo;

CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
)
ENGINE = InnoDB;

INSERT INTO employees (id, name, address, salary)
VALUES
(1, "Agathe", "Lyon", 1000),
(2, "Théo", "Bourges", 900),
(3, "Corentin", "Nevers", 500),
(4, "Ryan", "Nevers", 2000),
(5, "Elise", "Nevers", 1200);