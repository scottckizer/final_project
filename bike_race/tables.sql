CREATE DATABASE bike_race;

USE bike_race;

create table user (
    id int auto_increment primary key,
    first_name varchar(20),
    last_name varchar(20),
    email varchar(255),
    password char(64),
    user_photo varchar(2080),
    remember_token varchar(255),
    created_at datetime,
    updated_at datetime
);

create table trail (
    id int auto_increment primary key,
    trail_name varchar(150),
    created_at datetime,
    updated_at datetime
);

create table race (
    id int auto_increment primary key,
    user_id int,
    trail_id int,
    race_name varchar(150),
    open_date datetime,
    close_date datetime,
    created_at datetime,
    updated_at datetime
);

create table trail_points (
    id int auto_increment primary key,
    trail_id int,
    latitude float,
    longitude float,
    time time,
    created_at datetime,
    updated_at datetime
);

create table photos (
    id int auto_increment primary key,
    user_id int,
    trail_id int,
    race_id int,
    created_at datetime,
    updated_at datetime
);

create table race_points (
    id int auto_increment primary key,
    user_id int,
    race_id int,
    latitude float,
    longitude float,
    time time,
    created_at datetime,
    updated_at datetime
);