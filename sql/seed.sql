CREATE TABLE `clients` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(50),
  email VARCHAR(50)
);
INSERT INTO `clients` (`name`, `email`) VALUES ('Paul', 'paul@example.com');
INSERT INTO `clients` (`name`, `email`) VALUES ('Sandra', 'sandra@example.com');