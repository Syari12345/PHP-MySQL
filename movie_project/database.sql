CREATE DATABASE movie_project;
USE movie_project;

<<<<<<< HEAD
create table users(
	id int PRIMARY key AUTO_INCREMENT,
=======

create table users(
    id int PRIMARY key AUTO_INCREMENT,
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa
    emri varchar(255) not null,
    username varchar(255) not null,
    email varchar(255) not null,
    password varchar(255) not null,
    roli varchar(255) not null
);

<<<<<<< HEAD
create table movies (
	id int PRIMARY key AUTO_INCREMENT,
=======

create table movies (
    id int PRIMARY key AUTO_INCREMENT,
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa
    emri_filmit varchar(255) not null,
    viti_publikimit int,
    vleresimi decimal,
    zhanri varchar(255) not null
);

<<<<<<< HEAD
create table bookings(
	id int primary key AUTO_INCREMENT,
=======

create table bookings(
    id int primary key AUTO_INCREMENT,
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa
    data varchar(255) not null,
    movieID int,
    FOREIGN KEY (movieID) 
    REFERENCES movies(id),
<<<<<<< HEAD
	userID int,
=======
    userID int,
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa
    FOREIGN KEY (userID) 
    REFERENCES users(id),
    ulesja varchar(255) not null,
    nr_tiketave int not null
);