create database studentpreneur;

use studentpreneur;

create table users (
    id int auto_increment primary key,
    firstName varchar(255) not null,
    lastName varchar(255) not null,
    description varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    role enum('user', 'admin') not null
);

INSERT INTO users VALUES 
(1001, 'Emma', 'Rivera', 'Web Developer', 'Emma@example.com', 'sesame', 'user'),
(1002, 'John', 'Doe', 'Research Science', 'John@example.com', 'sesame','user'),
(1003, 'Jade', 'Smith','Java Developer', 'Ava@example.com', 'sesame','user');

create table lives (
    id int auto_increment primary key,
    title varchar(255) not null,
    date date not null
);

CREATE TABLE workshops (
    id int auto_increment primary key,
    title varchar(255) not null,
    date date not null
);

CREATE TABLE mentors (
    id int auto_increment primary key,
    name varchar(255) not null,
    description varchar(255) not null
);

CREATE TABLE courses (
    id int auto_increment primary key,
    title varchar(255) not null,
    description varchar(255) not null,
    rate decimal(2,0) not null
);

-- Create a user named ts_user
CREATE USER IF NOT EXISTS ts_user@localhost;

-- Grant privileges to the ts_user
GRANT ALL PRIVILEGES
ON studentpreneur.*
TO ts_user@localhost;