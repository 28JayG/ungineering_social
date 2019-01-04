CREATE DATABASE social_media;

USE social_media;

CREATE TABLE users(
   id INT NOT NULL AUTO_INCREMENT,
   name VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL,
   college VARCHAR(255) DEFAULT NULL,
   phone_no VARCHAR(255) DEFAULT NULL,
   PRIMARY KEY(id)
);

DESC users;

CREATE TABLE statuses(
   id INT NOT NULL AUTO_INCREMENT,
   status VARCHAR(1000) NOT NULL,
   time VARCHAR(255) NOT NULL,
   date VARCHAR(255) NOT NULL,
   user_id INT NOT NULL,
   PRIMARY KEY(id),
   FOREIGN KEY(user_id) REFERENCES users(id)
);

DESC statuses;

ALTER TABLE statuses DROP time;

ALTER TABLE statuses CHANGE date date_time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP;
