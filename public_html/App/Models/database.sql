CREATE TABLE user (
users_PK INTEGER AUTO_INCREMENT  PRIMARY KEY,
email VARCHAR(50) NOT NULL,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
address VARCHAR(200),
phone VARCHAR(50),
password varchar (100) NOT NULL,
gender varchar (6) not null,
active Integer not null
);

CREATE TABLE accounts (
account_number INTEGER AUTO_INCREMENT  PRIMARY KEY,
amount DECIMAL NOT NULL,
email varchar (40),
account_type VARCHAR(30) NOT NULL,
date_created DATE
);




