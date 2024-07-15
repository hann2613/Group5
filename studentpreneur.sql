create database studentpreneur;

use studentpreneur;

create table users (
    id int auto_increment primary key,
    email varchar(255) not null,
    password varchar(255) not null,
    role enum('user', 'admin') not null
);

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
    description varchat(255) not null
);

CREATE TABLE courses (
    id int auto_increment primary key,
    title varchar(255) not null,
    description varchat(255) not null,
    rate decimal(0,2) not null
);